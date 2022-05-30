@extends('layouts.app')

@section('link')
  <meta property="og:title" content="IT Outstaffing & Staff Augmentation Services | TopDevs">
  <meta property="og:description" content="IT Outstaffing & Staff Augmentation Services ✅iOS Developers ✅Android Developers ✅Web Developers ✅UX/UI Designers ✅Project Managers ✅Testing Engineers ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/services/outstaffing/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/services/outstaffing/hero-bg.png"/>
@endsection

@section('content')
  <outstaffing></outstaffing>
@endsection
