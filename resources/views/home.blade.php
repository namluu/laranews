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

    <section class="section_stream_home">
        <div class="container flexbox has_border">
            <div class="col-left">
                <article class="item-news item-news-common">
                    <h3 class="title-news"><a href="">Chiến dịch tiêm vaccine Covid-19 toàn dân bắt đầu</a></h3>
                    <div class="thumb-art">
                        <a href="" class="" title="">
                        <picture>
                            <img alt="" class="g" src="https://i1-kinhdoanh.vnecdn.net/2021/07/20/ctypou488571623475287142116244-6345-5575-1626768185.jpg?w=220&amp;h=132&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=liOjaSjw4OY9IJQwsI0agg">
                        </picture> </a>
                    </div>
                    <p class="description"><a href="">Để chủ động ứng phó tình huống xấu nhất, TP HCM có kế hoạch chuẩn bị 50.000 giường điều trị Covid-19 theo yêu cầu của Ban chỉ đạo.</a></p>
                </article>
                <article class="item-news item-news-common">
                    <h3 class="title-news"><a href="">Chiến dịch tiêm vaccine Covid-19 toàn dân bắt đầu</a></h3>
                    <div class="thumb-art">
                        <a href="" class="" title="">
                        <picture>
                            <img alt="" class="g" src="https://i1-kinhdoanh.vnecdn.net/2021/07/20/ctypou488571623475287142116244-6345-5575-1626768185.jpg?w=220&amp;h=132&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=liOjaSjw4OY9IJQwsI0agg">
                        </picture> </a>
                    </div>
                    <p class="description"><a href="">Để chủ động ứng phó tình huống xấu nhất, TP HCM có kế hoạch chuẩn bị 50.000 giường điều trị Covid-19 theo yêu cầu của Ban chỉ đạo.</a></p>
                </article>
                <article class="item-news item-news-common">
                    <h3 class="title-news"><a href="">Chiến dịch tiêm vaccine Covid-19 toàn dân bắt đầu</a></h3>
                    <div class="thumb-art">
                        <a href="" class="" title="">
                        <picture>
                            <img alt="" class="g" src="https://i1-kinhdoanh.vnecdn.net/2021/07/20/ctypou488571623475287142116244-6345-5575-1626768185.jpg?w=220&amp;h=132&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=liOjaSjw4OY9IJQwsI0agg">
                        </picture> </a>
                    </div>
                    <p class="description"><a href="">Để chủ động ứng phó tình huống xấu nhất, TP HCM có kế hoạch chuẩn bị 50.000 giường điều trị Covid-19 theo yêu cầu của Ban chỉ đạo.</a></p>
                </article>
                <article class="item-news item-news-common">
                    <h3 class="title-news"><a href="">Chiến dịch tiêm vaccine Covid-19 toàn dân bắt đầu</a></h3>
                    <div class="thumb-art">
                        <a href="" class="" title="">
                        <picture>
                            <img alt="" class="g" src="https://i1-kinhdoanh.vnecdn.net/2021/07/20/ctypou488571623475287142116244-6345-5575-1626768185.jpg?w=220&amp;h=132&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=liOjaSjw4OY9IJQwsI0agg">
                        </picture> </a>
                    </div>
                    <p class="description"><a href="">Để chủ động ứng phó tình huống xấu nhất, TP HCM có kế hoạch chuẩn bị 50.000 giường điều trị Covid-19 theo yêu cầu của Ban chỉ đạo.</a></p>
                </article>
                <article class="item-news item-news-common">
                    <h3 class="title-news"><a href="">Chiến dịch tiêm vaccine Covid-19 toàn dân bắt đầu</a></h3>
                    <div class="thumb-art">
                        <a href="" class="" title="">
                        <picture>
                            <img alt="" class="g" src="https://i1-kinhdoanh.vnecdn.net/2021/07/20/ctypou488571623475287142116244-6345-5575-1626768185.jpg?w=220&amp;h=132&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=liOjaSjw4OY9IJQwsI0agg">
                        </picture> </a>
                    </div>
                    <p class="description"><a href="">Để chủ động ứng phó tình huống xấu nhất, TP HCM có kế hoạch chuẩn bị 50.000 giường điều trị Covid-19 theo yêu cầu của Ban chỉ đạo.</a></p>
                </article>
                <article class="item-news item-news-common">
                    <h3 class="title-news"><a href="">Chiến dịch tiêm vaccine Covid-19 toàn dân bắt đầu</a></h3>
                    <div class="thumb-art">
                        <a href="" class="" title="">
                        <picture>
                            <img alt="" class="g" src="https://i1-kinhdoanh.vnecdn.net/2021/07/20/ctypou488571623475287142116244-6345-5575-1626768185.jpg?w=220&amp;h=132&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=liOjaSjw4OY9IJQwsI0agg">
                        </picture> </a>
                    </div>
                    <p class="description"><a href="">Để chủ động ứng phó tình huống xấu nhất, TP HCM có kế hoạch chuẩn bị 50.000 giường điều trị Covid-19 theo yêu cầu của Ban chỉ đạo.</a></p>
                </article>
                <article class="item-news item-news-common">
                    <h3 class="title-news"><a href="">Chiến dịch tiêm vaccine Covid-19 toàn dân bắt đầu</a></h3>
                    <div class="thumb-art">
                        <a href="" class="" title="">
                        <picture>
                            <img alt="" class="g" src="https://i1-kinhdoanh.vnecdn.net/2021/07/20/ctypou488571623475287142116244-6345-5575-1626768185.jpg?w=220&amp;h=132&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=liOjaSjw4OY9IJQwsI0agg">
                        </picture> </a>
                    </div>
                    <p class="description"><a href="">Để chủ động ứng phó tình huống xấu nhất, TP HCM có kế hoạch chuẩn bị 50.000 giường điều trị Covid-19 theo yêu cầu của Ban chỉ đạo.</a></p>
                </article>
            </div>
            <div class="col-right">
                <div class="box-category">
                    <hgroup class="title-box-category">
                        <h2 class="parent-cate"><a href="" class="inner-title">Kinh doanh</a></h2>
                        <span class="sub-cate"><a href="">Quốc tế</a></span>
                        <span class="sub-cate"><a href="">Doanh nghiệp</a></span>
                    </hgroup>
                    <div class="content-box-category">
                        <article class="item-news full-thumb flexbox">
                            <div class="thumb-art">
                                <a href="https://vnexpress.net/nen-kinh-te-can-vaccine-goi-ho-tro-quy-mo-lon-4328974.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-1&amp;vn_term=Desktop&amp;vn_thumb=1" class="thumb thumb-5x3" title="Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn" data-itm-added="1">
                                    <picture>
                                        <img loading="lazy" intrinsicsize="380x228" alt="Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn" class="lazy lazied" src="https://i1-kinhdoanh.vnecdn.net/2021/07/22/HoangVanCuong-1626952589-5341-1626952819.jpg?w=380&amp;h=228&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=HToltNJbJZQjnhD33YfX8w" data-src="https://i1-kinhdoanh.vnecdn.net/2021/07/22/HoangVanCuong-1626952589-5341-1626952819.jpg?w=380&amp;h=228&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=HToltNJbJZQjnhD33YfX8w" data-ll-status="loaded">
                                    </picture>
                                </a>
                            </div>
                            <div class="wrap-sum-news">
                                <h3 class="title-news"><a href="https://vnexpress.net/nen-kinh-te-can-vaccine-goi-ho-tro-quy-mo-lon-4328974.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-1&amp;vn_term=Desktop&amp;vn_thumb=1" title="Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn" data-itm-added="1">Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn</a></h3>
                                <p class="description">
                                    <a href="https://vnexpress.net/nen-kinh-te-can-vaccine-goi-ho-tro-quy-mo-lon-4328974.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-1&amp;vn_term=Desktop&amp;vn_thumb=1" title="Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn" data-itm-added="1">
                                        Các gói hỗ trợ doanh nghiệp qua các đợt dịch vừa rồi được xem là mới "hà hơi thổi ngạt" trong khi các doanh ...
                                    </a>
                                    <span class="meta-news">
                                        <a class="count_cmt" href="https://vnexpress.net/nen-kinh-te-can-vaccine-goi-ho-tro-quy-mo-lon-4328974.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                            <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                            <span class="font_icon widget-comment-4328974-1"></span>
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </article>
                        <article class="article-sub-right">
                            <h3 class="title-news"><a href="https://vnexpress.net/chung-khoan-tang-manh-4328905.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-2&amp;vn_term=Desktop&amp;vn_thumb=0" data-itm-added="1">Chứng khoán tăng mạnh</a></h3>
                            <p class="description">
                                <a href="https://vnexpress.net/chung-khoan-tang-manh-4328905.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-2&amp;vn_term=Desktop&amp;vn_thumb=0" title="Chứng khoán tăng mạnh" data-itm-added="1">
                                    Sau khi đảo chiều từ giảm thành tăng vào đầu phiên, VN-Index duy trì sắc xanh đến lúc đóng cửa và tích luỹ thêm 22,88 điểm so với tham chiếu.
                                </a>
                                <span class="meta-news">
                                    <a class="count_cmt" href="https://vnexpress.net/chung-khoan-tang-manh-4328905.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                        <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                        <span class="font_icon widget-comment-4328905-1">2</span>
                                    </a>
                                </span>
                            </p>
                        </article>
                        <div class="sub-news-cate flexbox">
                            <article class="item-news">
                                <h3 class="title-news"><a href="https://vnexpress.net/uy-ban-kinh-te-lo-ngai-bong-bong-tai-san-4328612.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-3&amp;vn_term=Desktop&amp;vn_thumb=0" title="Uỷ ban Kinh tế: Lo ngại bong bóng tài sản" data-itm-added="1">Uỷ ban Kinh tế: Lo ngại bong bóng tài sản</a><span class="meta-news">
                                    <a class="count_cmt" href="https://vnexpress.net/uy-ban-kinh-te-lo-ngai-bong-bong-tai-san-4328612.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                    <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                    <span class="font_icon widget-comment-4328612-1"></span>
                                    </a>
                                    </span>
                                </h3>
                            </article>
                            <article class="item-news">
                                <h3 class="title-news"><a href="https://vnexpress.net/tp-hcm-hien-co-800-diem-ban-hang-luu-dong-4329039.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-4&amp;vn_term=Desktop&amp;vn_thumb=0" title="TP HCM hiện có 800 điểm bán hàng lưu động" data-itm-added="1">TP HCM hiện có 800 điểm bán hàng lưu động</a><span class="meta-news">
                                    <a class="count_cmt" href="https://vnexpress.net/tp-hcm-hien-co-800-diem-ban-hang-luu-dong-4329039.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                    <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                    <span class="font_icon widget-comment-4329039-1"></span>
                                    </a>
                                    </span>
                                </h3>
                            </article>
                            <article class="item-news">
                                <h3 class="title-news"><a href="https://vnexpress.net/digiworld-lai-dam-4328786.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-5&amp;vn_term=Desktop&amp;vn_thumb=0" title="Digiworld lãi đậm" data-itm-added="1">Digiworld lãi đậm</a><span class="meta-news">
                                    <a class="count_cmt" href="https://vnexpress.net/digiworld-lai-dam-4328786.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                    <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                    <span class="font_icon widget-comment-4328786-1"></span>
                                    </a>
                                    </span>
                                </h3>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="box-category">
                    <hgroup class="title-box-category">
                        <h2 class="parent-cate"><a href="" class="inner-title">Kinh doanh</a></h2>
                        <span class="sub-cate"><a href="">Quốc tế</a></span>
                        <span class="sub-cate"><a href="">Doanh nghiệp</a></span>
                    </hgroup>
                    <div class="content-box-category">
                        <article class="item-news full-thumb flexbox">
                            <div class="thumb-art">
                                <a href="https://vnexpress.net/nen-kinh-te-can-vaccine-goi-ho-tro-quy-mo-lon-4328974.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-1&amp;vn_term=Desktop&amp;vn_thumb=1" class="thumb thumb-5x3" title="Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn" data-itm-added="1">
                                    <picture>
                                        <img loading="lazy" intrinsicsize="380x228" alt="Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn" class="lazy lazied" src="https://i1-kinhdoanh.vnecdn.net/2021/07/22/HoangVanCuong-1626952589-5341-1626952819.jpg?w=380&amp;h=228&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=HToltNJbJZQjnhD33YfX8w" data-src="https://i1-kinhdoanh.vnecdn.net/2021/07/22/HoangVanCuong-1626952589-5341-1626952819.jpg?w=380&amp;h=228&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=HToltNJbJZQjnhD33YfX8w" data-ll-status="loaded">
                                    </picture>
                                </a>
                            </div>
                            <div class="wrap-sum-news">
                                <h3 class="title-news"><a href="https://vnexpress.net/nen-kinh-te-can-vaccine-goi-ho-tro-quy-mo-lon-4328974.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-1&amp;vn_term=Desktop&amp;vn_thumb=1" title="Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn" data-itm-added="1">Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn</a></h3>
                                <p class="description">
                                    <a href="https://vnexpress.net/nen-kinh-te-can-vaccine-goi-ho-tro-quy-mo-lon-4328974.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-1&amp;vn_term=Desktop&amp;vn_thumb=1" title="Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn" data-itm-added="1">
                                        Các gói hỗ trợ doanh nghiệp qua các đợt dịch vừa rồi được xem là mới "hà hơi thổi ngạt" trong khi các doanh ...
                                    </a>
                                    <span class="meta-news">
                                        <a class="count_cmt" href="https://vnexpress.net/nen-kinh-te-can-vaccine-goi-ho-tro-quy-mo-lon-4328974.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                            <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                            <span class="font_icon widget-comment-4328974-1"></span>
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </article>
                        <article class="article-sub-right">
                            <h3 class="title-news"><a href="https://vnexpress.net/chung-khoan-tang-manh-4328905.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-2&amp;vn_term=Desktop&amp;vn_thumb=0" data-itm-added="1">Chứng khoán tăng mạnh</a></h3>
                            <p class="description">
                                <a href="https://vnexpress.net/chung-khoan-tang-manh-4328905.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-2&amp;vn_term=Desktop&amp;vn_thumb=0" title="Chứng khoán tăng mạnh" data-itm-added="1">
                                    Sau khi đảo chiều từ giảm thành tăng vào đầu phiên, VN-Index duy trì sắc xanh đến lúc đóng cửa và tích luỹ thêm 22,88 điểm so với tham chiếu.
                                </a>
                                <span class="meta-news">
                                    <a class="count_cmt" href="https://vnexpress.net/chung-khoan-tang-manh-4328905.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                        <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                        <span class="font_icon widget-comment-4328905-1">2</span>
                                    </a>
                                </span>
                            </p>
                        </article>
                        <div class="sub-news-cate flexbox">
                            <article class="item-news">
                                <h3 class="title-news"><a href="https://vnexpress.net/uy-ban-kinh-te-lo-ngai-bong-bong-tai-san-4328612.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-3&amp;vn_term=Desktop&amp;vn_thumb=0" title="Uỷ ban Kinh tế: Lo ngại bong bóng tài sản" data-itm-added="1">Uỷ ban Kinh tế: Lo ngại bong bóng tài sản</a><span class="meta-news">
                                    <a class="count_cmt" href="https://vnexpress.net/uy-ban-kinh-te-lo-ngai-bong-bong-tai-san-4328612.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                    <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                    <span class="font_icon widget-comment-4328612-1"></span>
                                    </a>
                                    </span>
                                </h3>
                            </article>
                            <article class="item-news">
                                <h3 class="title-news"><a href="https://vnexpress.net/tp-hcm-hien-co-800-diem-ban-hang-luu-dong-4329039.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-4&amp;vn_term=Desktop&amp;vn_thumb=0" title="TP HCM hiện có 800 điểm bán hàng lưu động" data-itm-added="1">TP HCM hiện có 800 điểm bán hàng lưu động</a><span class="meta-news">
                                    <a class="count_cmt" href="https://vnexpress.net/tp-hcm-hien-co-800-diem-ban-hang-luu-dong-4329039.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                    <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                    <span class="font_icon widget-comment-4329039-1"></span>
                                    </a>
                                    </span>
                                </h3>
                            </article>
                            <article class="item-news">
                                <h3 class="title-news"><a href="https://vnexpress.net/digiworld-lai-dam-4328786.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-5&amp;vn_term=Desktop&amp;vn_thumb=0" title="Digiworld lãi đậm" data-itm-added="1">Digiworld lãi đậm</a><span class="meta-news">
                                    <a class="count_cmt" href="https://vnexpress.net/digiworld-lai-dam-4328786.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                    <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                    <span class="font_icon widget-comment-4328786-1"></span>
                                    </a>
                                    </span>
                                </h3>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="box-category">
                    <hgroup class="title-box-category">
                        <h2 class="parent-cate"><a href="" class="inner-title">Kinh doanh</a></h2>
                        <span class="sub-cate"><a href="">Quốc tế</a></span>
                        <span class="sub-cate"><a href="">Doanh nghiệp</a></span>
                    </hgroup>
                    <div class="content-box-category">
                        <article class="item-news full-thumb flexbox">
                            <div class="thumb-art">
                                <a href="https://vnexpress.net/nen-kinh-te-can-vaccine-goi-ho-tro-quy-mo-lon-4328974.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-1&amp;vn_term=Desktop&amp;vn_thumb=1" class="thumb thumb-5x3" title="Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn" data-itm-added="1">
                                    <picture>
                                        <img loading="lazy" intrinsicsize="380x228" alt="Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn" class="lazy lazied" src="https://i1-kinhdoanh.vnecdn.net/2021/07/22/HoangVanCuong-1626952589-5341-1626952819.jpg?w=380&amp;h=228&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=HToltNJbJZQjnhD33YfX8w" data-src="https://i1-kinhdoanh.vnecdn.net/2021/07/22/HoangVanCuong-1626952589-5341-1626952819.jpg?w=380&amp;h=228&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=HToltNJbJZQjnhD33YfX8w" data-ll-status="loaded">
                                    </picture>
                                </a>
                            </div>
                            <div class="wrap-sum-news">
                                <h3 class="title-news"><a href="https://vnexpress.net/nen-kinh-te-can-vaccine-goi-ho-tro-quy-mo-lon-4328974.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-1&amp;vn_term=Desktop&amp;vn_thumb=1" title="Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn" data-itm-added="1">Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn</a></h3>
                                <p class="description">
                                    <a href="https://vnexpress.net/nen-kinh-te-can-vaccine-goi-ho-tro-quy-mo-lon-4328974.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-1&amp;vn_term=Desktop&amp;vn_thumb=1" title="Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn" data-itm-added="1">
                                        Các gói hỗ trợ doanh nghiệp qua các đợt dịch vừa rồi được xem là mới "hà hơi thổi ngạt" trong khi các doanh ...
                                    </a>
                                    <span class="meta-news">
                                        <a class="count_cmt" href="https://vnexpress.net/nen-kinh-te-can-vaccine-goi-ho-tro-quy-mo-lon-4328974.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                            <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                            <span class="font_icon widget-comment-4328974-1"></span>
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </article>
                        <article class="article-sub-right">
                            <h3 class="title-news"><a href="https://vnexpress.net/chung-khoan-tang-manh-4328905.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-2&amp;vn_term=Desktop&amp;vn_thumb=0" data-itm-added="1">Chứng khoán tăng mạnh</a></h3>
                            <p class="description">
                                <a href="https://vnexpress.net/chung-khoan-tang-manh-4328905.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-2&amp;vn_term=Desktop&amp;vn_thumb=0" title="Chứng khoán tăng mạnh" data-itm-added="1">
                                    Sau khi đảo chiều từ giảm thành tăng vào đầu phiên, VN-Index duy trì sắc xanh đến lúc đóng cửa và tích luỹ thêm 22,88 điểm so với tham chiếu.
                                </a>
                                <span class="meta-news">
                                    <a class="count_cmt" href="https://vnexpress.net/chung-khoan-tang-manh-4328905.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                        <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                        <span class="font_icon widget-comment-4328905-1">2</span>
                                    </a>
                                </span>
                            </p>
                        </article>
                        <div class="sub-news-cate flexbox">
                            <article class="item-news">
                                <h3 class="title-news"><a href="https://vnexpress.net/uy-ban-kinh-te-lo-ngai-bong-bong-tai-san-4328612.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-3&amp;vn_term=Desktop&amp;vn_thumb=0" title="Uỷ ban Kinh tế: Lo ngại bong bóng tài sản" data-itm-added="1">Uỷ ban Kinh tế: Lo ngại bong bóng tài sản</a><span class="meta-news">
                                    <a class="count_cmt" href="https://vnexpress.net/uy-ban-kinh-te-lo-ngai-bong-bong-tai-san-4328612.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                    <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                    <span class="font_icon widget-comment-4328612-1"></span>
                                    </a>
                                    </span>
                                </h3>
                            </article>
                            <article class="item-news">
                                <h3 class="title-news"><a href="https://vnexpress.net/tp-hcm-hien-co-800-diem-ban-hang-luu-dong-4329039.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-4&amp;vn_term=Desktop&amp;vn_thumb=0" title="TP HCM hiện có 800 điểm bán hàng lưu động" data-itm-added="1">TP HCM hiện có 800 điểm bán hàng lưu động</a><span class="meta-news">
                                    <a class="count_cmt" href="https://vnexpress.net/tp-hcm-hien-co-800-diem-ban-hang-luu-dong-4329039.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                    <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                    <span class="font_icon widget-comment-4329039-1"></span>
                                    </a>
                                    </span>
                                </h3>
                            </article>
                            <article class="item-news">
                                <h3 class="title-news"><a href="https://vnexpress.net/digiworld-lai-dam-4328786.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-5&amp;vn_term=Desktop&amp;vn_thumb=0" title="Digiworld lãi đậm" data-itm-added="1">Digiworld lãi đậm</a><span class="meta-news">
                                    <a class="count_cmt" href="https://vnexpress.net/digiworld-lai-dam-4328786.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                    <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                    <span class="font_icon widget-comment-4328786-1"></span>
                                    </a>
                                    </span>
                                </h3>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="box-category">
                    <hgroup class="title-box-category">
                        <h2 class="parent-cate"><a href="" class="inner-title">Kinh doanh</a></h2>
                        <span class="sub-cate"><a href="">Quốc tế</a></span>
                        <span class="sub-cate"><a href="">Doanh nghiệp</a></span>
                    </hgroup>
                    <div class="content-box-category">
                        <article class="item-news full-thumb flexbox">
                            <div class="thumb-art">
                                <a href="https://vnexpress.net/nen-kinh-te-can-vaccine-goi-ho-tro-quy-mo-lon-4328974.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-1&amp;vn_term=Desktop&amp;vn_thumb=1" class="thumb thumb-5x3" title="Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn" data-itm-added="1">
                                    <picture>
                                        <img loading="lazy" intrinsicsize="380x228" alt="Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn" class="lazy lazied" src="https://i1-kinhdoanh.vnecdn.net/2021/07/22/HoangVanCuong-1626952589-5341-1626952819.jpg?w=380&amp;h=228&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=HToltNJbJZQjnhD33YfX8w" data-src="https://i1-kinhdoanh.vnecdn.net/2021/07/22/HoangVanCuong-1626952589-5341-1626952819.jpg?w=380&amp;h=228&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=HToltNJbJZQjnhD33YfX8w" data-ll-status="loaded">
                                    </picture>
                                </a>
                            </div>
                            <div class="wrap-sum-news">
                                <h3 class="title-news"><a href="https://vnexpress.net/nen-kinh-te-can-vaccine-goi-ho-tro-quy-mo-lon-4328974.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-1&amp;vn_term=Desktop&amp;vn_thumb=1" title="Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn" data-itm-added="1">Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn</a></h3>
                                <p class="description">
                                    <a href="https://vnexpress.net/nen-kinh-te-can-vaccine-goi-ho-tro-quy-mo-lon-4328974.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-1&amp;vn_term=Desktop&amp;vn_thumb=1" title="Nền kinh tế cần 'vaccine' - gói hỗ trợ quy mô lớn" data-itm-added="1">
                                        Các gói hỗ trợ doanh nghiệp qua các đợt dịch vừa rồi được xem là mới "hà hơi thổi ngạt" trong khi các doanh ...
                                    </a>
                                    <span class="meta-news">
                                        <a class="count_cmt" href="https://vnexpress.net/nen-kinh-te-can-vaccine-goi-ho-tro-quy-mo-lon-4328974.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                            <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                            <span class="font_icon widget-comment-4328974-1"></span>
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </article>
                        <article class="article-sub-right">
                            <h3 class="title-news"><a href="https://vnexpress.net/chung-khoan-tang-manh-4328905.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-2&amp;vn_term=Desktop&amp;vn_thumb=0" data-itm-added="1">Chứng khoán tăng mạnh</a></h3>
                            <p class="description">
                                <a href="https://vnexpress.net/chung-khoan-tang-manh-4328905.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-2&amp;vn_term=Desktop&amp;vn_thumb=0" title="Chứng khoán tăng mạnh" data-itm-added="1">
                                    Sau khi đảo chiều từ giảm thành tăng vào đầu phiên, VN-Index duy trì sắc xanh đến lúc đóng cửa và tích luỹ thêm 22,88 điểm so với tham chiếu.
                                </a>
                                <span class="meta-news">
                                    <a class="count_cmt" href="https://vnexpress.net/chung-khoan-tang-manh-4328905.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                        <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                        <span class="font_icon widget-comment-4328905-1">2</span>
                                    </a>
                                </span>
                            </p>
                        </article>
                        <div class="sub-news-cate flexbox">
                            <article class="item-news">
                                <h3 class="title-news"><a href="https://vnexpress.net/uy-ban-kinh-te-lo-ngai-bong-bong-tai-san-4328612.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-3&amp;vn_term=Desktop&amp;vn_thumb=0" title="Uỷ ban Kinh tế: Lo ngại bong bóng tài sản" data-itm-added="1">Uỷ ban Kinh tế: Lo ngại bong bóng tài sản</a><span class="meta-news">
                                    <a class="count_cmt" href="https://vnexpress.net/uy-ban-kinh-te-lo-ngai-bong-bong-tai-san-4328612.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                    <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                    <span class="font_icon widget-comment-4328612-1"></span>
                                    </a>
                                    </span>
                                </h3>
                            </article>
                            <article class="item-news">
                                <h3 class="title-news"><a href="https://vnexpress.net/tp-hcm-hien-co-800-diem-ban-hang-luu-dong-4329039.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-4&amp;vn_term=Desktop&amp;vn_thumb=0" title="TP HCM hiện có 800 điểm bán hàng lưu động" data-itm-added="1">TP HCM hiện có 800 điểm bán hàng lưu động</a><span class="meta-news">
                                    <a class="count_cmt" href="https://vnexpress.net/tp-hcm-hien-co-800-diem-ban-hang-luu-dong-4329039.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                    <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                    <span class="font_icon widget-comment-4329039-1"></span>
                                    </a>
                                    </span>
                                </h3>
                            </article>
                            <article class="item-news">
                                <h3 class="title-news"><a href="https://vnexpress.net/digiworld-lai-dam-4328786.html" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-KinhDoanh&amp;vn_medium=Item-5&amp;vn_term=Desktop&amp;vn_thumb=0" title="Digiworld lãi đậm" data-itm-added="1">Digiworld lãi đậm</a><span class="meta-news">
                                    <a class="count_cmt" href="https://vnexpress.net/digiworld-lai-dam-4328786.html#box_comment_vne" style="white-space: nowrap; display: none;">
                                    <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                                    <span class="font_icon widget-comment-4328786-1"></span>
                                    </a>
                                    </span>
                                </h3>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="box_business">
            <div class="container">
                <div class="inner-box-business">
                    <hgroup class="title-box-category">
                        <h2 class="parent-cate"><div class="inner-title">Thông tin doanh nghiệp</div></h2>
                    </hgroup>
                    <div class="swiper-wrapper">
                        <article class="swiper-slide">
                            <div class="">
                                <a href=""><picture><img src="https://i1-kinhdoanh.vnecdn.net/2021/07/17/anh8-1626519189-5099-1626520311.jpg?w=300&h=180&q=100&dpr=1&fit=crop&s=bfScUaxjvlTghauVuc-HnQ" alt=""></picture></a>
                            </div>
                            <h3 class="title-news"><a href="">Apollo Silicone chi 130 tỷ đồng hỗ trợ khách hàng, nhà phân phối</a></h3>
                        </article>
                        <article class="swiper-slide">
                            <div class="">
                                <a href=""><picture><img src="https://i1-kinhdoanh.vnecdn.net/2022/06/15/77-1655305447-7121-1655305625.jpg?w=300&amp;h=180&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=2L9j0DcvjOqDHDa6A-Sisg" alt=""></picture></a>
                            </div>
                            <h3 class="title-news"><a href="">Lợi thế an cư và đầu tư tại Cát Tường Park House</a></h3>
                        </article>
                        <article class="swiper-slide">
                            <div class="">
                                <a href=""><picture><img src="https://i1-kinhdoanh.vnecdn.net/2021/07/17/anh8-1626519189-5099-1626520311.jpg?w=300&h=180&q=100&dpr=1&fit=crop&s=bfScUaxjvlTghauVuc-HnQ" alt=""></picture></a>
                            </div>
                            <h3 class="title-news"><a href="">Apollo Silicone chi 130 tỷ đồng hỗ trợ khách hàng, nhà phân phối</a></h3>
                        </article>
                        <article class="swiper-slide">
                            <div class="">
                                <a href=""><picture><img src="https://i1-kinhdoanh.vnecdn.net/2021/07/17/anh8-1626519189-5099-1626520311.jpg?w=300&h=180&q=100&dpr=1&fit=crop&s=bfScUaxjvlTghauVuc-HnQ" alt=""></picture></a>
                            </div>
                            <h3 class="title-news"><a href="">Apollo Silicone chi 130 tỷ đồng hỗ trợ khách hàng, nhà phân phối</a></h3>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
