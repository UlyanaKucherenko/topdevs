@extends('layouts.app')

@section('link')
  <title>EasyPhone: An Android Mobile App For Older People | TopDevs</title>
  <meta name="description" content="How TopDevs performed full cycle mobile development services to create a mobile app targeted at a specific audience - elderly people.">
  <meta name="keywords" content="android mobile application, mobile app development, app development stage, app design,user experience, development team, create a mobile app, mobile application, mobile app development services, build a mobile app">
  <meta property="og:title" content="EasyPhone: An Android Mobile App For Older People | TopDevs">
  <meta property="og:description" content="How TopDevs performed full cycle mobile development services to create a mobile app targeted at a specific audience - elderly people.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-easy.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-easy.png"/>
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <easy></easy>
  </portfolio-layout>
@endsection
