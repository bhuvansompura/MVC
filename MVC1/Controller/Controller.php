
<?php
require_once("Model/Model.php");

class Controller extends Model
{
    public $baseURL = "";
    function __construct()
    {
        parent::__construct();
        $this->baseURL = "http://localhost/29SEP_LARAVEL_ttS/MVCPROJECT/Assests/";
        // echo "<pre>";
        // print_r($_SERVER);
        // echo "</pre>";
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("Views/header.php");
                    include_once("Views/homepage.php");
                    include_once("Views/footer.php");
                    break;
                case '/about':
                    include_once("Views/header.php");
                    include_once("Views/about.php");
                    include_once("Views/footer.php");
                    break;
                case '/contact':
                    include_once("Views/header.php");
                    include_once("Views/contact.php");
                    include_once("Views/footer.php");
                    break;
                case '/register':
                    include_once("Views/register.php");
                    if(isset($_POST['register'])){
                        array_pop($_POST);
                        $hobbydata = implode(",",$_POST['hobby']);
                        array_pop($_POST);
                        // echo $hobbydata;
                        $data = array_merge($_POST,array("hobby"=>$hobbydata));
                        $InsertRes = $this->register("studentsdata",$data);

                        // echo "<pre>";
                        // print_r($InsertRes);
                        // echo "</pre>";
                        if($InsertRes['Code'] = 1){
                            header("location:login");
                        }
                    }
                    break;
                
                default:
                    # code...
                    break;
            }
        } else {
            header("location:home");
        }
    }
}

$Controller = new Controller;

?>