@extends('layouts.app')

@section('link')
  <title>Pet Monitoring System: A Video Streaming App | TopDevs</title>
  <meta name="description" content="How TopDevs helped to build an iOS pet camera app to make monitoring and interacting with pets easy.">
  <meta name="keywords" content="pet monitoring app, build a pet camera app for iOS, pet camera app, pet monitoring system, video streaming service, application redesign, video streaming solutions development, iot technologies, dog camera app, best dog camera apps, pet care industry, create a pet care app">
  <meta property="og:title" content="Pet Monitoring System: A Video Streaming App | TopDevs">
  <meta property="og:description" content="How TopDevs helped to build an iOS pet camera app to make monitoring and interacting with pets easy.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-pet.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-pet.png"/>
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <pet></pet>
  </portfolio-layout>
@endsection

