<?php

require_once './mvc/views/blocks/header.php';


if ($data["render"]=="showRooms")
{
   require_once "./mvc/views/Customer/quangcao.php";
   require_once "./mvc/views/Customer/showRooms.php";
}
elseif ($data["render"]=="Room_CSO"){
   require_once "./mvc/views/CSO/Room_CSO.php";
}
elseif ($data["render"]=="RoomDetail")
{
   require_once "./mvc/views/CSO/RoomDetail.php";
}
elseif ($data["render"]=="Service_CSO"){
   require_once "./mvc/views/CSO/Service_CSO.php";
}
elseif ($data["render"]=="ServiceDetail"){
   require_once "./mvc/views/CSO/ServiceDetail.php";
}
elseif ($data["render"]=="ServiceOrderer"){
   require_once "./mvc/views/CSO/BookedServiceList_CSO.php";
}
elseif ($data["render"]=="form")
{
   require_once "./mvc/views/Customer/form.php";
}

require_once './mvc/views/blocks/footer.php';
?>