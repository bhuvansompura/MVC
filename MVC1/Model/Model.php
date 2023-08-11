
<?php

class Model{

    function __construct(protected $connection = null)
    {
        $this->connection = new mysqli("localhost","root","","masterdatabase");
        // if($this->connection){
        //     echo "connection succees";

        // } else {
        //     echo "Connection Fail";
        // }
    }

    function register($tbl,$data){
        $clm = implode(",",array_keys($data));
        $val = implode("','", $data);
        
        $sql = " INSERT INTO $tbl($clm) VALUE ('$val')";

        // echo $sql;
        $sqlex = $this->connection->query($sql);
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


}




?>