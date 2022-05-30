@extends('layouts.app')

@section('link')
  <title>ArTv: A Streaming App For Media Industry | TopDevs</title>
  <meta name="description" content="How TopDevs helped to create a video streaming app for TvOS that provides amazing experiences with stunning picture quality and immersive sound.">
  <meta name="keywords" content="video streaming service, create a video streaming app, video streaming app, media streaming services, develop an app, team extension, tvos Development, staff augmentation, ios app development, make an app, app development, video streaming solution, dedicated team, team augmentation, ios development team, create a tvos app">
  <meta property="og:title" content="ArTv: A Streaming App For Media Industry | TopDevs">
  <meta property="og:description" content="How TopDevs helped to create a video streaming app for TvOS that provides amazing experiences with stunning picture quality and immersive sound.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-artv.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-artv.png"/>
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <artv></artv>
  </portfolio-layout>
@endsection
