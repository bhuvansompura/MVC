<?php
require_once("Model/model.php");
class controller extends Model{
     function __construct() {
        parent::__construct();
         if (isset($_SERVER['PATH_INFO'])) {
            //  echo "<pre>";
            //  print_r($_SERVER);
            //  echo "</pre>";
             switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("View/home.php");
                    break;
                case '/registration':
                    include_once("View/home.php");
                    include_once("View/register.php");
                    if (isset($_POST['register'])) {
                        array_pop($_POST);
                        echo "<pre>";
                        print_r($_POST);
                        echo "</pre>";

                       $insertres = $this->insert("bankmanage",$_POST);

                    }
                
                    break;
                
                default:
                    
                    break;
                }
            }else {
                header("location:home");
            }
     
    }
}
$Controller = new Controller;






?>