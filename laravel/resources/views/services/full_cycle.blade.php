@extends('layouts.app')

@section('link')
  <meta property="og:title" content="Full Cycle Mobile & Web Development Services | TopDevs">
  <meta property="og:description" content="End-to-End IT Development Services for Business ✅ iOS Development ✅ Android Development ✅ Web Development ✅ UX/UI Design ✅ Project Management ✅QA ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/services/full-cycle/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/services/full-cycle/hero-bg.png"/>
@endsection

@section('content')
  <full-cycle></full-cycle>
@endsection
