@extends('theme::layouts.app_qc')
@section('content')

<main id="video-wrapper">
    <div class="container-master">
        <div class="video-detail">
            <div class="imgc">
                <iframe src="{{ $first_video->link_youtobe }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>
        </div>
        <div class="list-video">

            @foreach($videos as $video)
                <div class="box-item">
                    <div class="item">
                        <div class="item-img">
                            <a href="{{ route('wave.blog.post', [$category->slug , $video->slug]) }}" rel="follow" title="{{ $video->name }}" class="imgc">
                                <img src="{{ $video->image_url() }}" alt="{{ $video->name }}" title="{{ $video->name }}">
                            </a>
                        </div>
                        <div class="item-body">
                            <div class="item-title"><a href="{{ route('wave.blog.post', [$category->slug , $video->slug]) }}" rel="follow" title="{{ $video->name }}">{{ $video->name }}</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

@endsection