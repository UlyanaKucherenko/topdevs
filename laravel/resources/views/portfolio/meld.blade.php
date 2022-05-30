@extends('layouts.app')

@section('link')
  <title>Meld: A Mobile Dating App For African Americans | TopDevs</title>
  <meta name="description" content="How TopDevs helped to create a dating app for African Americans willing to find romantic relationships and date with alike people.">
  <meta name="keywords" content="serious dating app, dating app, dating application, network integration, mobile app development process, create a dating app">
  <meta property="og:title" content="Meld: A Mobile Dating App For African Americans | TopDevs">
  <meta property="og:description" content="How TopDevs helped to create a dating app for African Americans willing to find romantic relationships and date with alike people.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-meld.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-meld.png"/>
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <meld></meld>
  </portfolio-layout>
@endsection

