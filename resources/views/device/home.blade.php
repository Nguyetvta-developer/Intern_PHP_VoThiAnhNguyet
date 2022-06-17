@extends('layouts.app')

@section('content')
@include('components.sidebar')
<section class="home-section">
    @include('components.nav')
    <div class="home-content infor">
        <div class="container cart-box">
            Xin chào {{ Auth::user()->name }}
        </div>
    </div>
</section>

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