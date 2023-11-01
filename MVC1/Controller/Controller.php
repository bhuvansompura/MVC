
<?php
session_start();
require_once("Model/Model.php");

class Controller extends Model{
    public $baseURL = "";
    function __construct()
    {
        ob_start();
        parent::__construct();
        $this->baseURL = "http://localhost/MVC/MVC1/Assests/";
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
                case '/admin':
                    include_once("Views/admin/adminheader.php");
                    include_once("Views/admin/dashboard.php");
                    include_once("Views/admin/adminfooter.php");
                    break;
                case '/addusers':
                    // include_once("Views/admin/adminheader.php");
                    include_once("Views/admin/addusers.php");
                    // include_once("Views/admin/adminfooter.php");
                    if (isset($_POST['register'])) {
                        array_pop($_POST);
                        $hobbydata = implode(",", $_POST['hobby']);
                        array_pop($_POST);
                        // echo $hobbydata;
                        $data = array_merge($_POST, array("hobby" => $hobbydata));
                        $InsertRes = $this->register("studentsdata", $data);

                        // echo "<pre>";
                        // print_r($InsertRes);
                        // echo "</pre>";
                        if ($InsertRes['Code'] = 1) {
                            header("location:viewusers");
                        }
                    }
                    break;
                case '/delete':
                    $DeleteRes = $this->Delete("studentsdata", array("id" => $_GET['userid']));
                    if ($DeleteRes['Code'] == 1) {
                        header("location:viewusers");
                    }
                    break;
                case '/viewusers':
                    $viewRes = $this->select("studentsdata", array('role_id' => "2"));
                    // echo "<pre>";
                    // print_r($viewRes['Data']);
                    // echo "</pre>";
                    // exit;
                    include_once("Views/admin/adminheader.php");
                    include_once("Views/admin/viewusers.php");
                    include_once("Views/admin/adminfooter.php");
                    break;
                case '/edit':
                    $EditRes = $this->select("studentsdata", array("id" => $_GET['userid']));
                    // echo "<pre>";
                    // print_r($EditRes['Data']);
                    // echo "</pre>";
                    include_once("Views/admin/edit.php");
                    // exit;

                    if (isset($_POST['update'])) {
                        unset($_POST['update']);
                        $hobbydata = implode(",", $_POST['hobby']);
                        // echo $hobbydata;
                        $Data = array_merge($_POST, array("hobby" => $hobbydata));
                        echo "<pre>";
                        print_r($Data);
                        echo "</pre>";
                        $UpdateRes = $this->Update("studentsdata", $Data, array("id" => $_GET['userid']));
                        echo "<pre>";
                        print_r($UpdateRes);
                        echo "</pre>";
                        if ($UpdateRes['Code'] == 1) {
                            header("location:viewusers");
                        }
                    }



                    break;
                case '/login':
                    include_once("Views/header.php");
                    include_once("Views/login.php");
                    // include_once("Views/footer.php");
                    if (isset($_POST['login'])) {

                        // echo "<pre>";
                        // print_r($_POST);
                        // echo "</pre>";
                        $res =  $this->login($_POST['fullname'], $_POST['password']);
                        //    echo "<pre>";
                        //    print_r($res);
                        //    echo "</pre>";
                        if ($_POST['fullname'] != "" && $_POST['password'] != "") {
                            $_SESSION['userdata'] = $res['Data'];
                            if ($res['Code'] == 1) {
                                if ($res['Data']->role_id == 1) {
                                    header("location:admin");
                                } else {
                                    header("location:home");
                                }
                            } else {
                                echo " <script>
                            alert('Invalid User')
                            </script> ";
                            }
                        } else {
                            echo " <script>
                            alert('Enter  Username And Password!!!')
                            </script> ";
                        }
                    }
                    break;
                case '/register':
                    include_once("Views/register.php");
                    if (isset($_POST['register'])) {
                        array_pop($_POST);
                        $hobbydata = implode(",", $_POST['hobby']);
                        array_pop($_POST);
                        // echo $hobbydata;
                        $data = array_merge($_POST, array("hobby" => $hobbydata));
                        $InsertRes = $this->register("studentsdata", $data);

                        // echo "<pre>";
                        // print_r($InsertRes);
                        // echo "</pre>";
                        if ($InsertRes['Code'] = 1) {
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
        ob_flush();
    }
}

$Controller = new Controller;

?>