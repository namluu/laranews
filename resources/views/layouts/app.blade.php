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

        @section('footer')
        <footer>
            <div class="container">
                <div class="inner-footer">
                    <a href="">Trang chủ</a>
                    <a href="">Video</a>
                    <a href="">Ảnh</a>
                    <a href="">Mới nhất</a>
                    <a href="">Trang chủ</a>
                    <a href="">Video</a>
                    <a href="">Video</a>
                    <a href="">Ảnh</a>
                    <a href="">Mới nhất</a>
                    <a href="">Trang chủ</a>
                    <a href="">Video</a>
                    <a href="">Video</a>
                    <a href="">Ảnh</a>
                    <a href="">Mới nhất</a>
                    <a href="">Trang chủ</a>
                    <a href="">Video</a>
                    <a href="">Video</a>
                    <a href="">Ảnh</a>
                    <a href="">Mới nhất</a>
                    <a href="">Trang chủ</a>
                    <a href="">Video</a>
                    <a href="">Video</a>
                    <a href="">Ảnh</a>
                    <a href="">Mới nhất</a>
                    <a href="">Trang chủ</a>
                    <a href="">Video</a>
                </div>
                <div class="social">
                    <a href=""><img src="images/logo.svg" alt="VnExpress - Bao tieng Viet nhieu nguoi xem nhat"></a>

                </div>
                <div class="copyright">
                    <p><strong>Báo tiếng Việt nhiều người xem nhất</strong><br>Thuộc Bộ Khoa học Công nghệ<br>Số giấy phép: 06/GP-BTTTT ngày 03/01/2014</p>
                    <p>Tổng biên tập: Phạm Hiếu<br>Địa chỉ: Tầng 5, Tòa nhà FPT, 17 phố Duy Tân, Cầu Giấy, Hà Nội<br>Điện thoại: 024 7300 8899 - máy lẻ 4500</p>
                    <p style="text-align: right;">© 1997-2021. Toàn bộ bản quyền thuộc VnExpress</p>
                </div>
            </div>
        </footer>
        @show

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        <script type="text/javascript" src="{{asset('js/ddsmoothmenu.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    </body>
</html>
