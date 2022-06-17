<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <div class="sidebar">
            <div class="logo-details d-flex justify-content-center align-items-center">
                <span class="logo_name"><img src="/images/Logoalta.png" alt=""></span>
            </div>
            <ul class="nav-links">
                <li>
                    <a href="/">
                        <i class='bx bxs-dashboard'></i>
                        <span class="links_name">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/thiet-bi">
                        <i class='bx bx-laptop'></i>
                        <span class="links_name">Thiết bị</span>
                    </a>
                </li>
                <li>
                    <a href="/dich-vu" class="">
                        <i class='bx bx-conversation'></i>
                        <span class="links_name">Dịch vụ</span>
                    </a>
                </li>
                <li>
                    <a href="/number" class="">
                        <i class='bx bx-layer'></i>
                        <span class="links_name">Cấp số</span>
                    </a>
                </li>
                <li>
                    <a href="/report" class="">
                        <i class='bx bx-trending-up'></i>
                        <span class="links_name">Báo cáo</span>
                    </a>
                </li>
                <li class="active">
                    <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bx bx-cog'></i>
                        <span class="links_name">Cài đặt hệ thống <i class='bx bx-dots-vertical-rounded'></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="/role">Quản lý vai trò</a></li>
                        <li class="active"><a class="dropdown-item" href="/account">Quản lý tài khoản</a></li>
                        <li><a class="dropdown-item" href="/note">Nhật người dùng</a></li>
                    </ul>
                </li>
                @guest
                @if (Route::has('login'))
        
                @endif
        
                @if (Route::has('register'))
        
                @endif
                @else
                <li class="log_out">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class='bx bx-log-in'></i>
                        <span class="links_name">Đăng xuất</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
        
                </li>
                @endguest
            </ul>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>