<?php  
require_once "./mvc/views/blocks/header.php";
   if ($data["render"]=="showRooms")
   {
      require_once "./mvc/views/Customer/quangcao.php";
      require_once "./mvc/views/Customer/showRooms.php";
   }
   elseif ($data["render"]=="Room")
   {
      require_once "./mvc/views/Home/Room.php";
   }
   elseif ($data["render"]=="RoomForm")
   {
      require_once "./mvc/views/Home/RoomForm.php";
   }
   elseif($data["render"]=="RoomConfirm")
   {
      require_once "./mvc/views/Home/RoomConfirm.php";
   }
   elseif($data["render"]=="Service")
   {
      require_once "./mvc/views/Customer/Service.php";
   }
   elseif ($data["render"]=="ServiceForm")
   {
      require_once"./mvc/views/Customer/ServiceForm.php";
   }
   elseif ($data["render"]=="Bill")
   {
      require_once"./mvc/views/Customer/Bill.php";
   
   }
   elseif ($data["render"]=="Comment")
   {
      require_once"./mvc/views/Customer/Comment.php";
   }
include "./mvc/views/blocks/footer.php"
?>

    
