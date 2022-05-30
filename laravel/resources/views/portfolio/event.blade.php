@extends('layouts.app')

@section('link')
  <title>EventApp: An Event Planning App | TopDevs</title>
  <meta name="description" content="How TopDevs built a social ecosystem for events management - from creation to scheduling and purchasing tickets.">
  <meta name="keywords" content="event invitation app, create a social network, create an application, build a user interface, develop an mvp, validate an idea, mobile app development, interface development, mvp development, dedicated team, app development services, minimum viable product, digital solution, product development stage, create an event management app">
  <meta property="og:title" content="EventApp: An Event Planning App | TopDevs">
  <meta property="og:description" content="How TopDevs built a social ecosystem for events management - from creation to scheduling and purchasing tickets.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-event.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-event.png"/>
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <event></event>
  </portfolio-layout>
@endsection
