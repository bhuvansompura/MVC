<?php

class Model{
   // public $connection = "";
 function __construct(public $connection = null) {
    $this->connection = new mysqli("localhost","root","","masterdatabase");

 }
 public function insert($tbl,$data) {
   
    $keys = implode(",",array_keys($data));
    $clm =  implode("','",$data);
   $sql = "INSERT INTO $tbl($keys)VALUE('$clm')";
   echo  $sql;
   $sqlex  = $this->connection->query($sql);
   if($sqlex > 0) {
      $ResponceData['Data'] = "1";
      $ResponceData['Msg'] = "Success";
      $ResponceData['Code'] = "1";
   } else {
      $ResponceData['Data'] = "0";
      $ResponceData['Msg'] = "Try Again";
      $ResponceData['Code'] = "0";
  }
  return $ResponceData;

   
 }
 function login($username,$password) {
   $sql = "SELECT * FROM handtime WHERE password = '$password' AND (name='$username' or email='$username' or mobile='$username')";
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
 
 function update($tbl,$data,$where){
   $sql = "UPDATE $tbl SET";
   foreach ($data as $key => $value) {
      $sql.= " $key = '$value ' ,";
      }
      $sql = rtrim($sql,",");
      $sql .= " WHERE";
      foreach ($where as $key => $value) {
          $sql.= " $key = '$value ' AND";
      }
      $sql = rtrim($sql,"AND");
      $sqlex = $this->connection->query($sql);
      if ($sqlex > 0) {
       $ResponceData['Data'] = "1";
       $ResponceData['Msg'] = "success";
       $ResponceData['Code'] = "1";
      }else {
         $ResponceData['Data'] = "0";
         $ResponceData['Msg'] = "try again";
         $ResponceData['Code'] = "o";
         
      }
 }

function select($tbl,$where=null) {
   $sql = "SELECT * FROM $tbl";
      if ($where != null) {
            $sql .= " WHERE";
            foreach ($where as $key => $value) {
                   $sql .= " $key = '$value' AND";
               }
           }
           $sql = rtrim($sql, "AND");
         echo $sql;
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

function delete($tbl,$where)
    {
        $sql = " DELETE FROM $tbl WHERE ";
       
        foreach ($where as $key => $value) {
            $sql.= " $key = '$value ' AND";
        }
        $sql = rtrim($sql,"AND");
        echo $sql;
        $sqlex = $this->connection->query($sql);
        if ($sqlex > 0) {
            $ResponceData['Data'] = "1";
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
