@extends('layouts.app')

@section('link')
  <title>Qliq: A Secure Messaging App For Healthcare | TopDevs</title>
  <meta name="description" content="How TopDevs helped to create a healthcare messaging app to provide efficient collaboration between medical professionals.">
  <meta name="keywords" content="secure texting app, create a healthcare messaging app, communication platform, application for apple, development services, dedicated team, delivering tracking solutions, create a texting app">
  <meta property="og:title" content="Qliq: A Secure Messaging App For Healthcare | TopDevs">
  <meta property="og:description" content="How TopDevs helped to create a healthcare messaging app to provide efficient collaboration between medical professionals.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-qliq.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-qliq.png"/>
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <qliq></qliq>
  </portfolio-layout>
@endsection

