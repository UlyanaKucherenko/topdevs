@extends('layouts.app')

@section('link')
  <title>Beauty Streaming: A Platform for Beauty Fans | TopDevs</title>
  <meta name="description" content="How TopDevs helped to build a digital ecosystem connecting beauty masters with their followers via subscriptions and live streaming sessions.">
  <meta name="keywords" content="digital ecosystem, digital platform, full-cycle development, web platform development, mobile apps development, mobile application development,  video streaming, apps development services, create a beauty app">
  <meta property="og:title" content="Beauty Streaming: A Platform for Beauty Fans | TopDevs">
  <meta property="og:description" content="How TopDevs helped to build a digital ecosystem connecting beauty masters with their followers via subscriptions and live streaming sessions.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-beauty.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-beauty.png" />
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <beauty></beauty>
  </portfolio-layout>
@endsection

