<?php
    $data=["role"=>0];
    require_once "mvc/views/blocks/header.php";
    
   
?>

<div class="container" style="text-align:center; ">

<div class="card my-5" style="background-color:aqua;">
        <h1 class="text-center text-dark mt-5">LOGIN</h1>
          <form class="card-body cardbody-color p-lg-5" action="http://localhost/Login/UserLogin" method="post">

            <div class="text-center">
            
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="username" class="form-control" name="username" aria-describedby="emailHelp"
                placeholder="User Name">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" placeholder="password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-primary" name="btnLogin">Login</button></div>
            
          </form>
        </div>
</div>
  

 <?php
 require_once "mvc/views/blocks/footer.php";
 ?>