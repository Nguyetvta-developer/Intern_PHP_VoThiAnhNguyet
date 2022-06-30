@extends('components.layout')
@section('title')
Thiết bị
@endsection
@section('content')
@include('components.sidebar')
<section class="home-section">
    @include('components.nav')
    <div class="home-content" id="device">
        <div class="device">
            <div class="col-md-12 ">
                <h3 class="text-primary" style="margin-bottom: 30px;">Danh sách thiết bị</h3>
                <div class="row d-flex flex-row justify-content-around ">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputEmail4" class="form-label">Trạng thái hoạt động</label>
                            <div class="dropdown">
                                <button style="text-align: left;padding: 3px;" class="form-control  dropdown-toggle"
                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Tất cả
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="/thiet-bi">tất cả</a></li>
                                    <li><a class="dropdown-item" href="/device-active">đang hoạt động</a></li>
                                    <li><a class="dropdown-item" href="/device-shut-dow">ngưng hoạt động</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="inputEmail4" class="form-label">Trạng thái kết nối</label>
                            <button style="text-align: left;padding: 3px;" class="form-control  dropdown-toggle"
                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Tất cả
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="/thiet-bi">tất cả</a></li>
                                <li><a class="dropdown-item" href="/device-connecting">đang kết nối</a></li>
                                <li><a class="dropdown-item" href="/device-disconnect">ngưng kết nối</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 search" >
                        <div class="form-group">
                            <form action="" method="get">
                                @csrf
                                <label for="inputEmail4" class="form-label">Từ khóa</label>
                                <input type="text" name="key" class="form-control" placeholder="Nhập từ khóa">
                                <button type="submit" name="submit"><i class='bx bx-search'></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                <div class=" row add-device">
                    <a href="/them-thiet-bi">
                        <img src="/images/Component 1.png" alt="">
                    </a>
                </div>
                    <div class="col-md-12">
                        <div class="table100 ver1 m-b-110">
                            <div class="table100-body js-pscroll ps ">
                                <table>
                                    <thead>
                                        <tr class="">
                                            <th class="text-center">Mã thiết bị</th>
                                            <th class="text-center">Tên thiết bị</th>
                                            <th class="text-center">Địa chỉ IP</th>
                                            <th class="text-center"> Trạng thái hoạt động</th>
                                            <th class="text-center">Trạng thái kết nối</th>
                                            <th class="text-center">Dịch vụ sử dụng</th>
                                            <th class="text-center"><a href=""></a></th>
                                            <th class="text-center"><a href=""></a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $item)
                                        <tr class="">
                                            <td class="text-center">KIO_0{{$item->id}}</td>
                                            <td class="text-center">{{$item->device_name}}</td>
                                            <td class="text-center">{{$item->device_id}}</td>
                                            @if($item->device_status ==1)
                                            <td class="text-center"><i class='bx bxs-circle text-success'></i> Đang
                                                hoạt động</td>
                                            @else
                                            <td class="text-center"><i class='bx bxs-circle text-danger'></i> Ngưng
                                                hoạt động</td>
                                            @endif
                                            @if($item->device_conection ==1)
                                            <td class="text-center"><i class='bx bxs-circle text-success'></i> Đang
                                                kết nối</td>
                                            @else
                                            <td class="text-center"><i class='bx bxs-circle text-danger'></i> Mất kết
                                                nối</td>
                                            @endif
                                            <td class="text-center">{{$item->device_title}}</td>
                                            <td class="text-center"><a class="text-info"
                                                    href="/chi-tiet/{{$item->id}}">Chi tiết</a></td>
                                            <td class="text-center"><a class="text-info"
                                                    href="/chinh-sua-thiet-bi/{{$item->id}}">Cập nhật</a></td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="" style="position: fixed;top: 750px;right: 139px;">
    {{ $data->links() }}
</div>
<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
</script>

@endsection