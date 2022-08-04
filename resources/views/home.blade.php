@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <section class="section_topstory">
        <div class="container flexbox">
            <div class="col-left-top">
                <article class="article-topstory">
                    <div class="thumb-art">
                        <a href="" class="thumb thumb-5x3" title="">
                            <img alt="" src="https://i1-vnexpress.vnecdn.net/2021/07/20/bi-thu-nguyen-van-nen-8109-1626792365.jpg?w=680&h=408&q=100&dpr=1&fit=crop&s=wV2Ifv8gvy6ThkecOjisPA">
                        </a>
                    </div>
                    <h3 class="title-news"><a href="">Bí thư TP HCM: 'Chuẩn bị cho tình huống siết chặt hơn Chỉ thị 16'</a></h3>
                    <div class="description"><a href="">TP HCM đang lấy ý kiến chuyên gia, bộ ngành liên quan để chuẩn bị tình huống siết chặt hơn Chỉ thị 16 nhằm kéo giảm lây lan Covid-19, theo Bí thư Nguyễn Văn Nên.</a></div>
                    <p class="meta-news"><a href="">Sức khỏe</a> <a href="">187</a></p>
                </article>
                <div class="sub-news-top">
                    <ul class="list-sub-feature">
                        <li>
                            <h3 class="title-news"><a href="">TP HCM sẽ có thêm hơn 3 triệu liều vaccine</a></h3>
                            <div class="description"><a href="">Theo Thứ trưởng Y tế Nguyễn Trường Sơn, dự kiến cuối tháng 8 và đầu tháng 9, Bộ Y tế sẽ phân bổ cho TP HCM thêm hơn 3 triệu liều vaccine phòng Covid-19.</a></div>
                        </li>
                        <li>
                            <h3 class="title-news"><a href="">Người Việt ở Mỹ tiêm vaccine thế nào?</a></h3>
                            <div class="description"><a href="">Nhờ nguồn cung vaccine dồi dào, nhiều người Việt ở Mỹ đã sớm hoàn thành chương trình tiêm chủng và cảm thấy an tâm giữa đại dịch.</a></div>
                        </li>
                        <li>
                            <h3 class="title-news"><a href="">TP HCM sẽ có thêm hơn 3 triệu liều vaccine</a></h3>
                            <div class="description"><a href="">Theo Thứ trưởng Y tế Nguyễn Trường Sơn, dự kiến cuối tháng 8 và đầu tháng 9, Bộ Y tế sẽ phân bổ cho TP HCM thêm hơn 3 triệu liều vaccine phòng Covid-19.</a></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-right-top">
                <img src="{{asset('images/banner.jpg')}}" alt="">
            </div>
        </div>
    </section>
@endsection
