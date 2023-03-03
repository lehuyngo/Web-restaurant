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
        <div style="text-align:center"> <h1>Nhận xét</h1></div>
        <br>
            <form action="http://localhost/Home/XacNhan" action="POST">
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label" style="text-align: right;">Phòng ở</label>
                    <div class="col-sm-7">
                        <!-- <input type="" class="form-control" id="" placeholder=""> -->
                            
                        
                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label" style="text-align: right;">Dịch vụ 1</label>
                    <div class="col-sm-7">
                        <!-- <input type="" class="form-control" id="" placeholder=""> -->
                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label" style="text-align: right;">Dịch vụ 2</label>
                    <div class="col-sm-7">
                        <!-- <input type="" class="form-control" id="" placeholder=""> -->
                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label" style="text-align: right;">Dịch vụ 3</label>
                    <div class="col-sm-7">
                        <!-- <input type="" class="form-control" id="" placeholder=""> -->
                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                    </div>
                </div>
                <div style="text-align: center;">
                <h4> Chúng tôi chân thành cảm ơn sự góp ý của bạn!</h4>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6" style="text-align: center;">
                        <a href="http://localhost/Customer" class="btn btn-primary">Gửi</a>
                    </div>
                    <div class="col-sm-6" style="text-align: center;">
                        <a href="http://localhost/Customer/Bill" class="btn btn-primary">Hủy</a>
                    </div>
                </div>
                <br>
                <br>
            </form>
        </div>
    </div>
</div>