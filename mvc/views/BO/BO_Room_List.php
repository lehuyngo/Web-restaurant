<style>
  <?php 
    include "./mvc/views/CSS/OHR_and_CSO_style.css"
  ?>
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
</style>
<div style="background-color: aqua; padding: 15px">
    <div class="e49_29">PHÒNG Ở</div>
    <div class="container" style="padding-top: 20px">
        <div class="row">
            <h2 class="col-sm-6" style="font-weight: bold;">
                <p class="text-uppercase">Danh sách phòng ở</p>
            </h2>
            <div class="col-sm-6 text-end">
                <a class="text-uppercase" href="http://localhost/Admin/RoomOrderer" style="color:black; font-size:20px">Danh sách đặt phòng</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form>
                    <div class="input-group">
                        <span class="input-group-text">Tìm kiếm theo phòng:</span>
                        <input type="text" class="form-control" placeholder="Số phòng">
                    </div>
                    </form>
            </div>

            <div class="col-sm-6">
                <form>
                    <div class="input-group">
                        <span class="input-group-text">Tìm kiếm theo loại phòng:</span>
                        <select class="form-select" aria-label="Default select example">
                        <option selected>Chọn loại phòng</option>
                        <option value="1">Tiêu chuẩn</option>
                        <option value="2">Superior</option>
                        <option value="3">Deluxe</option>
                        <option value="4">Tổng thống</option>
                        <option value="5">Hoàng gia</option>
                        <option value="6">Đơn</option>
                        <option value="7">Đôi</option>
                        <option value="8">Gia đình</option>
                        </select>
                    </div>
                    </form>
            </div>
        </div>
    </div>

    <div class="container mt-5 text-center">
        <table class="table table-striped" style="background-color:white;">
            <thead style="background-color: #7C9358;">
                <tr>
                    <th>Số phòng</th>
                    <th>Loại phòng</th>
                    <th>Tình trạng</th>
                    <th>Họ tên khách</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0001</td>
                    <td>Tiêu chuẩn</td>
                    <td>Trống</td>
                    <td></td>
                    <td><a href="http://localhost/Admin/RoomBill" style="color:black">Hoá đơn</a></td> <!--them link o day-->
                    <td><a href="" style="color:black">Thông tin khách</a></td> <!--them link o day-->
                </tr>
                <tr>
                    <td>0002</td>
                    <td>Tiêu chuẩn</td>
                    <td>Trống</td>
                    <td></td>
                    <td><a href="http://localhost/Admin/RoomBill" style="color:black">Hoá đơn</a></td> <!--them link o day-->
                    <td><a href="" style="color:black">Thông tin khách</a></td> <!--them link o day-->
                </tr>
                <tr>
                    <td>0003</td>
                    <td>Tiêu chuẩn</td>
                    <td>Đầy</td>
                    <td>Tiến B</td>
                    <td><a href="http://localhost/Admin/RoomBill" style="color:black">Hoá đơn</a></td> <!--them link o day-->
                    <td><a href="" style="color:black">Thông tin khách</a></td> <!--them link o day-->
                </tr>
                <tr>
                    <td>0004</td>
                    <td>Tiêu chuẩn</td>
                    <td>Đầy</td>
                    <td>Dương D</td>
                    <td><a href="http://localhost/Admin/RoomBill" style="color:black">Hoá đơn</a></td> <!--them link o day-->
                    <td><a href="" style="color:black">Thông tin khách</a></td> <!--them link o day-->
                </tr>
                <tr>
                    <td>0005</td>
                    <td>Tiêu chuẩn</td>
                    <td>Đầy</td>
                    <td>Đỗ Đ</td>
                    <td><a href="http://localhost/Admin/RoomBill" style="color:black">Hoá đơn</a></td> <!--them link o day-->
                    <td><a href="" style="color:black">Thông tin khách</a></td> <!--them link o day-->
                </tr>
                <tr>
                    <td>0006</td>
                    <td>Tiêu chuẩn</td>
                    <td>Đầy</td>
                    <td>Giả G</td>
                    <td><a href="http://localhost/Admin/RoomBill" style="color:black">Hoá đơn</a></td> <!--them link o day-->
                    <td><a href="" style="color:black">Thông tin khách</a></td> <!--them link o day-->
                </tr>
                <tr>
                    <td>0007</td>
                    <td>Tiêu chuẩn</td>
                    <td>Đã đặt</td>
                    <td>Huỳnh H</td>
                    <td><a href="http://localhost/Admin/RoomBill" style="color:black">Hoá đơn</a></td> <!--them link o day-->
                    <td><a href="" style="color:black">Thông tin khách</a></td> <!--them link o day-->
                </tr>
                <tr>
                    <td>0008</td>
                    <td>Tiêu chuẩn</td>
                    <td>Đã đặt</td>
                    <td>Kiều K</td>
                    <td><a href="http://localhost/Admin/RoomBill" style="color:black">Hoá đơn</a></td> <!--them link o day-->
                    <td><a href="" style="color:black">Thông tin khách</a></td> <!--them link o day-->
                </tr>
                <tr>
                    <td>0009</td>
                    <td>Tiêu chuẩn</td>
                    <td>Đầy</td>
                    <td>Lê L</td>
                    <td><a href="http://localhost/Admin/RoomBill" style="color:black">Hoá đơn</a></td> <!--them link o day-->
                    <td><a href="" style="color:black">Thông tin khách</a></td> <!--them link o day-->
                </tr>
                <tr>
                    <td>0010</td>
                    <td>Tiêu chuẩn</td>
                    <td>Trống</td>
                    <td></td>
                    <td><a href="http://localhost/Admin/RoomBill" style="color:black">Hoá đơn</a></td> <!--them link o day-->
                    <td><a href="" style="color:black">Thông tin khách</a></td> <!--them link o day-->
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container mb-5" width="50%">
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a class="active" href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">7</a>
            <a href="#">8</a>
            <a href="#">9</a>
            <a href="#">10</a>
            <a href="#">&raquo;</a>
        </div>
    </div>
</div>