<?php

class controller{
     function __construct() {
         if (isset($_SERVER['PATH_INFO'])) {
            //  echo "<pre>";
            //  print_r($_SERVER);
            //  echo "</pre>";
             switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("View/home.php");
                    break;
                case '/register':
                    include_once("View/home.php");
                    include_once("View/register.php");

                    break;
                
                default:
                    # code...
                    break;
             }
            }else {
                header("location:home");
            }
        
    }
}
$Controller = new Controller;






?>