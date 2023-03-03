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
    <div class="e49_29">QUẢN LÝ NHÂN SỰ</div>
    <div class="container" style="padding-top: 20px">
        <div class="row">
            <div class="col-sm-6">
                <form>
                    <div class="input-group">
                        <span class="input-group-text">Tìm kiếm theo tên:</span>
                        <input type="text" class="form-control" placeholder="Tên nhân viên">
                    </div>
                    </form>
            </div>
            <div class="col-sm-6">
                <form>
                    <div class="input-group">
                        <span class="input-group-text">Tìm kiếm theo phân quyền:</span>
                        <input type="text" class="form-control" placeholder="Tên phân quyền">
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
                <th>Phân quyền</th>
                <th>Lần truy cập gần nhất</th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>An A</td>
                    <td>BOM</td>
                    <td>1s</td>
                    <td><a href="http://localhost/Admin/ManageDetailHR"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xóa</button></td>
                </tr>
                <tr>
                    <td>Bùi B</td>
                    <td>OHR</td>
                    <td>2s</td>
                    <td><a href="http://localhost/Admin/ManageDetailHR"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xóa</button></td>
                </tr>
                <tr>
                    <td>Cao C</td>
                    <td>BOM</td>
                    <td>3s</td>
                    <td><a href="http://localhost/Admin/ManageDetailHR"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xóa</button></td>
                </tr>
                <tr>
                    <td>Dương D</td>
                    <td>BOM</td>
                    <td>4s</td>
                    <td><a href="http://localhost/Admin/ManageDetailHR"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xóa</button></td>
                </tr>
                <tr>
                    <td>Đỗ Đ</td>
                    <td>CUS</td>
                    <td>5s</td>
                    <td><a href="http://localhost/Admin/ManageDetailHR"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xóa</button></td>
                </tr>
                <tr>
                    <td>Giả G</td>
                    <td>CSO</td>
                    <td>6s</td>
                    <td><a href="http://localhost/Admin/ManageDetailHR"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xóa</button></td>
                </tr>
                <tr>
                    <td>Huỳnh H</td>
                    <td>CSO</td>
                    <td>7s</td>
                    <td><a href="http://localhost/Admin/ManageDetailHR"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xóa</button></td>
                </tr>
                <tr>
                    <td>Kiều K</td>
                    <td>OHR</td>
                    <td>8s</td>
                    <td><a href="http://localhost/Admin/ManageDetailHR"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xóa</button></td>
                </tr>
                <tr>
                    <td>Lê L</td>
                    <td>CSO</td>
                    <td>9s</td>
                    <td><a href="http://localhost/Admin/ManageDetailHR"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xóa</button></td>
                </tr>
                <tr>
                    <td>Mai M</td>
                    <td>BOM</td>
                    <td>10s</td>
                    <td><a href="http://localhost/Admin/ManageDetailHR"><button type="button" class="btn btn-outline-success" id="confirm_order">Chi tiết</button></a></td>
                    <td><button type="button" class="btn btn-outline-success" id="confirm_order">Xóa</button></td>
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