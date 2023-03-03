<style>
    <?php
    require_once "./mvc/views/CSS/form.css";
    ?>
    #success_message{ display: none;}
    .form_box
    {
      width: 80%;
      margin:auto ;
      background-color:aliceblue;
    }
</style>

<div class="form_body">
    <br>
    <br>
    <div class="form_box" >
        <br>
        <div style="text-align:center"> <h1>Đặt dịch vụ</h1></div>
        <br>
            <form action="http://localhost/Home/XacNhan" action="POST">
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label" style="text-align: right;">Loại dịch vụ</label>
                    <div class="col-sm-7">
                        <!-- <input type="" class="form-control" id="" placeholder=""> -->
                        <select name="cars" id="cars" class="form-select ">       
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label" style="text-align: right;">Thời gian sử dụng</label>
                    <div class="col-sm-7">
                        <!-- <input type="" class="form-control" id="" placeholder=""> -->
                        <select name="cars" id="cars" class="form-select ">
                                
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label" style="text-align: right;">Số lượng</label>
                    <div class="col-sm-7">
                        <!-- <input type="" class="form-control" id="" placeholder=""> -->
                        <select name="cars" id="cars" class="form-select ">
                        </select>
                    </div>
                </div>
                
                <div style="text-align:center">
                    <a href="http://localhost/Home/RoomConfirm" class="btn btn-primary">Xác Nhận</a>
                </div>
                <br>
                <br>
            </form>
        </div>
    </div>
</div>