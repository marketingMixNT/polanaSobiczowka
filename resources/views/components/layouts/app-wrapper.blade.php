

<x-shared.preloader/>
<x-header.header/>
<x-header.header-secondary/>

{{ $slot }}

<x-map/>
<x-shared.footer/>
<x-shared.scroll-to-top />
<x-shared.mobile-buttons.mobile-buttons/>






{{-- <script src="{{$home->booking_script}}{{ str_replace('_', '-', app()->getLocale()) }}" async></script>   --}}

