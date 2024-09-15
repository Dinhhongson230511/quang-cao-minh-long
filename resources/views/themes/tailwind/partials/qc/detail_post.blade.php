@extends('theme::layouts.app_qc')

@section('content')
    <main id="about-wrapper">
        <div class="container-master">
            <div class="section-aboutus">

                <h1 class="title">{{ $post->title }}</h1>
                <div class="post-content">

                    {!! $post->body !!}
                </div>
            </div>
        </div>
    </main>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
@endsection