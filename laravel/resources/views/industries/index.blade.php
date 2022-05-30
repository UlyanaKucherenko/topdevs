@extends('layouts.app')

@section('link')
  <meta property="og:title" content="Custom Mobile and Web Solutions for Business | TopDevs">
  <meta property="og:description" content="Full-Cycle Software Development Services for Business: Entertainment, Fitness, Location Tracking, Healthcare, Retail, Education, Real Estate, Dating and more.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/industries/index/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/industries/index/hero-bg.png"/>
@endsection

@section('content')
  <industries></industries>
@endsection
