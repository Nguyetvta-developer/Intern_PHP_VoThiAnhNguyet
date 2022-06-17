@extends('layouts.app')
@section('title')
Thêm thiết bị
@endsection
@section('content')
@include('components.sidebar')
<section class="home-section">
  @include('components.nav')
  <div class="home-content" id="device">
    <h3 class="text-primary" style="margin-left: 30px;font-size: 24px;margin-bottom: 15px;">Quản lý thiết bị</h3>
    <form action="/luu-thiet-bi" method="post">
      <div class="form-box">
        <div class="col-md-12">
          <h5 class="text-primary">Thông tin thiết bị</h5>
          <div class="row" style="padding: 5px;">
            <div class="col-md-12">

              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Mã thiết bị: <span class="text-danger">*</span> </label>
                  <input name="device_code" type="text" class="form-control" placeholder="Nhập mã thiết bị">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Loại thiết bị: <span class="text-danger">*</span></label>
                  <select name="device_category" id="" class="form-control">
                    @foreach($data as $item)
                    <option value="{{$item->id}}">{{$item->category_name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Tên thiết bị: <span class="text-danger">*</span> </label>
                  <input name="device_name" type="text" class="form-control" placeholder="Nhập tên thiết bị">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Tên đăng nhập: <span class="text-danger">*</span></label>
                  <input name="device_username" type="text" class="form-control" placeholder="Nhập tên đăng nhập">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Địa chỉ IP: <span class="text-danger">*</span> </label>
                  <input name="device_id" type="text" class="form-control" placeholder="Nhập địa chỉ IP" autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Mật khẩu: <span class="text-danger">*</span></label>
                  <input name="device_password" type="password" class="form-control" placeholder="Nhập mật khẩu" autocomplete="off">
                </div>
                <div class="form-group col-md-12" style="border: none;">
                  <label for="exampleInputPassword1">Dịch vụ sử dụng: <span class="text-danger">*</span></label>
                  <div class="mb-30 ">
                    <input name="device_title" type="text" value="" class="" data-role="tagsinput" placeholder="Nhập dịch vụ sử dụng">
                  </div>
                </div>
                <div><span class="text-danger">*</span> Là thông tin trường băt </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 d-flex justify-content-center align-items-center">
        <button class="btn-huy btn-add-device  ">Hủy bỏ</button>
        <button class="btn-add btn-add-device btn btn-warning">Thêm</button>
      </div>
    </form>
  </div>
</section>

<!-- <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script> -->

@endsection