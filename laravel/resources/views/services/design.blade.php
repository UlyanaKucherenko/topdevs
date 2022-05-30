@extends('layouts.app')

@section('link')
  <meta property="og:title" content="Web & Mobile UX/UI Design Services | TopDevs">
  <meta property="og:description" content="UX/UI Design Services for Startups and Businesses ✅ UX/UI Design for Web & Apps ✅ UX Design ✅ UI Design ✅ Branding & Identity ✅ Prototype Development ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/services/design/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/services/design/hero-bg.png"/>
@endsection

@section('content')
  <design></design>
@endsection
