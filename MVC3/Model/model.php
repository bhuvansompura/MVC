<?php

class Model{

 function __construct(public $connection = null) {
    $this->connection = new mysqli("localhost","root",""," masterdatabase");
}
 
function insert($tbl,$data) {
    $keys = implode(",",array_keys($data));
    $val = implode("','",$data);
    $sql = "INSERT INTO $tbl($keys)VALUES('$val')";
    echo $sql;
    // $sqlex = $this->connection->query($sql);
    // if ($sqlex > 0) {
    //     $responsedata['data']="1";
    //     $responsedata['msg']="success";
    //     $responsedata['code']="1";
    // }else {
    //     $responsedata['data']="0";
    //     $responsedata['msg']="Error";
    //     $responsedata['code']="0";
        
    // }
    // return $responsedata;

}

}


?>