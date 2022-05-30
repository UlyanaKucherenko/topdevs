@extends('layouts.app')

@section('link')
  <title>AutoDeal: A Vehicle Transportation App For Automotive | TopDevs</title>
  <meta name="description" content="How TopDevs helped to make a transportation app for verious user roles - from architecture design to mobile app development, deployment and further support.">
  <meta name="keywords" content="car shipping app, mobile application, create a mobile app, ios app development, app architecture design, app store deployment, build a mobile app, car tracking, development team, application architecture design, location tracking, mobile app development , app development, gps tracking app">
  <meta property="og:title" content="AutoDeal: A Vehicle Transportation App For Automotive | TopDevs">
  <meta property="og:description" content="How TopDevs helped to make a transportation app for verious user roles - from architecture design to mobile app development, deployment and further support.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-deal.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-deal.png"/>
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <deal></deal>
  </portfolio-layout>
@endsection

