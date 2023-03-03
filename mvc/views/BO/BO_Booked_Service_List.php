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
    <div class="e49_29">DỊCH VỤ</div>
    <div class="container" style="padding-top: 20px">
        <div class="row">
            <h2 class="col-sm-6" style="font-weight: bold;">
                <p class="text-uppercase">Danh sách đặt dịch vụ</p>
            </h2>
        </div>
    </div>

    <div class="container" style="padding-bottom:15px">
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
                        <span class="input-group-text">Tìm kiếm theo ngày đặt:</span>
                        <input type="date" class="form-control" placeholder="Ngày đặt dịch vụ">
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
                        <span class="input-group-text">Tìm kiếm theo dịch vụ:</span>
                        <input type="text" class="form-control" placeholder="Tên dịch vụ">
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <form>
                    <div class="input-group">
                        <span class="input-group-text">Tìm kiếm theo ngày sử dụng:</span>
                        <input type="date" class="form-control" placeholder="Ngày sử dụng">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-5 text-center">
        <table class="table table-striped" style="background-color:white;">
            <thead style="background-color: #7C9358;">
                <tr>
                <th>Phòng</th>
                <th>Ngày đặt dịch vụ</th>
                <th>Loại dịch vụ</th>
                <th>Số lượng</th>
                <th>Ngày sử dụng</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0001</td>
                    <td>01/01/2023</td>
                    <td>Dịch vụ 1</td>
                    <td>1</td>
                    <td>01/01/2023</td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0002</td>
                    <td>01/01/2023</td>
                    <td>Dịch vụ 1</td>
                    <td>1</td>
                    <td>02/01/2023</td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0003</td>
                    <td>01/01/2023</td>
                    <td>Dịch vụ 1</td>
                    <td>1</td>
                    <td>03/01/2023</td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0004</td>
                    <td>01/01/2023</td>
                    <td>Dịch vụ 1</td>
                    <td>1</td>
                    <td>04/01/2023</td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0005</td>
                    <td>01/01/2023</td>
                    <td>Dịch vụ 1</td>
                    <td>1</td>
                    <td>05/01/2023</td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0006</td>
                    <td>01/01/2023</td>
                    <td>Dịch vụ 1</td>
                    <td>1</td>
                    <td>06/01/2023</td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0007</td>
                    <td>01/01/2023</td>
                    <td>Dịch vụ 1</td>
                    <td>1</td>
                    <td>07/01/2023</td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0008</td>
                    <td>01/01/2023</td>
                    <td>Dịch vụ 1</td>
                    <td>1</td>
                    <td>08/01/2023</td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0009</td>
                    <td>01/01/2023</td>
                    <td>Dịch vụ 1</td>
                    <td>1</td>
                    <td>09/01/2023</td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order" onClick="click_modal()">Xóa</button></td>
                </tr>
                <tr>
                    <td>0010</td>
                    <td>01/01/2023</td>
                    <td>Dịch vụ 1</td>
                    <td>1</td>
                    <td>10/01/2023</td>
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
            <h3>Xác nhận xóa đơn đặt?</h3>
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