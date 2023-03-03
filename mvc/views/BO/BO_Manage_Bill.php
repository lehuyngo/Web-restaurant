<style>
  <?php 
    include "./mvc/views/CSS/OHR_and_CSO_style.css";
    include "./mvc/views/CSS/BO_Booked_Service_List.css";
  ?>
</style>
<script>
    function click_modal() {
        document.getElementById("myModal").style.display = "block";
    }

    function close_modal() {
        document.getElementById("myModal").style.display = "none";
    }
</script>

<div style="background-color: aqua; padding: 15px">
    <div class="e49_29">QUẢN LÝ HÓA ĐƠN</div>
    <div class="container" style="padding-top: 20px; padding-bottom:15px">
        <div class="row">
            <div class="col-sm-6">
                <form>
                    <div class="input-group">
                        <span class="input-group-text">Nhân viên thu tiền:</span>
                        <input type="text" class="form-control" placeholder="Tên nhân viên">
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <form>
                    <div class="input-group">
                        <span class="input-group-text">Người thanh toán</span>
                        <input type="text" class="form-control" placeholder="Tên khách hàng">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container" style="padding-bottom:15px">
        <div class="row">
            <div class="col-sm-6">
                <form>
                    <div class="input-group">
                        <span class="input-group-text">Thời gian thanh toán:</span>
                        <span class="input-group-text">từ</span>
                        <input type="date" class="form-control" placeholder="Begin_Date">
                        <span class="input-group-text">đến</span>
                        <input type="date" class="form-control" placeholder="End_Date">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form>
                    <div class="input-group">
                        <span class="input-group-text">Loại phòng:</span>
                        <input type="text" class="form-control" placeholder="Tên loại phòng">
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <form>
                    <div class="input-group">
                        <span class="input-group-text">Doanh thu</span>
                        <input type="text" class="form-control" placeholder="208.000">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-5 text-center">
        <table class="table table-striped" style="background-color:white;">
            <thead style="background-color: #7C9358;">
                <tr>
                <th>Mã hóa đơn</th>
                <th>Nhân viên thu tiền</th>
                <th>Người thanh toán</th>
                <th>Ngày thanh toán</th>
                <th>Loại phòng</th>
                <th>Tổng tiền</th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0001</td>
                    <td>An A</td>
                    <td>Võ K</td>
                    <td>05/01/2023</td>
                    <td>Tiêu chuẩn</td>
                    <td>13.000</td>
                    <td><a  href="http://localhost/Admin/ManageDetailBill"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0002</td>
                    <td>Bùi B</td>
                    <td>Trần H</td>
                    <td>06/01/2023</td>
                    <td>Tiêu chuẩn</td>
                    <td>13.000</td>
                    <td><a  href="http://localhost/Admin/ManageDetailBill"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0003</td>
                    <td>Cao C</td>
                    <td>Sử G</td>
                    <td>07/01/2023</td>
                    <td>Tiêu chuẩn</td>
                    <td>13.000</td>
                    <td><a  href="http://localhost/Admin/ManageDetailBill"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0004</td>
                    <td>Dương D</td>
                    <td>Quách Đ</td>
                    <td>08/01/2023</td>
                    <td>Tiêu chuẩn</td>
                    <td>13.000</td>
                    <td><a  href="http://localhost/Admin/ManageDetailBill"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0005</td>
                    <td>Đỗ Đ</td>
                    <td>Phạm D</td>
                    <td>09/01/2023</td>
                    <td>Tiêu chuẩn</td>
                    <td>13.000</td>
                    <td><a  href="http://localhost/Admin/ManageDetailBill"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0006</td>
                    <td>Giả G</td>
                    <td>Nguyễn C</td>
                    <td>10/01/2023</td>
                    <td>Tiêu chuẩn</td>
                    <td>13.000</td>
                    <td><a  href="http://localhost/Admin/ManageDetailBill"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0007</td>
                    <td>Huỳnh H</td>
                    <td>Mai B</td>
                    <td>11/01/2023</td>
                    <td>Tiêu chuẩn</td>
                    <td>13.000</td>
                    <td><a  href="http://localhost/Admin/ManageDetailBill"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0008</td>
                    <td>Kiều K</td>
                    <td>Lê A</td>
                    <td>12/01/2023</td>
                    <td>Tiêu chuẩn</td>
                    <td>13.000</td>
                    <td><a  href="http://localhost/Admin/ManageDetailBill"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0009</td>
                    <td>Lê L</td>
                    <td>Kiều V</td>
                    <td>13/01/2023</td>
                    <td>Tiêu chuẩn</td>
                    <td>13.000</td>
                    <td><a  href="http://localhost/Admin/ManageDetailBill"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0010</td>
                    <td>Mai M</td>
                    <td>Huỳnh T</td>
                    <td>14/01/2023</td>
                    <td>Tiêu chuẩn</td>
                    <td>13.000</td>
                    <td><a  href="http://localhost/Admin/ManageDetailBill"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
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

<div id="myModal" class="modal">
    <div class="modal-content">
        <div>
            <span class="close" onClick="close_modal()" id="right-div">&times;</span>
        </div><br>
        <div class="container">
            <h3>Xác nhận xóa hóa đơn này?</h3>
            <div class="area-verify">
                <table>
                    <tr>
                        <th class="verify" onClick="close_modal()">
                            <button class="modi">Xác nhận</button>
                        </th>
                        <th class="cancel" id="right-div" onClick="close_modal()">
                            <button class="modi">Hủy</button>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>