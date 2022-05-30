@extends('layouts.app')

@section('link')
  <meta property="og:title" content="Custom Web Development Services | TopDevs">
  <meta property="og:description" content="Custom Website & Web Application Development Services ✅ Frontend Web Development ✅ Backend Web Development ✅ Database Development ✅ Infrastructure Management ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/services/webdev/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/services/webdev/hero-bg.png"/>
@endsection

@section('content')
  <web-dev></web-dev>
@endsection
