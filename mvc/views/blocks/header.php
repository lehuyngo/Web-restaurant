<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
    <div class="navbar-brand"  style="display: flex;">
        <img  src="http://localhost/mvc/views/images/logo.jpg" width="50px" height="50px" alt="">
        <p style = "margin: 4px;">Hotel Service Management System</p>
    </div>
    <div class="d-flex">
      <?php
        if($data["role"]==0){
          echo '<button onclick="window.location.href=\'http://localhost//Login\';">Đăng nhập</button>';
        }
        else{
          echo '<button onclick="window.location.href=\'http://localhost//Login/UserLogout\';">Đăng xuất</button>';
        } 
      ?>
    </div>    
  </div>
</nav>
<?php
  if($data["role"]==0 )
  {
    require_once "./mvc/views/blocks/HomeMenu.php";
  }
  elseif ($data["role"]==1) 
  {
    require_once "./mvc/views/blocks/CustomerMenu.php";
  }
  elseif ($data["role"]==2) 
  {
    require_once "./mvc/views/blocks/AdminMenu.php";
  }
  elseif($data["role"]==3)
  {
    require_once "./mvc/views/blocks/OHRMenu.php";
  }
?>