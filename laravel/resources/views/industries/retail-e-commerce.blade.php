@extends('layouts.industries',
  [
    'portfolio' => ['sliderProps' => ['rubricType' => 'industries', 'rubricName' => 'retail-e-commerce'], 'desc' => ['Dig into the best testimony of our custom retail software development expertise reflected in our clients\' success stories.']],
    'learn' => ['desc' => ['Get to know the newest technology trends', 'and how we will incorporate them into your', 'retail solution.'], 'industry' => 'retail-e-commerce'],
    'connect' => ['desc' => ['Looking for a retail app maker company? Let\'s create a retail', 'application of your bravest business expectations together!']]
  ]
)

@section('link')
  <meta property="og:title" content="Retail Software Development Services for Business | TopDevs">
  <meta property="og:description" content="E-commerce Website & App Development Company ✅ Retail Mobile App Development ✅ Retail Web Development ✅ On-demand Delivery Apps ✅ CRM & ERP Systems ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/industries/retail/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/industries/retail/hero-bg.png"/>
@endsection

@section('content')
  <retail></retail>
@endsection
