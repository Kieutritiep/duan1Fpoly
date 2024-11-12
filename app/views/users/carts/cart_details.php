<?php
    require_once $_SERVER['DOCUMENT_ROOT'] .'/baseDuanpoly/app/views/users/layout/header.php';
?><!-- start Banner -->
<style>
    .form-control {
        margin: 20px 10px;
        width: 50%;
    }
    .form-control.gg{
        width: 500px;

    }
    .card-body{
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
    .img{
        flex: 1;
        width: 130px;
    }
    .card {
  background-color: #f8f9fa;
  border-radius: 8px;
}

.badge {
  font-size: 0.875rem;
  padding: 0.3rem 0.5rem;
  border-radius: 4px;
}

.by {
  padding: 0.4rem 1rem;
}


</style>
<div class="card container p-3 mb-3" style="max-width: 780px;">
  <div class="d-flex gap-3">
    <img src="./public/images/iphone15.png" alt="iPhone 15" class="rounded" style="flex: 1;width: 130px; height: auto;">
    
    <div class="flex-grow-1">

      <div class="d-flex justify-content-between align-items-start mb-2" style="margin-top: 20px;">
        <span class="fw-bold">iPhone 15 128GB</span>
        <div class="d-flex align-items-center gap-2">
          <span class="fw-bold">19.790.000<u>đ</u></span>
          <button class="btn-close fs-7" aria-label="close" data-bs-dismiss="alert"></button>
        </div>
      </div>


      <div class="d-flex align-items-center gap-3" style="margin-top: 140px;">
        <div>
          <span class="badge bg-secondary">Titan sa mạc</span>
        </div>

        <div class="d-flex align-items-center gap-2">
          <button class="btn btn-outline-secondary btn-sm">-</button>
          <span>1</span>
          <button class="btn btn-outline-secondary btn-sm">+</button>
        </div>

        <div>
          <button class="btn btn-primary by">Mua Ngay</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="card container " style="width: 800px;">
    <div class="card-body">
    <div>
        <div>
            <B>Thông tin khách hàng</B> <br>
            <span><input class="form-check-input" type="checkbox" name="" id=""> Anh</span>
            <span><input class="form-check-input" type="checkbox" name="" id=""> Chị</span>
            <div class="row">
            <input class="form-control col" type="text" placeholder="Họ và tên">
            <input class="form-control col" type="text" placeholder="Số điện thoại">
        </div>
        </div>
        <div>
            <b>Địa chỉ người nhận</b>
            <div class="row">
                <input class="form-control col" type="text" placeholder="Thành phố">
                <input class="form-control col" type="text" placeholder="Huyện">
                
            </div>
            <div class="row">
            <input class="form-control col" type="text" placeholder="Xã/Phường">
            <input class="form-control col" type="text" placeholder="Số nhà, tên đường">
            </div>
            <div><input class="form-control gg" type="text" placeholder="Nhập ghi chú (nếu có)"></div>
            <div><input class="form-control gg" type="text" placeholder="Mã giảm giá">

        </div>
        </div>
        <div >
            <span style="margin-left: 40px;">Tổng tiền: </span>
            <b>999.999.999 <u>đ</u></b>
            <hr>
            <span style="margin-left: 40px;"><input class="form-check-input" type="checkbox" name="" id=""> Tôi đồng ý với Chính sách xử lý dữ liệu cá nhân của iPhone Lux</span>
            
        </div>
       <div ><button class="btn btn-outline-primary " style="width: 700px; margin-left: 20px; margin-top: 20px;">Đặt hàng</button></div> 
    </div>
    </div>
    </div>
<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] .'/baseDuanpoly/app/views/users/layout/footter.php';
?>
