<?php
require_once "./mvc/utility/utility.php";
class Customer extends Controller
{
    public $role_id=0,$username=0;
    // Must have SayHi()
    public function __construct()
    {
        $user = getUserToken();
        if($user != null) {
            $this->username = $user["username"];
            $this->role_id = $user["role_id"];
        }
    }
    function SayHi(){
        //$teo = $this->model("SinhVienModel");
        $this->view("Customer",["render"=>"showRooms","role"=>$this->role_id]);
    }
    function Service($id=-1)
    {
        $this->view("Customer",["render"=>"Service","role"=>$this->role_id,"index"=>$id]);
    }
    function ServiceForm()
    {
        $this->view("Customer",["render"=>"ServiceForm","role"=>$this->role_id]);
    }
    function Bill()
    {
        $this->view("Customer",["render"=>"Bill","role"=>$this->role_id]);
    }
    function Comment()
    {
        $this->view("Customer",["render"=>"Comment","role"=>$this->role_id]);
    }
}
?>