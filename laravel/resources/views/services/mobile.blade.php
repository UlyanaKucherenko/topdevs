@extends('layouts.app')

@section('link')
  <meta property="og:title" content="Mobile App Development Services | TopDevs">
  <meta property="og:description" content="Custom Mobile App Development ✅ Native iOS App Development ✅ Native Android App Development ✅ Concept & Prototype ✅ MVP development ✅Full Product Delivery ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/services/mobile/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/services/mobile/hero-bg.png"/>
@endsection

@section('content')
  <mobile></mobile>
@endsection
