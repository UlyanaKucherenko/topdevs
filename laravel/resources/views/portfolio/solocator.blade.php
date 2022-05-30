@extends('layouts.app')

@section('link')
  <title>Solocator: A GPS Camera App For Fieldwork | TopDevs</title>
  <meta name="description" content="How TopDevs helped to create a camera compass app for iOS and Android that brings unique value for users and the location tracking industry.">
  <meta name="keywords" content="gps field camera app, camera compass app, photo direction, compass app for ios, in-app purchases, location tracking solutions, gps camera, create a tracking app">
  <meta property="og:title" content="Solocator: A GPS Camera App For Fieldwork | TopDevs">
  <meta property="og:description" content="How TopDevs helped to create a camera compass app for iOS and Android that brings unique value for users and the location tracking industry.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-solocator.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-solocator.png"/>
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <solocator></solocator>
  </portfolio-layout>
@endsection

