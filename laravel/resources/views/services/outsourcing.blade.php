@extends('layouts.app')

@section('link')
  <meta property="og:title" content="IT Outsourcing Services | TopDevs">
  <meta property="og:description" content="Outsource Software Development Services for Startups and Business ✅ Digital Transformation ✅Team Augmentation ✅ Full Cycle Web & Mobile Development ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/services/outsourcing/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/services/outsourcing/hero-bg.png"/>
@endsection

@section('content')
  <outsourcing></outsourcing>
@endsection
