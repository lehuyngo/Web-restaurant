<style>
    <?php
        include "./mvc/views/CSS/OHR_and_CSO_style.css"
    ?>
#background {
    background-color: aqua;
    padding: 15px;
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
        <div class="row" style="padding-top: 20px">
            <span class="text-center">
                <h2 class="text-uppercase" style="font-weight: bold; display:inline; font-size:25px;">Chi tiết đặt phòng: </h2>
                <span style="font-size:25px; text-align:center;">An A - Ngày đặt phòng 01/01/2023</span>
            </span>
        </div>
        <div class="row mx-5 mt-5 px-4 pt-4 lh-lg" style="background-color: white;">
            <span class="col-sm-4" style="font-size: 20px;">Số người</span>
            <span class="col-sm-1" style="font-size: 20px;">:</span>
        </div>
        <div class="row mx-5 px-4 lh-lg" style="background-color: white;">
            <span class="col-sm-4" style="font-size: 20px;">Ngày nhận phòng</span>
            <span class="col-sm-1" style="font-size: 20px;">:</span>
        </div>
        <div class="row mx-5 px-4 lh-lg" style="background-color: white;">
            <span class="col-sm-4" style="font-size: 20px;">Ngày trả phòng</span>
            <span class="col-sm-1" style="font-size: 20px;">:</span>
        </div>
        <div class="row mx-5 px-4 lh-lg" style="background-color: white;">
            <span class="col-sm-4" style="font-size: 20px;">Loại phòng</span>
            <span class="col-sm-1" style="font-size: 20px;">:</span>
        </div>
        <div class="row mx-5 px-4 lh-lg" style="background-color: white;">
            <span class="col-sm-4" style="font-size: 20px;">Số phòng</span>
            <span class="col-sm-1" style="font-size: 20px;">:</span>
        </div>
        <div class="row mx-5 mb-5 px-4 pb-4 lh-lg" style="background-color: white;">
            <span class="col-sm-4" style="font-size: 20px;">Số điện thoại</span>
            <span class="col-sm-1" style="font-size: 20px;">:</span>
        </div>
        <div class="row m-5">
            <div class="col-sm-6 text-start">
                <a href="http://localhost/OHR/RoomOrderer"><button class="unpaid" >Trở về</button></a>
            </div>
            <div class="col-sm-6 text-end">
                <button class="unpaid">Xác nhận</button>
            </div>
        </div>
    </div>
</div>