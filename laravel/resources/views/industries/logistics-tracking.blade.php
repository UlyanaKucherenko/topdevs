@extends('layouts.industries',
  [
    'portfolio' => ['sliderProps' => ['rubricType' => 'industries', 'rubricName' => 'logistics-tracking'], 'desc' => ['Dig into the best testimony of our logistics software development expertise reflected in our clients\', success stories.']],
    'learn' => ['desc' => ['Get to know the newest technology trends', 'and how we will incorporate them into your', 'logistics solution.'], 'industry' => 'logistics-tracking'],
    'connect' => ['desc' => ['Looking for a logistics software development company? Let\'s create geolocation apps', 'of your bravest business expectations together!']]
  ]
)

@section('link')
  <meta property="og:title" content="Location Based Services for Businesses & Startups | TopDevs">
  <meta property="og:description" content="Full-Cycle Logistics App Development Company ✅ Custom Web and Mobile Solutions for Tracking and Supply Chain Management ✅ Freight Forwarding Software ✅ ">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/industries/logic/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/industries/logic/hero-bg.png"/>
@endsection

@section('content')
  <logic></logic>
@endsection
