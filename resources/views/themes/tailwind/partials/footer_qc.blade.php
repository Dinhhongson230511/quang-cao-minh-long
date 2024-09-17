<div class="action-fixed">
        <ul>
            <li>
                <a
                    href="mailto:{{ setting('site.email') }}"
                    title="{{ setting('site.email') }}"
                    target="_blank"
                    rel="nofollow noreferrer noopener"><img
                        src="/themes/tailwind/images/s4.png"
                        alt="" /></a>
            </li>
            <li>
                <a
                    href="tel:{{ setting('site.hotline') }}"
                    title=""
                    target="_blank"
                    rel="nofollow noreferrer noopener"><img
                        src="/themes/tailwind/images/s3.png"
                        alt="" /></a>
            </li>
            <li>
                <a
                    href="{{ setting('site.zalo') }}"
                    target="_blank"
                    rel="nofollow noreferrer noopener"
                    title="">
                        <img
                            src="/themes/tailwind/images/s2.png"
                            alt="" />
                </a>
            </li>
            <li>
                <a
                    href="{{ setting('site.messager') }}"
                    target="_blank"
                    rel="nofollow noreferrer noopener"
                    title=""><img
                        src="/themes/tailwind/images/s1.png"
                        alt="" />
                </a>
            </li>
        </ul>
    </div>
    <script src="{{ asset('themes/' . $theme->folder . '/quang-cao/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('themes/' . $theme->folder . '/quang-cao/js/fullpage.js') }}"></script>
    <script src="{{ asset('themes/' . $theme->folder . '/quang-cao/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('themes/' . $theme->folder . '/quang-cao/js/slick.js') }}"></script>
    <script src="{{ asset('themes/' . $theme->folder . '/quang-cao/js/wow.min.js') }}"></script>
    <script src="{{ asset('themes/' . $theme->folder . '/quang-cao/js/app.js') }}"></script>
    <script src="{{ asset('themes/' . $theme->folder . '/quang-cao/js/zooming.min.js') }}"></script>

    <script>
        $("input#phone").keypress(function(event) {
            return /\d/.test(String.fromCharCode(event.keyCode));
        });
        if ($(window).width() > 1200) {
            $(".main-wrapper .section-contact").bind("mousewheel", (event) => {
                $(".section-footer").addClass("active");
                $(".main-wrapper .section-contact .container-master").addClass(
                    "active"
                );
            });
        }
        $(document).on("ajaxPromise", "[data-request]", function() {
            $("form").find("input").removeClass("error");
            $("form").find("textarea").removeClass("error");
            $("form").find("textarea").val("");
            $("form").find("input").val("");
        });
    </script>
    <div class="section-footer">
        <div class="container-master">
            <div class="row-master">
                <div class="col-12 col-md-4">
                    <div class="foot-title">{{ setting('site.field') }}</div>
                    <div class="foot-content">
                        <div class="text">
                            {{ setting('site.footer_description') }}
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
                                            title="Thiết kế văn phòng chinh phục người khó tính">{{ $post->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="foot-title">{{ setting('site.name_company') }}</div>
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
            <div class="copy-right">© Copyright 2020 - {{ setting('site.name_company') }}</div>
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
    <div style="display: none">
        <form method="POST" action="https://afa.com.vn" accept-charset="UTF-8">
            <input
                name="_session_key"
                type="hidden"
                value="NDnSt5mR5ESKUTUadItZlIM451euh9HK0jbYeT7m" /><input
                name="_token"
                type="hidden"
                value="6zvi7slndrrQzE6UU7JlepJ5ezMYKblaeKS6YCXe" />
            <select
                name="locale"
                data-request="onSwitchLocale"
                class="form-control">
                <option value="en">English</option>
                <option value="vi" selected>Việt nam</option>
            </select>
        </form>
    </div>

    <script src="{{ asset('themes/' . $theme->folder . '/quang-cao/js/framework.combined-min.js') }}"></script>
    <link
        rel="stylesheet"
        property="stylesheet"
        href=" {{ asset('themes/' . $theme->folder . '/quang-cao/css/framework.extras-min.css') }} " />