@extends('layouts.app')

@section('link')
  <meta property="og:title" content="Web & Mobile App Development Case Studies | TopDevs">
  <meta property="og:description" content="Custom Web & Mobile App Development Projects ✅ Native iOS & Android App Development Case Studies ✅ Full Cycle IT Outsourcing Works ✅ IT Outstaffing Works ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/portfolio/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/portfolio/hero-bg.png"/>
@endsection

@section('content')
  <portfolio
    :cases="{{json_encode($portfolio)}}"
    :rubrics="{{json_encode($dropdowns)}}"
  >
  </portfolio>
@endsection

