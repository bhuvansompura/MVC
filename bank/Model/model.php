<?php

class Model{

 function __construct(public $connection = null) {
    $this->connection = new mysqli("localhost","root","","masterdatabase");
}
 
 function insert($table,$data) {

    $keys = implode(",",array_keys($data));
    $values = implode("','",$data);
    $sql = "INSERT INTO $table($keys)VALUE('$values')";
    echo $sql;
    $sqlex = $this->connection->query($sql);
    if ($sqlex > 0) {
        $responsedata['data']="1";
        $responsedata['msg']="success";
        $responsedata['code']="1";
    }else {
        $responsedata['data']="0";
        $responsedata['msg']="Error";
        $responsedata['code']="0";
        
    }
    return $responsedata;

}

function login($username,$password) {
    $sql = "SELECT * FROM bankmanage WHERE password = '$password' AND (name='$username' or email='$username' or mobile='$username')";
    // echo $sql;
    $sqlex = $this->connection->query($sql);
    if ($sqlex->num_rows > 0) {
       $fetchdata = $sqlex->fetch_object();
       $ResponceData['Data'] = $fetchdata;
       $ResponceData['Msg'] = "success";
       $ResponceData['Code'] = "1";
    }else {
       $ResponceData['Data'] = "0";
       $ResponceData['Msg'] = "try again";
       $ResponceData['Code'] = "0";
       
    }
    return $ResponceData;
  }

  function select($tbl,$where=null) {
    $sql = "SELECT * FROM $tbl";
    //    if ($where != null) {
    //          $sql .= " WHERE";
    //          foreach ($where as $key => $value) {
    //                 $sql .= " $key = '$value' AND";
    //             }
    //         }
    
            $sql = rtrim($sql, "AND");
        //   echo $sql;
    $sqlex = $this->connection->query($sql);
    if ($sqlex->num_rows > 0) {
       while ($data = $sqlex->fetch_object()) {
          
          $fetchdata[] = $data;
       }
       $ResponceData['Data'] = $fetchdata;
       $ResponceData['Msg'] = "success";
       $ResponceData['Code'] = "1";
    }else {
       $ResponceData['Data'] = "0";
       $ResponceData['Msg'] = "try again";
       $ResponceData['Code'] = "0";
       
    }
    return $ResponceData;
  }

}
?>