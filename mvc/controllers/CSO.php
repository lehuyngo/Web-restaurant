<?php
    class CSO extends Controller{
    // Must have SayHi()
        function SayHi(){
            //$teo = $this->model("SinhVienModel");
            $this->view("CSO",["render"=>"showRooms","role"=>3]);
        }

        function Room_CSO($id = -1){
            $this->view("CSO",["render"=>"Room_CSO","role"=>3,"index" => $id]);
        }
        function RoomDetail()
        {
            $this->view("CSO",["render"=>"RoomDetail","role"=>3]);
        }
        function Service_CSO($id = -1){
            $this->view("CSO",["render"=>"Service_CSO","role"=>3,"index" => $id]);
        }
        function ServiceDetail(){
            $this->view("CSO",["render"=>"ServiceDetail","role"=>3]);
        }
        function ServiceOrderer(){
            $this->view("CSO",["render"=>"ServiceOrderer","role"=>3]);
        }

        function DetailBill()
        {
            $this->view("CSO",["render"=>"DetailBill","role"=>3]);
        }
    ////// cac ham khac o day
}
?>