<?php
    class OHR extends Controller{
    // Must have SayHi()
        function SayHi(){
            //$teo = $this->model("SinhVienModel");
            $this->view("OHR",["render"=>"showRooms","role"=>3]);
        }

        function Room_OHR($id = -1){
            $this->view("OHR",["render"=>"Room_OHR","role"=>3,"index" => $id]);
        }
        function RoomDetail()
        {
            $this->view("OHR",["render"=>"RoomDetail","role"=>3]);
        }
        function RoomList()
        {
            $this->view("OHR",["render"=>"RoomList","role"=>3]);
        }
        function RoomBill()
        {
            $this->view("OHR",["render"=>"RoomBill","role"=>3]);
        }
        function RoomOrderer()
        {
            $this->view("OHR",["render"=>"RoomOrderer","role"=>3]);
        }
        function RoomBooked()
        {
            $this->view("OHR",["render"=>"RoomBooked","role"=>3]);
        }
        function Service_OHR($id = -1){
            $this->view("OHR",["render"=>"Service_OHR","role"=>3,"index" => $id]);
        }
        function ServiceDetail(){
            $this->view("OHR",["render"=>"ServiceDetail","role"=>3]);
        }
        function DetailBill()
        {
            $this->view("OHR",["render"=>"DetailBill","role"=>3]);
        }
    ////// cac ham khac o day
}
?>