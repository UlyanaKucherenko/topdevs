@extends('layouts.app')

@section('link')
  <title>RealPage: A Property Management App For Real Estate | TopDevs</title>
  <meta name="description" content="How TopDevs helped to create a rental property management app for iOS to conduct real estate property inspections and address service requests efficiently.">
  <meta name="keywords" content="property management app, inspect real estate, create a rental property management app, property management app for iOS, property management tool, team augmentation, tool for the real estate, create a real estate app">
  <meta property="og:title" content="RealPage: A Property Management App For Real Estate | TopDevs">
  <meta property="og:description" content="How TopDevs helped to create a rental property management app for iOS to conduct real estate property inspections and address service requests efficiently.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-rp.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-rp.png"/>
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <real></real>
  </portfolio-layout>
@endsection

