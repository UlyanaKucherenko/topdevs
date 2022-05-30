@extends('layouts.app')

@section('link')
  <title>Calibre: An Application For Luxury Watch Lovers | TopDevs</title>
  <meta name="description" content="How TopDevs helped to build a digital ecosystem for watch owners to track the history of expensive watches and protect them from fakes.">
  <meta name="keywords" content="digital ecosystem, application for tracking, mvp development, minimum viable product, development process, create a fully-fledged product, app idea, idea development, create a mobile app for iOS, create a mobile app, ios demo app, watchmaker, product value, product development stage, startup growth, demo version, iOS application, mvp, pitch the idea, product development, create an mvp">
  <meta property="og:title" content="Calibre: An Application For Luxury Watch Lovers | TopDevs">
  <meta property="og:description" content="How TopDevs helped to build a digital ecosystem for watch owners to track the history of expensive watches and protect them from fakes.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-calibre.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-calibre.png" />
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <calibre></calibre>
  </portfolio-layout>
@endsection

