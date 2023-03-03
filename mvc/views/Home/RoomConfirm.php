<style>
.form_body {
	background-image: url("https://dodungkhachsandep.com/wp-content/uploads/2020/02/tieu-chuan-khach-san-5-sao.jpg");
	width: 100%;
	height: 1000px;
	background-size: 100% 100%;
}
.form_box {
    width: 80%;
    margin: auto;
    background-color:aliceblue;
}
</style>
<div class="form_body">
    <br>
    <br>
    <div class="form_box" >
        <br>
        <div style="text-align:center"> <h1>Đặt Phòng</h1></div>
        <br>
            <form>
                <div class="row mb-3">
                    <label for="text" class="col-sm-3 col-form-label" style="text-align: right;">Họ và tên</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="" placeholder="">
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="text" class="col-sm-3 col-form-label" style="text-align: right;">Số điện thoại</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="" placeholder="">
                        </select>
                    </div>
                </div>
                <div style="text-align:center">
                    <h3>Sau khi bạn xác nhận sẽ có cuộc gọi đến từ Nhân viên khách sạn. <br> Xin cảm ơn!</h3>
                    <br>
                        <button type="submit" onclick="ThanhCong()" class="btn btn-primary">Xác nhận</button>
                </div>
                <br>
                <br>
            </form>
        </div>
    </div>
    <script type="text/javascript">
            function Redirect() {
               window.location.href ="localhost";
            }

            function ThanhCong() {
                if (confirm("Sau khi nhận được cuộc gọi xác nhận từ nhân viên, bấm OK để trở về trang chủ!\nCảm ơn đã sử dụng dịch của chúng tôi!")){
                    setTimeout(Redirect,0);
                }
            }
            
    </script>
</div>