@extends('layouts.app')

@section('link')
  <meta property="og:title" content="Minimum Viable Product (MVP) Development Company | TopDevs">
  <meta property="og:description" content="Minimum Viable Product Development Services Company ✅ MVP Consulting ✅ MVP Design ✅ End-to-End MVP Development ✅ MVP for Web ✅ MVP for Mobile Apps ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/services/mvp/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/services/mvp/hero-bg.png"/>
@endsection

@section('content')
  <mvp></mvp>
@endsection
