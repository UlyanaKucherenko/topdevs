@extends('layouts.app')

@section('link')
  <title>Gerasyanov: A Digital Ecosystem For Fitness Fans | TopDevs</title>
  <meta name="description" content="How TopDevs fine-tuned a digital wellness ecosystem with new functionality and mobile apps development to enhance people’s health worldwide.">
  <meta name="keywords" content="wellness platform, digital wellness ecosystem, mobile apps development, digital service for wellness, business card site, android and ios app development, create mobile apps, functionality refinement, build mobile apps, wellness platform development, mobile application development, create a fitness app">
  <meta property="og:title" content="Gerasyanov: A Digital Ecosystem For Fitness Fans | TopDevs">
  <meta property="og:description" content="How TopDevs fine-tuned a digital wellness ecosystem with new functionality and mobile apps development to enhance people’s health worldwide.">
  <meta property="og:image" content="/images/site/portfolio/portfolio-slide-gera.png">
  <meta property="og:locale" content="en_US"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/portfolio-slide-gera.png"/>
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="og:type" content="website">
@endsection

@section('content')
  <portfolio-layout>
    <gera></gera>
  </portfolio-layout>
@endsection

