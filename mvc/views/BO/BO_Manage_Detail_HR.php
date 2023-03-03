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
.button_box {
    display: flex;
    text-align: center;
}
.info_personal {
    width: 75%;
    padding: 10px;
    margin: auto;
    background-color: #FFFFFF;
    border: 1px solid #000000;
    border-radius: 20px;
}
.avt {
    width: 40%;
    text-align: center;
    vertical-align: middle;
    height: 300px;
    background: #FFFFFF;
    border: 1px dashed #000000;
    border-radius: 20px;
}
.header_info_personal {
    font-family: 'Inter';
    font-style: normal;
    font-size: 25px;
}
@media only screen and (max-width: 600px) {
    .e49_29 {
        width: 100%;
    }
}
</style>
<div class="container-fluid" id = "background">
    <div style="text-align: center; width:100%; padding-bottom: 20px" >
        <div class="e49_29">QUẢN LÝ NHÂN SỰ</div>
        <div class="row" style="padding-top: 20px">
            <span class="text-center">
                <span style="font-size:35px; text-align:center;"><strong>An A</strong></span>
            </span>
        </div>
    </div>

    <div class="row" style="margin-bottom: 15px;">
        <div class="col" style="text-align:center">
            <div class="info_personal">
                <div class="header_info_personal"><strong>THÔNG TIN CÁ NHÂN</strong></div>
                <table>
                    <tr>
                        <th>Địa chỉ</th>
                        <th>:</th>
                        <th><input type="text" class="form-control" id="" placeholder="" style="margin: 5px"></th>
                        <th><button type="button" class="btn btn-outline-success" id="confirm_order" style="margin: 10px">Chỉnh sửa</button>
                    </tr>
                    <tr>
                        <th>Số điện thoại</th>
                        <th>:</th>
                        <th><input type="text" class="form-control" id="" placeholder="" style="margin: 5px"></th>
                        <th><button type="button" class="btn btn-outline-success" id="confirm_order" style="margin: 10px">Chỉnh sửa</button>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th>:</th>
                        <th><input type="text" class="form-control" id="" placeholder="" style="margin: 5px"></th>
                        <th><button type="button" class="btn btn-outline-success" id="confirm_order" style="margin: 10px">Chỉnh sửa</button>
                    </tr>
                    <tr>
                        <th>Chức vụ</th>
                        <th>:</th>
                        <th><input type="text" class="form-control" id="" placeholder="" style="margin: 5px"></th>
                        <th><button type="button" class="btn btn-outline-success" id="confirm_order" style="margin: 10px">Chỉnh sửa</button>
                    </tr>
                    <tr>
                        <th>Ngày bắt đầu làm việc</th>
                        <th>:</th>
                        <th><input type="text" class="form-control" id="" placeholder="" style="margin: 5px"></th>
                        <th><button type="button" class="btn btn-outline-success" id="confirm_order" style="margin: 10px">Chỉnh sửa</button>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col">
            <div class="avt">
                Hình đại diện
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" style="text-align:center">
            <div class="info_personal">
                <div class="header_info_personal"><strong>THÔNG TIN TÀI KHOẢN</strong></div>
                <table>
                    <tr>
                        <th>Tài khoản</th>
                        <th>:</th>
                        <th><input type="text" class="form-control" id="" placeholder="" style="margin: 5px"></th>
                        <th><button type="button" class="btn btn-outline-success" id="confirm_order" style="margin: 10px">Chỉnh sửa</button>
                    </tr>
                    <tr>
                        <th>Mật khẩu</th>
                        <th>:</th>
                        <th><input type="text" class="form-control" id="" placeholder="" style="margin: 5px"></th>
                        <th><button type="button" class="btn btn-outline-success" id="confirm_order" style="margin: 10px">Chỉnh sửa</button>
                    </tr>
                    <tr>
                        <th>Lần truy cập gần nhất</th>
                        <th>:</th>
                        <th><input type="text" class="form-control" id="" placeholder="" style="margin: 5px"></th>
                        <th><button type="button" class="btn btn-outline-success" id="confirm_order" style="margin: 10px">Chỉnh sửa</button>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
</div>