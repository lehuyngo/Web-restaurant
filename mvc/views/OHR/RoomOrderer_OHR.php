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
                <p class="text-uppercase">Danh sách đặt phòng</p>
            </h2>
            <div class="col-sm-6 text-end">
                <a class="text-uppercase" href="http://localhost/OHR/RoomList" style="color:black; font-size:20px">Danh sách phòng ở</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form>
                    <div class="input-group">
                        <span class="input-group-text">Tìm kiếm theo tên:</span>
                        <input type="text" class="form-control" placeholder="Tên khách hàng">
                    </div>
                    </form>
            </div>
            <div class="col-sm-6">
                <form>
                    <div class="input-group">
                        <span class="input-group-text">Tìm kiếm theo ngày đặt:</span>
                        <input type="date" class="form-control" placeholder="Ngày đặt phòng">
                    </div>
                    </form>
            </div>
        </div>
    </div>

    <div class="container mt-5 text-center">
        <table class="table table-striped" style="background-color:white;">
            <thead style="background-color: #7C9358;">
                <tr>
                <th>Họ và tên</th>
                <th>Số điện thoại</th>
                <th>Ngày đặt phòng</th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nguyen Van A</td>
                    <td>0931910JQK</td>
                    <td>01/01/2023</td>
                    <td><a href="http://localhost/OHR/RoomBooked">Chi tiết</a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xác nhận</button></td>
                </tr>
                <tr>
                    <td>Nguyen Van B</td>
                    <td>0931910JQK</td>
                    <td>01/01/2023</td>
                    <td><a href="http://localhost/OHR/RoomBooked">Chi tiết</a></td> <!--them link o day-->
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xác nhận</button></td>
                </tr>
                <tr>
                    <td>Nguyen Van C</td>
                    <td>0931910JQK</td>
                    <td>01/01/2023</td>
                    <td><a href="http://localhost/OHR/RoomBooked">Chi tiết</a></td> <!--them link o day-->
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xác nhận</button></td>
                </tr>
                <tr>
                    <td>Nguyen Van D</td>
                    <td>0931910JQK</td>
                    <td>01/01/2023</td>
                    <td><a href="http://localhost/OHR/RoomBooked">Chi tiết</a></td> <!--them link o day-->
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xác nhận</button></td>
                </tr>
                <tr>
                    <td>Nguyen Van E</td>
                    <td>0931910JQK</td>
                    <td>01/01/2023</td>
                    <td><a href="http://localhost/OHR/RoomBooked">Chi tiết</a></td> <!--them link o day-->
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xác nhận</button></td>
                </tr>
                <tr>
                    <td>Nguyen Van F</td>
                    <td>0931910JQK</td>
                    <td>01/01/2023</td>
                    <td><a href="http://localhost/OHR/RoomBooked">Chi tiết</a></td> <!--them link o day-->
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xác nhận</button></td>
                </tr>
                <tr>
                    <td>Nguyen Van G</td>
                    <td>0931910JQK</td>
                    <td>01/01/2023</td>
                    <td><a href="http://localhost/OHR/RoomBooked">Chi tiết</a></td> <!--them link o day-->
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xác nhận</button></td>
                </tr>
                <tr>
                    <td>Nguyen Van H</td>
                    <td>0931910JQK</td>
                    <td>01/01/2023</td>
                    <td><a href="http://localhost/OHR/RoomBooked">Chi tiết</a></td> <!--them link o day-->
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xác nhận</button></td>
                </tr>
                <tr>
                    <td>Nguyen Van I</td>
                    <td>0931910JQK</td>
                    <td>01/01/2023</td>
                    <td><a href="http://localhost/OHR/RoomBooked">Chi tiết</a></td> <!--them link o day-->
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xác nhận</button></td>
                </tr>
                <tr>
                    <td>Nguyen Van J</td>
                    <td>0931910JQK</td>
                    <td>01/01/2023</td>
                    <td><a href="http://localhost/OHR/RoomBooked">Chi tiết</a></td> <!--them link o day-->
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xác nhận</button></td>
                </tr> 
            </tbody>
        </table>
    </div>

    <div class="container mb-5">
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a class="active" href="#">2</a>
            <a href="#">3</a>
            <a href="#">&raquo;</a>
        </div>
    </div>
</div>