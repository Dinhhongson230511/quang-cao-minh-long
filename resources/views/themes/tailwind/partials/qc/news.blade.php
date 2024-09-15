@extends('theme::layouts.app_qc')

@section('content')
<main id="news-wrapper">
    <div class="container-master">

        <h1 class="news-title">Tin tức</h1>
        <style>
            .pagination {
                transform: translate(30%, 50%);
            }

            .pagination li {
                float: left;
                display: block;
                padding: 9px;
                margin-left: 5px;
                margin-bottom: 5px;
            }

            .pagination li a {
                color: #fff;
            }

            .pagination .active {
                background-color: #f44336 !important;
            }
        </style>

        <div class="news-head">
            <div class="news-head_left">
                <div class="item">
                    <div class="item-img">
                        <a href="{{ $first_post->link() }}" rel="follow" title="{{ $first_post->title }}" class="imgc">
                            <img src="{{ $first_post->image() }}" alt="{{ $first_post->title }}" title="{{ $first_post->title }}"></a>
                    </div>
                    <div class="item-body">
                        <h3 class="item-title"><a href="{{ $first_post->link() }}" rel="follow" title="{{ $first_post->title }}">{{ $first_post->title }}</a></h3>
                    </div>
                </div>
            </div>
            <div class="news-head_right">
                <div class="box-item">
                    <h2 class="box-title">Bài viết nổi bật</h2>
                    <div class="box-content">
                        <ul>
                            @foreach($featured_post as $post)
                                <li><a href="{{ $post->link() }}" rel="follow" title="{{ $post->title }}">{{ $post->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-list">
            <div class="news-list_left">
                @foreach($posts as $post)
                    <div class="box-item">
                        <div class="item">
                            <div class="item-img">
                                <a href="{{ $post->link() }}" rel="follow" title="{{ $post->title }}" class="imgc"><img src="{{ $post->image() }}" alt="{{ $post->title }}" title="{{ $post->title }}"></a>
                            </div>
                            <div class="item-body">
                                <h3 class="item-title"><a href="{{ $post->link() }}" rel="follow" title="{{ $post->title }}">{{ $post->title }}</a></h3>
                                <h4 class="desc">

                                </h4>
                                <br>
                                <div style="float: right;margin-top: -12px;padding: 5px;"><a style="color:#fff;" href="{{ $post->link() }}">Đọc thêm</a></div>
                                <hr>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div>
                    <div>
                        {{ $posts->links('theme::partials.pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection