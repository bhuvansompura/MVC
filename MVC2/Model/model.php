<?php

class Model{

    function __construct(public $conn = null) {

    $this->conn = new mysqli("localhost","root","","masterdatabase");
}
 
function insert($tbl,$data) {
    $keys = implode(",",array_keys($data));
    $val = implode("','",$data);
    $sql = "INSERT INTO $tbl($keys)VALUES('$val')";
    // echo $sql;
    $sqlex = $this->conn->query($sql);
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

function login($name, $password)
    {
        $sql = "SELECT * FROM  studentsdata WHERE password='$password' AND (fullname='$name' or email='$name')";
        $sqlex = $this->connection->query($sql);
        // echo "<pre>";
        // print_r($sqlex);
        // echo "</pre>";
        if ($sqlex->num_rows > 0) {
            $fetchdata = $sqlex->fetch_object();
            $ResponceData['Data'] = $fetchdata;
            $ResponceData['Msg'] = "Success";
            $ResponceData['Code'] = "1";
        } else {
            $ResponceData['Data'] = "0";
            $ResponceData['Msg'] = "Try Again";
            $ResponceData['Code'] = "0";
        }
        return $ResponceData;
    }

}


?>