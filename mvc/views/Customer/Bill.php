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
                <span style="font-size:35px; text-align:center;"><strong>Hóa đơn thanh toán mã 0001</strong></span>
            </span>
        </div>
        <div class="row mx-5 mt-5 px-4 pt-4 lh-lg" style="background-color: white;">
            <span class="col-sm-4" style="font-size: 20px;">Người thanh toán</span>
            <span class="col-sm-1" style="font-size: 20px;">:</span>
        </div>
        <div class="row mx-5 px-4 lh-lg" style="background-color: white;">
            <span class="col-sm-4" style="font-size:20px;">Số điện thoại</span>
            <span class="col-sm-1" style="font-size:20px;">:</span>
        </div>
        <div class="row mx-5 px-4 lh-lg" style="background-color: white;">
            <span class="col-sm-4" style="font-size:20px;">Phòng</span>
            <span class="col-sm-1" style="font-size:20px;">:</span>
        </div>
        <div class="row mx-5 px-4 lh-lg" style="background-color: white;">
            <span class="col-sm-4" style="font-size:20px;">Ngày nhận phòng</span>
            <span class="col-sm-1" style="font-size:20px;">:</span>
        </div>
        <div class="row mx-5 px-4 lh-lg" style="background-color: white;">
            <span class="col-sm-4" style="font-size:20px;">Ngày trả phòng</span>
            <span class="col-sm-1" style="font-size:20px;">:</span>
        </div>
        <div class="row mx-5 px-4 lh-lg" style="background-color: white; border-bottom-style: solid;">
            <span class="col-sm-4" style="font-size:20px;">Tổng thời gian</span>
            <span class="col-sm-1" style="font-size:20px;">:</span>
        </div>
        <div class="row mx-5 px-4 lh-lg" style="background-color: white;">
            <table class="table text-center table-borderless" style="font-size:20px;">
                <thead>
                    <tr>
                        <th class="text-start">Ngày</th>
                        <th>Tên dịch vụ</th>
                        <th>Số lượng</th>
                        <th>Thành tiền (VNĐ)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-start">02/01/2023, 09:00 Chiều</td>
                        <td>Dịch vụ 1</td>
                        <td>1</td>
                        <td>1.000</td>
                    </tr>
                    <tr>
                        <td class="text-start">02/01/2023, 09:00 Chiều</td>
                        <td>Dịch vụ 2</td>
                        <td>1</td>
                        <td>1.000</td>
                    </tr>
                    <tr>
                        <td class="text-start">02/01/2023, 09:00 Chiều</td>
                        <td>Dịch vụ 3</td>
                        <td>1</td>
                        <td>1.000</td>
                    </tr>
                    <tr>
                        <td class="text-start">01/01/2023, 09:00 Chiều</td>
                        <td>Tiền phòng</td>
                        <td>1</td>
                        <td>10.000</td>
                    </tr>
                    <tr>
                        <td class="text-start"></td>
                        <td></td>
                        <td>Tổng:</td>
                        <td class="border-top border-dark">10.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row mx-5 mb-5 px-4 pb-4 lh-lg" style="background-color: white; font-size:20px;">
            <div class="col-sm-6"></div>
            <div class="col-sm-6 text-center">
                Thứ - Ngày - Tháng - Năm <br>
                Người thu tiền <br>
                <br>
                <br>
                Họ tên
            </div>
        </div>
        <div class="row m-5">
            <div class="col-sm-6 text-start">
                <button class="unpaid"
                onclick="window.location.href='http://localhost/Customer/Comment'">
                Nhận xét</button>
            </div>
            <div class="col-sm-6 text-end">
            <button type="button" class="unpaid" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Trả Phòng
</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Xác Nhận Trả Phòng</h5>
        
      </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" 
        onclick="window.location.href='http://localhost/Customer'"> 
            Xác nhận và quay lại trang chủ
        </button>
      </div>
    </div>
  </div>
</div>