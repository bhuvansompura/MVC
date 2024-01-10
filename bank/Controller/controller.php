<?php
session_start();
require_once("Model/model.php");
class controller extends Model{
     function __construct() {
        parent::__construct();
        ob_start();
         if (isset($_SERVER['PATH_INFO'])) {
            //  echo "<pre>";
            //  print_r($_SERVER);
            //  echo "</pre>";
             switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("View/home.php");
                    break;
                case '/admin':
                    include_once("View/admin.php");
                    break;
                case '/account':
                    include_once("View/account.php");
                    if (isset($_POST['newaccount'])) {
                        array_pop($_POST);
                        echo "<pre>";
                        print_r($_POST);
                        echo "</pre>";

                       $insertres = $this->insert("accounts",$_POST);
                       if ($insertres['Code'] = 1) {
                         header("location:admin");
                        
                       }

                    }
                    break;
                case '/viewusers':
                    
                    $viewRes = $this->select("bankmanage",array('role_id'=> "2"));
                    include_once("View/admin.php");
                    include_once("View/users.php");

                    break;
                    case '/delete':
                        $DeleteRes = $this->Delete("bankmanage", array("id" => $_GET['userid']));
                        if ($DeleteRes['Code'] == 1) {
                            header("location:viewusers");
                        }
                        break;
                case '/viewaccounts':
                    
                    $viewRes = $this->select("accounts",array('role_id'=> "2"));
                    include_once("View/admin.php");
                    include_once("View/allaccount.php");

                    break;
                case '/logout':
                    session_destroy();
                    header("location:home");
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
                       if ($insertres['Code'] = 1) {
                         header("location:login");
                        
                       }

                    }
                
                    break;
                
                    case '/login':
                        // include_once("View/home.php");  
                        include_once("View/login.php");  
                        // include_once("View/footer.php"); 
                        if (isset($_POST['login'])) {
                        $loginres = $this->login($_POST['name'], $_POST['password'] );
                        // echo "<pre>";
                        // print_r($res);
                        // echo "<pre>";
                        if ($loginres['Code'] == 1) {
                            if ($loginres['Data']->role_id == 1) {
                                header("location:admin");
                            }else {
                                header("location:home");
                            }
                        }else {
                            echo " <script>
                                    alert('Invalid User')
                                    </script> ";
                        }
                        
                        
                        } 
                       
                        break;
                default:
                    
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