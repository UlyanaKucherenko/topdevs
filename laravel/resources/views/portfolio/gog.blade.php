@extends('layouts.app')

@section('link')
  <title>GoG: A Customer Tracking Solution | TopDevs</title>
  <meta name="description" content="How TopDevs made a solution for businesses that helps to provide a personalized experience by tracking customer preferences and habits.">
  <meta name="keywords" content="solution for businesses, tracking customer preferences, ios app development, sdk development, staff augmentation, app development, create an SDK, location tracking, 360-degree customer profiles, predict consumer behavior, in-demand services, customer tracking, customer tracking app, create a customer tracking app">
  <meta property="og:title" content="GoG: A Customer Tracking Solution | TopDevs">
  <meta property="og:description" content="How TopDevs made a solution for businesses that helps to provide a personalized experience by tracking customer preferences and habits.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-gog.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-gog.png"/>
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <gog></gog>
  </portfolio-layout>
@endsection

