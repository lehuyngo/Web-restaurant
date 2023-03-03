<?php
require_once "./mvc/utility/utility.php";
class Home extends Controller {
    // Must have SayHi()
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
    function Room($id=-1)
    {
        $this->view("Customer",["render"=>"Room","role"=>$this->role_id,"index"=>$id]);
    }
    function RoomDetail()
    {
        $this->view("Customer",["render"=>"RoomDetail","role"=>$this->role_id]);
    }
    function RoomForm()
    {
        $this->view("Customer",["render"=>"RoomForm","role"=>$this->role_id]);
    }
    function RoomConfirm()
    {
        $this->view("Customer",["render"=>"RoomConfirm","role"=>$this->role_id]);
    }
    public function Service($id=-1)
    {
        $this->view("Customer",["render"=>"Service","role"=>$this->role_id,"index"=>$id]);
        ///// neu id=-1 thi danh sach serrvice, con khong thi showservice detail o vi tri id
      ///id lay tu param (core/app.php)
    }
}
?>