<!doctype html>
<html lang="en">
<head>
    @yield('link')
    @meta_tags
    {{-- <link rel="stylesheet" href="{{ asset('css/site/app.css') }}"> --}}
    <link rel="stylesheet" href="/css/site/app.css?ver={{filemtime('css/site/app.css')}}" async>
    <meta property="og:site_name" content="TOPDEVS - We help you transform your business by building innovative software">
    <meta property="og:image" content="/images/site/logo-big.jpg">
    <meta name="fragment" content="!">
    <link rel="canonical" href="{{url()->current()}}">
    <link rel="preload" href="/fonts/Muli/Muli-Bold.woff" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="/fonts/Muli/Muli-SemiBold.woff" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="/fonts/ProximaNova/ProximaNova-Bold.woff" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="/fonts/ProximaNova/ProximaNova-Semibold.woff" as="font" type="font/woff" crossorigin="anonymous"></link>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142329640-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-142329640-1');
    </script>

    @if (env('APP_ENV')=='production')
      <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '286666195732260');
        fbq('track', 'PageView');
      </script>
    @endif


    <noscript>
      <img height="1" width="1" style="display:none"
          src="https://www.facebook.com/tr?id=286666195732260&ev=PageView&noscript=1"/>
    </noscript>
  </head>
<body>
<div id="app">
  <default-layout>
    @yield('content')
  </default-layout>
</div>

<!-- Scripts -->
<script src="/js/site/app.js?ver={{filemtime('js/site/app.js')}}"></script>
{{-- <script src="{{ asset('js/site/app.js') }}"></script> --}}

</body>
</html>
