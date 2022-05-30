@extends('layouts.app')

@section('link')
  <title>Golf App: Virtual Trainer For Golf Players | TopDevs</title>
  <meta name="description" content="How TopDevs development team created an iOS mobile app for golfers that acts as a virtual trainer and helps to accurately measure the player's game progress.">
  <meta name="keywords" content="gps field camera app, camera compass app, photo direction, compass app for ios, in-app purchases, location tracking solutions, gps camera, create a tracking app">
  <meta property="og:title" content="Golf App: Virtual Trainer For Golf Players | TopDevs">
  <meta property="og:description" content="How TopDevs development team created an iOS mobile app for golfers that acts as a virtual trainer and helps to accurately measure the player's game progress.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-golf.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-golf.png"/>
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <golf></golf>
  </portfolio-layout>
@endsection

