<style>
.detail-service-box {
  width: 75%;
  height: auto;
  text-align: center;
  background-color: white;
  margin-left: 25px;
  font-family: 'Imprima';
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
}
#name_room_odd {
  background-color: #D9D9D9;
  font-family: 'Imprima';
  font-style: normal;
  font-weight: 400;
  font-size: 30px;
  color: black;
  
}
#name_room_even {
  text-decoration: none;
  font-family: 'Imprima';
  font-style: normal;
  font-weight: 400;
  font-size: 30px;
}
</style>
<div class="service_detail_box" style="display: flex;">
  <ul class="list-group" style="width: 20%;">
    <a href="http://localhost/Admin/Service/1" style="text-decoration: none;"><li class="list-group-item" id="name_room_odd">Massage</li></a>
    <a href="http://localhost/Admin/Service/2" style="text-decoration: none;"><li class="list-group-item" id="name_room_even">Spa</li></a>
    <a href="http://localhost/Admin/Service/3" style="text-decoration: none;"><li class="list-group-item" id="name_room_odd">Bể bơi</li></a>
    <a href="http://localhost/Admin/Service/4" style="text-decoration: none;"><li class="list-group-item" id="name_room_even">Bar</li></a>
    <a href="http://localhost/Admin/Service/5" style="text-decoration: none;"><li class="list-group-item" id="name_room_odd">Gym</li></a>
    <a href="http://localhost/Admin/Service/6" style="text-decoration: none;"><li class="list-group-item" id="name_room_even">Nhà hàng</li></a>
    <a href="http://localhost/Admin/Service/7" style="text-decoration: none;"><li class="list-group-item" id="name_room_odd">Giặt ủi</li></a> 
    <a href="http://localhost/Admin/Service/8" style="text-decoration: none;"><li class="list-group-item" id="name_room_even">Phục vụ tại phòng 24/24</li></a> 
  </ul>
    
  <?php
  echo '
  <div class="detail-service-box">
      <div style="font-size: 40px;"><strong>'; 
      switch ($data["index"]) {
          case 1:
            echo"Massage";
            break;
          case 2:
              echo"Spa";
            break;
          case 3:
            echo "Bể bơi";
            break;
          case 4:
              echo "Bar";
              break;
          case 5:
              echo "Gym";
              break;
          case 6:
              echo "Nhà hàng";
              break;
          case 7:
              echo "Giặt ủi";
              break;
          default:
            echo "Phục vụ tại phòng 24/24";
        }
      echo "</strong></div> 
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <img src=\"http://localhost/mvc/views/images/Detailed_Massage.jpg\" width=\"80%\"  alt=\"\"> ";
      ?>
  </div>
</div>