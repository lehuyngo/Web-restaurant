<?php
require_once "mvc/utility/utility.php";
class Admin extends Controller{
    // Must have SayHi()
    function SayHi(){
        //$teo = $this->model("SinhVienModel");
        $this->view("BO",["render"=>"showRooms","role"=>2]);
    }
    function Room($id=-1)
    {
        $this->view("BO",["render"=>"Room","role"=>2,"index"=>$id]);
    }
    function RoomList()
    {
        $this->view("BO",["render"=>"RoomList","role"=>2]);
    }
    function RoomOrderer()
    {
        $this->view("BO",["render"=>"RoomOrderer","role"=>2]);
    }
    function RoomBill()
    {
        $this->view("BO",["render"=>"RoomBill","role"=>2]);
    }
    function RoomBooked()
    {
        $this->view("BO",["render"=>"RoomBooked","role"=>2]);
    }
    function EditRoom()
    {
        $this->view("BO",["render"=>"EditRoom","role"=>2]);
    }

    function Service($id=-1)
    {
        $this->view("BO",["render"=>"Service","role"=>2,"index"=>$id]);
    }
    function ServiceOrderer()
    {
        $this->view("BO",["render"=>"ServiceOrderer","role"=>2]);
    }

    function ManageHR()
    {
        $this->view("BO",["render"=>"ManageHR","role"=>2]);
    }
    function ManageBill()
    {
        $this->view("BO",["render"=>"ManageBill","role"=>2]);
    }
    function ManageDetailHR()
    {
        $this->view("BO",["render"=>"ManageDetailHR","role"=>2]);
    }
    function ManageDetailBill()
    {
        $this->view("BO",["render"=>"ManageDetailBill","role"=>2]);
    }
    function EditService()
    {
        $this->view("BO",["render"=>"EditService","role"=>2]);
    }
    ////// cac ham khac o day
}
?>