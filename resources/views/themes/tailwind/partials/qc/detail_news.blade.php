@extends('theme::layouts.app_qc')

@section('content')

<main id="news-detail-wrapper">
    <section class="section-news-detail">
        <div class="container-master">
            <div class="news-detail">
                <div class="news-detail_left">
                    <h1 id="title-detail-news" class="title-detail">{{ $post->title }}</h1>
                    <img src="{{ $post->image() }}" width="837px" alt="{{ $post->title }}" title="{{ $post->title }}">
                    <br>
                    <div class="post-content">
                        {!! $post->body !!}
                    </div>
                </div>
                <div class="news-detail_right" style="position: static; top: 100px; width: 412.5px; right: 87.5px;">
                    <h2 class="title">Bài viết mới nhất</h2>
                    <div class="content">
                        <div class="item">
                            <div class="item-img">
                                <a href="{{ $first_post->link() }}" rel="follow" title="{{ $first_post->title }}" class="imgc">
                                    <img src="{{ $first_post->image() }}" alt="{{ $first_post->title }}" title="{{ $first_post->title }}">
                                </a>
                            </div>
                            <div class="item-body">
                                <h3 class="item-title"><a href="{{ $first_post->link() }}" rel="follow" title="{{ $first_post->title }}">{{ $first_post->title }}</a></h3>
                            </div>
                        </div>
                        <ul>
                        @foreach($posts as $p)
                            <li><a href="{{ $p->link() }}" rel="follow" title="{{ $p->title }}">{{ $p->title }}</a></li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection