<?php

class Model
{

    function __construct(protected $connection = null)
    {
        $this->connection = new mysqli("localhost", "root", "", "masterdatabase");
        // if($this->connection){
        //     echo "connection succees";

        // } else {
        //     echo "Connection Fail";
        // }
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
    function select($tbl, $where = null)
    {
        $sql = " SELECT * FROM $tbl ";
        if ($where != null) {
            $sql .= " WHERE";
            foreach ($where as $key => $value) {
                $sql .= " $key = '$value' AND";
            }
        }
        $sql = rtrim($sql, "AND");
        // echo $sql;
        $sqlex = $this->connection->query($sql);
        // echo "<pre>";
        // print_r($sqlex);
        // echo "</pre>";
        if ($sqlex->num_rows > 0) {
            while ($Data = $sqlex->fetch_object()) {
                $fetchdata[] = $Data;
            }
            //    $fetchdata = $sqlex->fetch_object();
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

    function register($tbl, $data)
    {
        $clm = implode(",", array_keys($data));
        $val = implode("','", $data);

        $sql = " INSERT INTO $tbl($clm) VALUE ('$val')";

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

    function Update($tbl,$data,$where)
    {
        $sql = " UPDATE $tbl SET ";

        foreach ($data as $key => $value) {
        $sql.= " $key = '$value ' ,";
        }
        $sql = rtrim($sql,",");
        $sql .= " WHERE";
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
    function Delete($tbl,$where)
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
