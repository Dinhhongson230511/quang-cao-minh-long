<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @if(isset($seo['title']))
        <title>{{ $seo['title'] }}</title>
    @else
        <title>{{ setting('site.title', 'Laravel Wave') . ' - ' . setting('site.description', 'The Software as a Service Starter Kit built on Laravel & Voyager') }}</title>
    @endif

    <link rel="icon" href="{{ Voyager::image(setting('site.favicon', '/wave/favicon.png')) }}" type="image/x-icon">

    @if(isset($seo['title']) && isset( $seo['description']) && isset( $seo['image']))
        <meta property="og:title" content="{{ $seo['title']}}">
        <meta property="og:url" content="{{ Request::url() }}">
        <meta property="og:image" content="{{ $seo['image'] }}">
        <meta property="og:type" content="@if(isset($seo->type)){{ $seo->type }}@else{{ 'article' }}@endif">
        <meta property="og:description" content="{{ $seo['description']}}">
        <meta property="og:site_name" content="{{ setting('site.title') }}">

        <meta itemprop="name" content="{{ $seo['title']}}">
        <meta itemprop="description" content="{{ $seo['description']}}">
        <meta itemprop="image" content="{{ $seo['image'] }}">

        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="675">
    @endif

    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">

    @if(isset($seo['keywords']))
        <meta name="keywords" content="{{ $seo['keywords'] }}">    
    @endif
    
    @if(isset($seo['description']))
        <meta name="description" content="{{ $seo['description']}}">
    @endif

    <link
        rel="stylesheet"
        href="{{ asset('themes/' . $theme->folder . '/quang-cao/css/main.css') }}" />

    <link
        rel="stylesheet"
        href="{{ asset('themes/' . $theme->folder . '/quang-cao/css/fullpage.css') }}" />
    <link
        rel="stylesheet"
        href="{{ asset('themes/' . $theme->folder . '/quang-cao/css/slick.css') }}" />
    <link
        rel="stylesheet"
        href="{{ asset('themes/' . $theme->folder . '/quang-cao/css/slick-theme.css') }}" />
    <link
        rel="stylesheet"
        href="{{ asset('themes/' . $theme->folder . '/quang-cao/css/font-awesome.css') }}" />
    <link
        rel="stylesheet"
        href="{{ asset('themes/' . $theme->folder . '/quang-cao/css/animate.css') }}" />
    <link
        rel="stylesheet"
        href="{{ asset('themes/' . $theme->folder . '/quang-cao/css/jquery.fancybox.css') }}" />
    <link
        rel="stylesheet"
        href="{{ asset('themes/' . $theme->folder . '/quang-cao/css/custom.css') }}" />
</head>

<body>
    @include('theme::partials.header_qc')

    @yield('content')

    @include('theme::partials.footer_qc')

</body>

</html>