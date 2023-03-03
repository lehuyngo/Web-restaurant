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
    <a href="http://localhost/OHR/Room_OHR/1" style="text-decoration: none;"><li class="list-group-item" id="name_room_odd">Phòng tiêu chuẩn</li></a>
    <a href="http://localhost/OHR/Room_OHR/2" style="text-decoration: none;"><li class="list-group-item" id="name_room_even">Phòng Superior</li></a>
    <a href="http://localhost/OHR/Room_OHR/3" style="text-decoration: none;"><li class="list-group-item" id="name_room_odd">Phòng Deluxe</li></a>
    <a href="http://localhost/OHR/Room_OHR/4" style="text-decoration: none;"><li class="list-group-item" id="name_room_even">Phòng Tổng thống</li></a>
    <a href="http://localhost/OHR/Room_OHR/5" style="text-decoration: none;"><li class="list-group-item" id="name_room_odd">Phòng Hoàng gia</li></a>
    <a href="http://localhost/OHR/Room_OHR/6" style="text-decoration: none;"><li class="list-group-item" id="name_room_even">Phòng đơn</li></a>
    <a href="http://localhost/OHR/Room_OHR/7" style="text-decoration: none;"><li class="list-group-item" id="name_room_odd">Phòng đôi</li></a> 
    <a href="http://localhost/OHR/Room_OHR/8" style="text-decoration: none;"><li class="list-group-item" id="name_room_even">Phòng ba người</li></a> 
  </ul>
    
  <?php
  echo '
  <div class="detail-service-box">
      <div style="font-size: 40px;"><strong>'; 
      switch ($data["index"]) {
          case 1:
            echo"Phòng tiêu chuẩn";
            break;
          case 2:
              echo"Phòng Superior";
            break;
          case 3:
            echo "Phòng Deluxe";
            break;
          case 4:
              echo "Phòng Tổng thống";
              break;
          case 5:
              echo "Phòng Hoàng gia";
              break;
          case 6:
              echo "Phòng đơn";
              break;
          case 7:
              echo "Phòng đôi";
              break;
          default:
            echo "Phòng ba người";
        }
      echo "</strong></div> 
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <img src=\"http://localhost/mvc/views/images/Double_Room.jpg\" width=\"80%\"  alt=\"\"> ";
      ?>
  </div>
</div>