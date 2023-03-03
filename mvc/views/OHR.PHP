<?php

require_once './mvc/views/blocks/header.php';


if ($data["render"]=="showRooms")
{
   require_once "./mvc/views/Customer/quangcao.php";
   require_once "./mvc/views/Customer/showRooms.php";
}
elseif ($data["render"] == "Room_OHR"){
   require_once "./mvc/views/OHR/Room_OHR.php";
}
elseif ($data["render"]=="RoomDetail")
{
   require_once "./mvc/views/OHR/RoomDetail.php";
}
elseif ($data["render"]=="RoomList")
{
   require_once "./mvc/views/OHR/Room_List.php";
}
elseif ($data["render"]=="RoomBill")
{
   require_once "./mvc/views/OHR/Detail_Unpaid_Bill.php";
}
elseif ($data["render"]=="RoomOrderer")
{
   require_once "./mvc/views/OHR/RoomOrderer_OHR.php";
}
elseif ($data["render"]=="RoomBooked")
{
   require_once "./mvc/views/OHR/Detail_Booked_Room.php";
}
elseif ($data["render"] == "Service_OHR"){
   require_once "./mvc/views/OHR/Service_OHR.php";
}
elseif ($data["render"] == "ServiceDetail"){
   require_once "./mvc/views/OHR/ServiceDetail.php";
}
elseif ($data["render"]=="RoomForm")
{
   require_once "./mvc/views/Customer/form.php";
}
elseif ($data["render"]=="")

require_once './mvc/views/blocks/footer.php';
?>