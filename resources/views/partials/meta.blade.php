<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">

<meta name="keywords" content="{{__('global.keywords')}}">



<meta name="author" content="marketingmix.pl">

@if ($noFollow)
<meta name="robots" content="noindex, nofollow">
@else
<meta name="robots" content="index, follow">
@endif

<link rel="canonical" href="{{ url()->current() }}" />

<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="https://www.polanasobiczkowa.pl/">
<meta property="og:type" content="website">
<meta property="og:image" content="{{asset('assets/images/polana-sobiczkowa-og.webp')}}">

<script async src="https://app.cookieasy.pl/plugin/9fa02pn1kkvgbgu.js"></script>