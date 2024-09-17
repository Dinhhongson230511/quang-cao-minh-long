<header id="header">
    <nav class="ss-navbar active">
        <div class="ss-navbar-logo">
            <a href="{{ route('wave.home') }}"><img
                    src="{{ url('storage/'.setting('site.icon')) }}"
                    alt="" /></a>
        </div>
        <div class="ss-navbar-menu">
            <ul>
                @foreach($menus as $menu)
                    <li>
                        <a href="{{ route('wave.blog.category', $menu->slug) }}" target="_self">
                            {{ $menu->name }} <span class="caret"></span>
                        </a>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <ul>
                            @if(count($menu->children))
                                @foreach($menu->children as $chil)
                                    <li>
                                        <a
                                            href="{{ route('wave.blog.category', $chil->slug) }}"
                                            target="_self">
                                            {{ $chil->name }}
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- <div class="ss-navbar-toggle-search">
            <svg
                width="20"
                height="20"
                class="search-icon"
                role="img"
                viewBox="2 9 20 5"
                focusable="false"
                aria-label="Search">
                <path
                    class="search-icon-path"
                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
            </svg>
        </div> -->
        <!-- <div class="ss-navbar-toggle-search-show">
            <form
                class="is-search-form is-form-style is-form-style-3 is-form-id-0"
                action="https://afa.com.vn/search"
                method="get"
                role="search"
                style="display: block">
                <label for="is-search-input-0"><span class="is-screen-reader-text">Search for:</span><input
                        type="search"
                        id="is-search-input-0"
                        name="s"
                        value=""
                        class="is-search-input"
                        placeholder="Search here..."
                        autocomplete="off" /></label><button type="submit" class="is-search-submit">
                    <span class="is-search-icon">
                        <svg
                            focusable="false"
                            aria-label="Search"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            width="24px">
                            <path
                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                        </svg>
                    </span>
                </button>
            </form>
        </div> -->
        <div class="ss-navbar-toggle">
            <svg viewBox="0 0 24 24" width="24" height="24">
                <rect x="0" y="0" width="4" height="4" stroke-width="0"></rect>
                <rect x="20" y="0" width="4" height="4" stroke-width="0"></rect>
                <rect x="10" y="10" width="4" height="4" stroke-width="0"></rect>
                <rect x="0" y="20" width="4" height="4" stroke-width="0"></rect>
                <rect x="20" y="20" width="4" height="4" stroke-width="0"></rect>
                <rect
                    x="10"
                    y="0"
                    width="4"
                    height="4"
                    stroke-width="0"
                    class="icon-animate1"></rect>
                <rect
                    x="0"
                    y="10"
                    width="4"
                    height="4"
                    stroke-width="0"
                    class="icon-animate2"></rect>
                <rect
                    x="20"
                    y="10"
                    width="4"
                    height="4"
                    stroke-width="0"
                    class="icon-animate3"></rect>
                <rect
                    x="10"
                    y="20"
                    width="4"
                    height="4"
                    stroke-width="0"
                    class="icon-animate4"></rect>
            </svg>
        </div>
    </nav>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $(".ss-navbar-toggle-search").click(function() {
            $(".ss-navbar-toggle-search-show").toggle();
        });
    });
</script>