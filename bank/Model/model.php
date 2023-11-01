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

}
?>