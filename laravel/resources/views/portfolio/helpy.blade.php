@extends('layouts.app')

@section('link')
  <title>Helpy: A Mobile App for Healthcare Providers | TopDevs</title>
  <meta name="description" content="How TopDevs helped to create a mobile medical app for healthcare professionals to speed up medical check-ups and save time for patient treatment.">
  <meta name="keywords" content="Medical Guide App, mobile medical app, app for healthcare professionals, create a medical handbook, make an app, development phase, build a mobile application, create a mobile app, wellness platform, digital ecosystem, digital service, website redesign, business card site, create mobile apps, integrated payment systems, wellness platform development, mobile apps development, create a fitness app">
  <meta property="og:title" content="Helpy: A Mobile App for Healthcare Providers | TopDevs">
  <meta property="og:description" content="How TopDevs helped to create a mobile medical app for healthcare professionals to speed up medical check-ups and save time for patient treatment.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-helpy.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-helpy.png"/>
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <helpy></helpy>
  </portfolio-layout>
@endsection

