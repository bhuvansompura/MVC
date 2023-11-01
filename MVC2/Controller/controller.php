<?php
 require_once("Model/model.php");


class Controller extends Model{
    public $baseURL = "";
 function __construct() {
        parent::__construct();
        $this->baseURL = "http://localhost/MVC/MVC2/";
        ob_start();
        if (isset($_SERVER['PATH_INFO'])) {
            // echo "<pre>";
            // print_r($_SERVER);
            // echo "</pre>";
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("View/header.php");
                    include_once("View/homepage.php");
                    include_once("View/footer.php");
                    break;
                case '/register':
                    include_once("View/header.php");
                    include_once("View/register.php");
                    // include_once("View/footer.php");
                    if (isset($_POST['register'])) {
                        array_pop($_POST);
                        // echo "<pre>";
                        // print_r($_POST);
                        // echo "</pre>";
                        $insertres =  $this->insert("users",$_POST);
                        if ($insertres['code'] == 1) {
                            header("location:login");
                        }else{
                            echo "<script>alert invalid</script>";
                        }
                    }
                    break;
                case '/login':
                    include_once("View/header.php");
                    include_once("View/login.php");
                    // include_once("View/footer.php");
                    break;
                case '/contact':
                    include_once("View/header.php");
                    include_once("View/homepage.php");
                    include_once("View/footer.php");
                    break;
                
                default:
                    # code...
                    break;
            }
            
        }else {
            header("location:home");
        }
        ob_flush();
    }
}

$Controller = new Controller;




?>