@extends('layouts.app')

@section('link')
  <meta property="og:title" content="Web and Mobile App Development Services | TopDevs">
  <meta property="og:description" content="Web & Mobile App Development Services ✅ IT Outsourcing ✅ IT Outstaffing ✅ Full Cycle Development  ✅ Web  Development ✅Mobile App Development ✅UX/UI Design ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/services/index/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/services/index/hero-bg.png"/>
@endsection

@section('content')
  <services></services>
@endsection
