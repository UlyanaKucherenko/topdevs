@extends('layouts.app')

@section('link')
  <title>Quick Size: A Try-On Clothes Fitting Room App | TopDevs</title>
  <meta name="description" content="How TopDevs helped to make a backend for a mobile app that matches the size's of other app users over particular fashion model.">
  <meta name="keywords" content="virtual fitting room, virtual fitting room app, try on clothes, clothes fitting app, fashion brands, clothes sizes, app development team, fashion startup, building a mobile app, fashion retailers, backend development, create an MVP, proof of concept, developing an app, mobile app architecture">
  <meta property="og:title" content="Quick Size: A Try-On Clothes Fitting Room App | TopDevs">
  <meta property="og:description" content="How TopDevs helped to make a backend for a mobile app that matches the size's of other app users over particular fashion model.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-quick-size.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-quick-size.png"/>
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <quick></quick>
  </portfolio-layout>
@endsection
