<?php  
session_start();
require_once("Model/model.php");

class controller extends Model{
    public $baseURL = "";
     function __construct() {
        ob_start();
        parent::__construct();
        $this->baseURL = "http://localhost/ecom.project/Assets/";
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
                case '/product':
                    include_once("View/header.php");  
                    include_once("View/product.php");  
                    include_once("View/footer.php");  
                   
                    break;
                case '/about':
                    include_once("View/header.php");  
                    include_once("View/about.php");  
                    include_once("View/footer.php");  
                   
                    break;
                case '/delete':
                    $DeleteRes = $this->Delete("handtime", array("id" => $_GET['userid']));
                    if ($DeleteRes['Code'] == 1) {
                        header("location:viewalluser");
                    }
                   
                    break;
                case '/viewalluser':
                 $viewRes = $this->select("handtime",array('role_id' => "2"));
              
                    include_once("View/Admin/adminheader.php");  
                    include_once("View/Admin/allusers.php"); 
                    
                    
                    break;
                
                    case '/edit':
                        $EditRes = $this->select("handtime", array("id" => $_GET['userid']));
                        include_once("View/Admin/adminheader.php");
                        include_once("View/Admin/update.php");
                         if (isset($_POST['update'])) {
                             unset($_POST['update']);
                             $updateRes = $this->update("handtime",$_POST,array("id" => $_GET['userid']));
                             if ($updateRes['Code'] = 1) {
                                header("location:viewalluser");
                             }
                         }
                        
                        
                        break;    
                    
                   
                case '/admin':
                    include_once("View/Admin/adminheader.php");  
                     
                    include_once("View/Admin/adminfooter.php");  
                   
                    break;
                case '/registration':
                    include_once("View/header.php");  
                    include_once("View/registration.php");  
                    // include_once("View/footer.php"); 
                    if (isset($_REQUEST['register'])) {
                        array_pop($_REQUEST);
                        echo "<pre>";
                        print_r($_REQUEST);
                        echo "</pre>";
                       $res = $this->insert("handtime",$_REQUEST);
                        if ($res['Code'] == 1) {
                            header("location:login");
                        }else {
                            header("location:home");
                            
                        }
                    }
        
                    break;
                case '/login':
                    include_once("View/header.php");  
                    include_once("View/login.php");  
                    // include_once("View/footer.php"); 
                    if (isset($_POST['login'])) {
                    $res = $this->login($_POST['name'], $_POST['password'] );
                    // echo "<pre>";
                    // print_r($res);
                    // echo "<pre>";
                    if ($res['Code'] == 1) {
                    if ($res['Data']->role_id == 1) {
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
                    case '/logout':
                         session_destroy();
                         header("location:home");
                       
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

$Controller = new controller;






?>