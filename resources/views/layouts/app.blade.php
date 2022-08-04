<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/ddsmoothmenu.css')}}" />
    </head>
    <body>
        @section('header')
            <header class="top-header">
                <div class="container">
                    <h1><a href=""><img src="{{asset('images/logo.svg')}}" alt="VnExpress - Bao tieng Viet nhieu nguoi xem nhat"></a></h1>
                </div>
            </header>

            <nav class="main-nav ddsmoothmenu" id="smoothmenu1">
                <ul class="parent">
                    <li><a href="./">Trang chủ</a></li>
                    <li><a href="">Thời sự</a>
                        <ul>
                            <li><a href="">Chính trị</a></li>
                            <li><a href="">Giao thông</a></li>
                            <li><a href="">Mekong</a></li>
                        </ul>
                    </li>
                    <li><a href="">Góc nhìn</a>
                        <ul>
                            <li><a href="">Covid 19</a></li>
                            <li><a href="">Giao thông</a></li>
                            <li><a href="">Mekong</a></li>
                        </ul>
                    </li>
                    <li><a href="">Thế giới</a>
                        <ul>
                            <li><a href="">Tư liệu</a></li>
                            <li><a href="">Giao thông</a></li>
                            <li><a href="">Mekong</a></li>
                        </ul>
                    </li>
                    <li><a href="">Video</a>
                        <ul>
                            <li><a href="">Tư liệu</a></li>
                            <li><a href="">Giao thông</a></li>
                            <li><a href="">Mekong</a></li>
                        </ul>
                    </li>
                    <li><a href="">Kinh doanh</a>
                        <ul>
                            <li><a href="">Quốc tế</a></li>
                            <li><a href="">Giao thông</a></li>
                            <li><a href="">Mekong</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        @show

        <div class="container">
            @yield('content')
        </div>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        <script type="text/javascript" src="{{asset('js/ddsmoothmenu.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    </body>
</html>
