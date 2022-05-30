@extends('layouts.app')

@section('link')
  <title>DanceBug: A Dancing Competition Scoring App | TopDevs</title>
  <meta name="description" content="How TopDevs developed the competition scoring application for the entertainment industry that helps to organize dance contest events easily.">
  <meta name="keywords" content="create a web app, dance competition judging software, develop a web application, web app development process, development team, backend development, web app, custom web application">
  <meta property="og:title" content="DanceBug: A Dancing Competition Scoring App | TopDevs">
  <meta property="og:description" content="How TopDevs developed the competition scoring application for the entertainment industry that helps to organize dance contest events easily.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-dancebug.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-dancebug.png"/>
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <dancebug></dancebug>
  </portfolio-layout>
@endsection

