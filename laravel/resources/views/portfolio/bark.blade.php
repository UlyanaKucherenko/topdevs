@extends('layouts.app')

@section('link')
  <title>BabelBark: A Digital Ecosystem For Pet Lovers | TopDevs</title>
  <meta name="description" content="How TopDevs reinforced a pet management app for iOS to connect pet parents with service providers in the pet care industry.">
  <meta name="keywords" content="health monitor app, tracking your pet, integrated software solution, software developers, development team, app founders, development stage, services providers, make a dog watching app, create a pet care app">
  <meta property="og:title" content="BabelBark: A Digital Ecosystem For Pet Lovers | TopDevs">
  <meta property="og:description" content="How TopDevs reinforced a pet management app for iOS to connect pet parents with service providers in the pet care industry.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-bark.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-bark.png"/>
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <bark></bark>
  </portfolio-layout>
@endsection

