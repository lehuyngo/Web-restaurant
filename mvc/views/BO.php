<?php
require_once './mvc/views/blocks/header.php';
   if ($data["render"]=="showRooms")
   {
      require_once "./mvc/views/Customer/quangcao.php";
      require_once "./mvc/views/Customer/showRooms.php";
   }
   
   elseif ($data["render"]=="Room")
   {
      require_once "./mvc/views/BO/BO_Room.php";
   }
   elseif ($data["render"]=="RoomList")
   {
      require_once "./mvc/views/BO/BO_Room_List.php";
   }
   elseif ($data["render"]=="RoomOrderer")
   {
      require_once "./mvc/views/BO/BO_Booked_Room_List.php";
   }
   elseif ($data["render"]=="RoomBill")
   {
      require_once "./mvc/views/BO/BO_Detailed_Unpaid_Bill.php";
   }
   elseif ($data["render"]=="RoomBooked")
   {
      require_once "./mvc/views/BO/BO_Detailed_Booked_Room.php";
   }

   elseif ($data["render"]=="Service")
   {
      require_once "./mvc/views/BO/BO_Service.php";
   }
   elseif ($data["render"]=="ServiceOrderer")
   {
      require_once "./mvc/views/BO/BO_Booked_Service_List.php";
   }

   elseif ($data["render"]=="ManageHR")
   {
      require_once "./mvc/views/BO/BO_Manage_HR.php";
   }
   elseif ($data["render"]=="ManageBill")
   {
      require_once "./mvc/views/BO/BO_Manage_Bill.php";
   }
   elseif ($data["render"]=="ManageDetailBill")
   {
      require_once "./mvc/views/BO/BO_Manage_Detail_Bill.php";
   }
   elseif ($data["render"]=="ManageDetailHR")
   {
      require_once "./mvc/views/BO/BO_Manage_Detail_HR.php";
   }
   elseif ($data["render"]=="form")
   {
      require_once "./mvc/views/Customer/form.php";
   }
require_once './mvc/views/blocks/footer.php';
?>