@extends('theme::layouts.app_qc')

@section('content')

<main class="main-wrapper full-page" id="full-page">

    <section
        id="banner-slider"
        class="section slick-slider"
        data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "pauseOnHover": false, "autoplaySpeed": 3000, "autoplay": true, "dots": true, "arrows":false}'>
            @foreach($slides as $slide)    
                <div class="banner-home">
                    <div class="box-img">
                        <img
                            src="{{ $slide->image_url() }}"
                            alt="{{ $slide->name }}" />
                    </div>
                    <div
                        class="box-content wow fadeInUp"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <h3>{{ $slide->name }}</h3>
                    </div>
                </div>
            @endforeach
    </section>

    <section
        id="banner-slider-mobile"
        class="section slick-slider"
        data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "pauseOnHover": false, "autoplaySpeed": 3000, "autoplay": true, "dots": true, "arrows":false}'>
        <div class="banner-home">
            <div class="box-image-mobile">
                @foreach($slides as $key => $slide)
                    <div class="box-image-{{ $key + 1 }}">
                        <img
                            src="{{ $slide->image_url() }}"
                            alt="{{ $slide->name }}" />
                        <div class="text">{{ $slide->name }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        if (window.innerWidth > 767) {
            var myobj = document.getElementById("banner-slider-mobile");
            myobj.remove();
        }
        if (window.innerWidth < 768) {
            var myobj = document.getElementById("banner-slider");
            myobj.remove();
        }
    </script>

    <section
        class="section slick-slider"
        id="service-slider"
        data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "pauseOnHover": false, "autoplaySpeed": 5000, "autoplay": true, "dots": true, "arrows":false, "responsive": [{"breakpoint":1199,"settings":{"adaptiveHeight": true}}]}'>
        <div class="service-item service-item-all">
            <div class="container-master">
                <div class="box-item">
                    <div class="item info-text">
                        <h2>
                            <a
                                href="dich-vu-tu-van-thiet-ke-thi-cong-kien-truc-noi-that-van-phong"
                                rel="follow"
                                title="Dịch vụ">Dịch vụ</a>
                        </h2>
                        <div class="text">
                            <p>
                                {{ setting('site.dich-vu') }}
                            </p>
                        </div>
                    </div>

                    @foreach($services as $service)
                        <div class="item info-item">
                            <div class="item-img">
                                <a
                                    href="{{ $service->link }}"
                                    rel="follow"
                                    class="imgc"
                                    title="{{ $service->name }}">
                                    <img
                                        src="{{ $service->image_url() }}"
                                        alt="{{ $service->name }}" />
                                </a>
                            </div>
                            <div class="item-body">
                                <h3>
                                    <a
                                        href="https://afa.com.vn/thiet-ke-noi-that-2"
                                        rel="follow"
                                        title="{{ $service->name }}">{{ $service->name }}</a>
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- -->
        <!--    <div class="service-item service-item-child">-->
        <!--        -->
        <!--            -->
        <!--                <a href="https://afa.com.vn/thiet-ke-noi-that-2" rel="follow" class="sl-img" title="THIẾT KẾ NỘI THẤT"><img src="https://afa.com.vn/storage/app/uploads/public/5f7/709/06b/5f770906bf29d550691068.png" alt="THIẾT KẾ NỘI THẤT"></a>-->
        <!--            -->
        <!--        -->
        <!--        <div class="box-text">-->
        <!--            <div class="tle"><a href="https://afa.com.vn/thiet-ke-noi-that-2" rel="follow" title="THIẾT KẾ NỘI THẤT">THIẾT KẾ NỘI THẤT</a></div>-->
        <!--            <div class="txt">-->
        <!--                <a href="https://afa.com.vn/thiet-ke-noi-that-2" rel="follow" title="THIẾT KẾ NỘI THẤT">Chúng tôi quan điểm “Thiết kế nội thất là một công việc sáng tạo liên tục, đòi hỏi sự kết hợp của nhiều nhà chuyên môn như kiến trúc sư, hoạ sĩ, thậm chí là các nghệ nhận lành nghề”</a>-->
        <!--            </div>-->
        <!--            <div class="btn-view-more">-->
        <!--                <a href="https://afa.com.vn/thiet-ke-noi-that-2" rel="follow" class="ss-view-more" title="THIẾT KẾ NỘI THẤT">Xem thêm <i class="fa fa-angle-right" aria-hidden="true"></i></a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!-- -->
        <!--    <div class="service-item service-item-child">-->
        <!--        -->
        <!--            -->
        <!--                <a href="https://afa.com.vn/thiet-ke-kien-truc" rel="follow" class="sl-img" title="THIẾT KẾ KIẾN TRÚC"><img src="https://afa.com.vn/storage/app/uploads/public/5f7/709/c1d/5f7709c1d3a7d377638821.png" alt="THIẾT KẾ KIẾN TRÚC"></a>-->
        <!--            -->
        <!--        -->
        <!--        <div class="box-text">-->
        <!--            <div class="tle"><a href="https://afa.com.vn/thiet-ke-kien-truc" rel="follow" title="THIẾT KẾ KIẾN TRÚC">THIẾT KẾ KIẾN TRÚC</a></div>-->
        <!--            <div class="txt">-->
        <!--                <a href="https://afa.com.vn/thiet-ke-kien-truc" rel="follow" title="THIẾT KẾ KIẾN TRÚC">Kiến trúc ngày nay không giống kiến trúc trước đây, khi nó từng là đại diện của xã hội. Ngày nay thông qua kiến trúc khách hàng thể hiện cá tính, dấu ấn cá nhân. Các công trình kiến trúc Quảng cáo Minh Long hướng...</a>-->
        <!--            </div>-->
        <!--            <div class="btn-view-more">-->
        <!--                <a href="https://afa.com.vn/thiet-ke-kien-truc" rel="follow" class="ss-view-more" title="THIẾT KẾ KIẾN TRÚC">Xem thêm <i class="fa fa-angle-right" aria-hidden="true"></i></a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!---->
        <!--    <div class="service-item service-item-child">-->
        <!--        -->
        <!--            -->
        <!--                <a href="https://afa.com.vn/tong-thau-thi-cong-noi-that" rel="follow" class="sl-img" title="DESIGN &amp; BUILD"><img src="https://afa.com.vn/storage/app/uploads/public/5f7/7d3/1d7/5f77d31d7fd97404757687.png" alt="DESIGN &amp; BUILD"></a>-->
        <!--            -->
        <!--        -->
        <!--        <div class="box-text">-->
        <!--            <div class="tle"><a href="https://afa.com.vn/tong-thau-thi-cong-noi-that" rel="follow" title="DESIGN &amp; BUILD">DESIGN &amp; BUILD</a></div>-->
        <!--            <div class="txt">-->
        <!--                <a href="https://afa.com.vn/tong-thau-thi-cong-noi-that" rel="follow" title="DESIGN &amp; BUILD">Việc minh bạch hóa quá trình thi công nhờ vào 7 bước thực hiện dự án, Quảng cáo Minh Long giúp khách hàng tự tin kiểm soát được tiến độ, quản lý chi phí và chất lượng công trình hiệu quả.</a>-->
        <!--            </div>-->
        <!--            <div class="btn-view-more">-->
        <!--                <a href="https://afa.com.vn/tong-thau-thi-cong-noi-that" rel="follow" class="ss-view-more" title="DESIGN &amp; BUILD">Xem thêm <i class="fa fa-angle-right" aria-hidden="true"></i></a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!---->
    </section>
    <section
        class="section slick-slider"
        id="project-slider"
        data-slick='{"slidesToShow": 1,"autoplaySpeed": 500, "slidesToScroll": 1, "pauseOnHover": false, "dots": true, "arrows":false, "responsive": [{"breakpoint":1199,"settings":{"adaptiveHeight": true}}]}'>
        <div class="project-item project-item-all">
            <a
                href="https://afa.com.vn/categories/du-an"
                rel="follow"
                class="sl-img">
                <img
                    src="https://afa.com.vn/themes/afa/assets/images/project/p1.jpg"
                    alt="" />
                <!--                                     <img src="https://afa.com.vn/storage/app/uploads/public/5f8/271/bb4/5f8271bb4cc95070424414.jpg" alt="">
                             -->
            </a>
            <div class="sl-text">
                <a href="https://afa.com.vn/categories/du-an" rel="follow">Các dự án đã thực hiện</a>
            </div>
            <!-- <div class="sl-text"><a href="https://afa.com.vn/categories/du-an">Các dự án đã thực hiện</a></div> -->
        </div>
        <div class="project-item project-item-child">
            <div class="list-prj">
                @foreach($projects as $project)
                    <div class="box-prj">
                        <a
                            style="text-transform: uppercase;"
                            href="{{ $project->link() }}"
                            rel="follow"
                            class="item-prj"
                            title="{{ $project->title }}">
                            <img
                                src="{{ $project->image() }}"
                                alt="{{ $project->title }}" />
                            <span>{{ $project->title }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="section section-video">
        <a
            href="{{ setting('site.video-home-page') }}"
            title=""
            rel="follow"
            data-fancybox="boxVideo"
            class="avatar-video">
            <img
                src="{{ url('storage/'.setting('site.video-backgound-home-page')) }}"
                alt="" />
            <i class="fa fa-play" aria-hidden="true"></i>
        </a>
    </section>
    <section
        class="section slick-slider"
        id="customer-slider"
        data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "pauseOnHover": false, "autoplaySpeed": 5000, "autoplay": true, "dots": true, "arrows":false,"responsive": [{"breakpoint":1199,"settings":{"adaptiveHeight": true}}]}'>
        <div class="customer-list">
            <div class="customer-list-title">Khách hàng tiêu biểu</div>
            <div class="customer-list-content">
                @foreach($customers as $customer)
                    <a
                        href="{{ $customer->link }}"
                        rel="follow"
                        title="{{ $customer->name }}"
                        class="item">
                        <div class="imgc0">
                            <img
                                src="{{ $customer->image_url() }}"
                                alt="" />
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <!--<div class="customer-detail">-->
        <!--    <div class="bg-image"><img src="https://afa.com.vn/themes/afa/assets/images/customer/bg1.png" alt=""></div>-->
        <!--    <div class="customer-detail-title">Khách hàng nói gì về chúng tôi</div>-->
        <!--    <div class="customer-detail-content">-->
        <!--        -->
        <!--            <div class="box-item">-->
        <!--                <div class="item">-->
        <!--                    <div class="item-title">-->
        <!--                        <p>Công ty Công Nghệ AI&amp;T</p>-->
        <!--                        <span>Chị Vũ Thị Nga - Đại diện AI&amp;T</span>-->
        <!--                    </div>-->
        <!--                    <div class="item-content">-->
        <!--                        <div class="photo" style="margin-bottom: 15px">-->
        <!--                            -->
        <!--                                -->
        <!--                                    <img src="https://afa.com.vn/storage/app/uploads/public/5f8/3c0/896/5f83c089608df577791938.png" alt="Công ty Công Nghệ AI&amp;T">-->
        <!--                                -->
        <!--                            -->
        <!--                        </div>-->
        <!--                        <div class="txt">-->
        <!--                           <p>Công ty Cp AI&amp;T đánh giá rất cao thiết kế của Quảng cáo Minh Long và dành cho Quảng cáo Minh Long “điểm cộng cộng” .&nbsp;</p>

<p>Thiết kế của các bạn rất sáng tạo và chúng tôi hoàn toàn bị thuyết phục ngay khi nghe các bạn thuyết trình ý tưởng “trời tròn, đất vuông” ban đầu.&nbsp;</p>

<p>Thiết kế của Quảng cáo Minh Long không chỉ độc đáo, có điểm nhấn mà còn khá linh hoạt. Đầu bài đặt ra chưa chốt được số lượng nhân sự chuyển sang văn phòng mới và khi AI&amp;T có sự thay đổi về số lượng người, Quảng cáo Minh Long đã có điều chỉnh thiết kế nhanh chóng, phù hợp.</p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        -->
        <!--            <div class="box-item">-->
        <!--                <div class="item">-->
        <!--                    <div class="item-title">-->
        <!--                        <p>Tập đoàn GoldSun</p>-->
        <!--                        <span>Phó tổng GĐ Nguyễn Khánh Ly</span>-->
        <!--                    </div>-->
        <!--                    <div class="item-content">-->
        <!--                        <div class="photo" style="margin-bottom: 15px">-->
        <!--                            -->
        <!--                                -->
        <!--                                    <img src="https://afa.com.vn/storage/app/uploads/public/5f8/3c6/92a/5f83c692a5fb0268647541.png" alt="Tập đoàn GoldSun">-->
        <!--                                -->
        <!--                            -->
        <!--                        </div>-->
        <!--                        <div class="txt">-->
        <!--                           <p>Chúng tôi đã nhận được rất nhiều đơn chào thầu trong đó có cả công ty nước ngoài với giá rẻ hơn Quảng cáo Minh Long nhưng chúng tôi vẫn quyết định làm với Quảng cáo Minh Long vì chúng tôi thấy được sự tối ưu trong thiết kế và rút ngắn được thời gian để đi vào sử dụng của chúng tôi.</p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        -->
        <!--            <div class="box-item">-->
        <!--                <div class="item">-->
        <!--                    <div class="item-title">-->
        <!--                        <p>Aptech</p>-->
        <!--                        <span></span>-->
        <!--                    </div>-->
        <!--                    <div class="item-content">-->
        <!--                        <div class="photo" style="margin-bottom: 15px">-->
        <!--                            -->
        <!--                                -->
        <!--                                    <img src="https://afa.com.vn/storage/app/uploads/public/5f8/3ca/6f4/5f83ca6f4d595819226962.png" alt="Aptech">-->
        <!--                                -->
        <!--                            -->
        <!--                        </div>-->
        <!--                        <div class="txt">-->
        <!--                           <p>To be honest, when we started the project I wasn’t sure we could pull this off but you certainly did it and did it well.</p>

<p>Highly appreciate your good job, keep it up!</p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        -->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="customer-detail">-->
        <!--    <div class="bg-image"><img src="https://afa.com.vn/themes/afa/assets/images/customer/bg1.png" alt=""></div>-->
        <!--    <div class="customer-detail-title">Khách hàng nói gì về chúng tôi</div>-->
        <!--    <div class="customer-detail-content">-->
        <!--        -->
        <!--    </div>-->
        <!--</div>-->
    </section>
    <section class="section section-contact">
        <div class="bg-image">
            <img
                src="https://afa.com.vn/themes/afa/assets/images/contact/c2.jpg"
                alt="" />
        </div>
        <div class="container-master">
            <div class="contact-title">Liên hệ</div>
            <div class="contact-content">
                <form
                    action="{{ route('contact.home') }}"
                    method="POST"
                    class="form-contact">
                    @csrf
                    <div class="form-contact">
                        <div class="row-input">
                            <div class="box-input">
                                <label>TÊN <span>*</span></label>
                                <input type="text" placeholder="" name="name" class="" />
                            </div>
                            <div class="box-input">
                                <label>ĐIỆN THOẠI<span>*</span></label>
                                <input
                                    type="text"
                                    placeholder=""
                                    id="phone"
                                    name="phone"
                                    class="" />
                            </div>
                            <div class="box-input">
                                <label>EMAIL <span>*</span></label>
                                <input type="email" placeholder="" name="email" class="" />
                            </div>
                        </div>
                        <div class="box-input">
                            <label>NỘI DUNG<span>*</span></label>
                            <textarea name="content" class=""></textarea>
                        </div>
                    </div>
                    <div class="btn-send">
                        <input type="submit" class="btn-submit" value="Gửi mẫu" />
                    </div>
                </form>
            </div>
        </div>
        <div class="section-footer">
            <div class="container-master">
                <div class="row-master">
                    <div class="col-12 col-md-4">
                        <div class="foot-title">THIẾT KẾ BIỂN QUẢNG CÁO</div>
                        <div class="foot-content">
                            <div class="text">
                                Hướng đến việc tạo ra những công trình mang cá tính riêng,
                                những sản phẩm độc bản Quảng cáo Minh Long luôn lắng nghe thấu hiểu
                                từng khách hàng. Chúng tôi luôn tôn trọng và đề cao những cá
                                tính ấy, lấy đó làm chất liệu cùng với tư duy thiết kế “cân
                                bằng” Quảng cáo Minh Long mong muốn kể những câu chuyện riêng nhuộm
                                màu sắc cá biệt.
                            </div>
                            <ul class="social">
                                <li>
                                    <a
                                        href="{{ setting('site.facebook') }}"
                                        target="_blank"
                                        rel="nofollow noreferrer noopener"
                                        title=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a
                                        href="{{ setting('site.youtobe') }}"
                                        title="Kênh youtube Afa"
                                        target="_blank"
                                        rel="nofollow noreferrer noopener"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="box-foot-new">
                            <div class="foot-title">TIN TỨC</div>
                            <div class="foot-content">
                                <ul class="links">
                                    @foreach($posts as $post)
                                        <li>
                                            <a
                                                href="{{ $post->link() }}"
                                                title="{{ $post->title }}">{{ $post->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="foot-title">Quảng cáo Minh Long</div>
                        <div class="foot-content">
                            <ul class="info">
                                <li style="word-break: break-word">
                                    <span>Địa chỉ:</span>{{ setting('site.dia-chi') }}
                                </li>
                                <li>
                                    <span>Phone:</span><a href="tel:{{ setting('site.hotline') }}" title="tel:0915075858">{{ setting('site.hotline') }}</a>
                                </li>
                                <li>
                                    <span>Email:</span><a href="mailto:info@afa.com.vn" title="">{{ setting('site.email') }}</a>
                                </li>
                                <li>
                                    <span>Web:</span><a href="{{ setting('site.web') }}" title="">{{ setting('site.web') }}</a>
                                </li>
                                <li>
                                    <span>Fanpage:</span><a
                                        href="{{ setting('site.fanpage') }}"
                                        target="_blank"
                                        rel="nofollow noreferrer noopener">{{ setting('site.fanpage') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copy-right">© Copyright 2024 - Quảng Cáo Minh Long</div>
            </div>
        </div>
        <script type="text/javascript">
            $(".post-content img").each(function(index) {
                $(this).attr("class", "img-default");
            });
        </script>

        <script>
            new Zooming().listen(".grid img");
        </script>

        <script>
            const defaultZooming = new Zooming();
            const customZooming = new Zooming();
            const config = customZooming.config();
            const TRANSITION_DURATION_DEFAULT = config.transitionDuration;
            const BG_COLOR_DEFAULT = config.bgColor;
            const SCALE_BASE_DEFAULT = config.scaleBase;
            const ACTIVE_CLASS = "button-primary";

            const btnFast = document.getElementById("btn-fast");
            const btnDark = document.getElementById("btn-dark");
            const btnScaleSmall = document.getElementById("btn-scale-small");

            document.addEventListener("DOMContentLoaded", function() {
                defaultZooming.listen(".img-default");
                customZooming.listen("#img-custom");
            });

            btnFast.addEventListener("click", function(event) {
                const transitionDuration = toggleActive(btnFast) ?
                    0.2 :
                    TRANSITION_DURATION_DEFAULT;

                customZooming.config({
                    transitionDuration
                });
            });

            btnDark.addEventListener("click", function(event) {
                const bgColor = toggleActive(btnDark) ? "black" : BG_COLOR_DEFAULT;

                customZooming.config({
                    bgColor
                });
            });

            btnScaleSmall.addEventListener("click", function(event) {
                const scaleBase = toggleActive(btnScaleSmall) ?
                    0.7 :
                    SCALE_BASE_DEFAULT;

                customZooming.config({
                    scaleBase
                });
            });

            function isActive(el) {
                return el.classList.contains(ACTIVE_CLASS);
            }

            function activate(el) {
                el.classList.add(ACTIVE_CLASS);
            }

            function deactivate(el) {
                el.classList.remove(ACTIVE_CLASS);
            }

            function toggleActive(el) {
                if (isActive(el)) {
                    deactivate(el);
                    return false;
                } else {
                    activate(el);
                    return true;
                }
            }
        </script>
    </section>

</main>
@endsection