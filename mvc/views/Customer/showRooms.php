 <style>
    <?php
    require_once "./mvc/views/CSS/showRooms.css"
    ?>
    
</style>

 <div class="body">
    <div class="datphong">
        <div class="button"> 
        <?php
          
        if ( $data["role"]==2) 
        {
           
            echo "<button type=\"button\">Chỉnh sửa</button>";
        }
        if( $data["role"]==0) {
        
        echo "<button type=\"button\" onclick=\"window.location.href='http://localhost/Home/RoomForm'\">Đặt phòng</button>";
        }
        if($data["role"]==1){
            echo "<button type=\"button\" onclick=\"window.location.href='http://localhost/Home/RoomForm'\">Đặt dịch vụ</button>";
            echo "<button type=\"button\" onclick=\"window.location.href='http://localhost/Home/RoomForm'\">Hóa đơn</button>";
        }
        ?>
        

        </div>
        <div class="container-fluid">
            <div class="row justify-content-around">
                <div class="element col-5 responsived">
                    <div class="product">
                        <img src="http://localhost/mvc/views/images/Single_Room.jpg" class="rounded float-start" he alt="">
                        <h5 class="text-center">Trải rộng khắp cả nước</h5>
                        
                    </div>
                </div>
                <div class="element col-5 responsived">
                    <div class="product">
                        <img src="http://localhost/mvc/views/images/Standard_Room.jpg" class="rounded float-start" he alt="">
                        <h5 class="text-center">Phòng ở sang trọng</h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="element col-5 responsived">
                    <div class="product">
                        <img src="http://localhost/mvc/views/images/Single_Room.jpg" class="rounded float-start" he alt="">
                        <h5 class="text-center">Đặt phòng trực tuyến</h5>
                        
                    </div>
                </div>
                <div class="element col-5 responsived">
                    <div class="product">
                        <img src="http://localhost/mvc/views/images/Standard_Room.jpg" class="rounded float-start" he alt="">
                        <h5 class="text-center">Dịch vụ chu đáo</h5>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    </div>