<style>
  .navbar.bg-light, .dropdown-item{
    font-family: 'Imprima';
    font-style: normal;
    font-weight: 600;
    font-size: 25px;
  }
</style>
 <nav class="navbar navbar-expand-md bg-light align-items-center">
  <div class="container-fluid row-md">
    <div class="collapse navbar-collapse d-flex justify-content-start" id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item p-2">
          <a class="nav-link active" href="http://localhost/Admin">Trang chủ</a>
        </li>
        <li class="nav-item p-2">
          <a class="nav-link active" href="http://localhost/Admin/Room">Phòng ở</a>
        </li>
        <li class="nav-item p-2">
          <a class="nav-link active" href="http://localhost/Admin/Service">Dịch vụ</a>
        </li>
        <li class="nav-item p-2 dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Quản lý
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://localhost/Admin/ManageBill">Hóa đơn</a></li>
            <li><a class="dropdown-item" href="http://localhost/Admin/ManageHR">Nhân viên</a></li>
          </ul>
        </li>
        <li class="nav-item p-2">
          <a class="nav-link active" href="#">Liên hệ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>