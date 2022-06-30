@extends('components.layout')
@section('title')
{{$data->device_name}}
@endsection
@section('content')
@include('components.sidebar')
<section class="home-section">
  @include('components.nav')
  <div class="home-content" id="device">
    <h3 class="text-primary" style="margin-left: 30px;font-size: 24px;margin-bottom: 20px;">Quản lý thiết bị</h3>
    <a href="/chinh-sua-thiet-bi/{{$data->id}}"><div class="edit-device">
        <img src="/images/component 2.png" alt="">
      </div>
    </a>
      <div class="box-detail">
        <div class="col-md-12">
            <h5 class="text-primary" style="padding: 15px;">Thông tin thiết bị</h5>
            <div class="row detail">
                <div class="col-md-6">
                    <table>
                        <tr>
                            <th class="title-detail">Mã thiết bị:</th>
                            <td>{{$data->device_code}}</td>
                        </tr>
                        <tr>
                          <th class="title-detail">Tên thiết bị</th>
                          <td>{{$data->device_name}}</td>
                        </tr>
                        <tr>
                            <th class="title-detail">Địa chỉ IP</th>
                            <td>{{$data->device_id}}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table>
                        <tr>
                            <th class="title-detail">Loại thiết bị:</th>
                            <td>{{$data->device_category}}</td>
                        </tr>
                        <tr>
                            <th class="title-detail">Tên Đăng nhập:</th>
                            <td>{{$data->device_username}}</td>
                        </tr>
                        <tr>
                            <th class="title-detail">Mật khẩu:</th>
                            <td>{{$data->device_password}}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12" style="margin-top: 10px;">
                  <b class="title-detail">Dịch vụ sử dụng:</b>
                </div>
                <div class="col-md-12" style="margin-top: 10px;">
                  <span>{{$data->device_title}}</span>
                </div>
            </div>
        </div>
      </div>
 
    
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