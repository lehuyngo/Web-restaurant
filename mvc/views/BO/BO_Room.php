<style>
#background {
    background-color: aqua;
    padding: 15px;
}
#order {
    background-color: #9CECAE;
    margin: 10px;
    color: black;
    font-weight: 500;
}
.e49_29 {
    background-color: rgba(34, 90, 40, 1);
	width: 40%;
    height: 80px;
    margin: auto;
    border-radius: 45px;
	font-family: 'Imprima';
    font-style: normal;
    font-weight: 100;
    font-size: 50px;
    text-align: center;
    color: #FDF4F4;
}
.button_box{
    display: flex;
    text-align: center;
}
@media only screen and (max-width: 600px) {
    .e49_29 {
        width: 100%;
    }
}
</style>
<div class="container-fluid" id = "background">
    <div style="text-align: center; width:100%;" >
        <div class="e49_29">PHÒNG Ở</div>
            <button type="button" class="btn btn-success" onclick="window.location.href='http://localhost/Admin/RoomOrderer'" id="order">Danh sách đặt phòng</button>
            <button type="button" class="btn btn-success" onclick="window.location.href='http://localhost/Admin/RoomList'" id="order">Danh sách phòng ở</button>
            <?php
                if($data["index"]==-1)
                require_once "./mvc/views/BO/RoomList.php";
                else require_once "./mvc/views/BO/BO_Room_Detail.php";
            ?>
        </div>
    </div>
</div>

