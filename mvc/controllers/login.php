<?php
require_once "./mvc/utility/utility.php";

class Login extends Controller{

    public $UserModel;

    public function __construct(){
        $this->UserModel=$this->model("UserModel");
    }

    public function SayHi(){
        $this->view("login", []);
    }

    public function UserLogin() {

        if( isset($_POST["btnLogin"]) ) {
            // get data
            $username = getPost('username');
            $password = getPost('password');
            
            $password = getSecurityMD5($password);
            
            
            $kq = $this->UserModel->XacNhanTaiKhoan($username, $password);
            
            // show home
            
            if($kq["result"]) {
                if($kq["role_id"] == 1) {
                    header('Location: http://localhost/Customer');
                }
                else if($kq["role_id"] == 3){
                    header('Location: http://localhost/OHR');
                }
                else if($kq["role_id"] == 2){
                    header('Location: http://localhost/Admin');
                }
            }
            else {
                header('Location: http://localhost/Login');
                //$this->view("login", []);
            }

        }
    }

    public function UserLogout() {
        $user = getUserToken();
        if($user != null) {
            $token = getCookie('token');
            $id = $user['id'];
            $this->UserModel->deleteToken($id, $token);
            setcookie('token', '', time() - 100, '/');
        }
        session_destroy();
        header('Location: http://localhost/Home');
    }
}

?>