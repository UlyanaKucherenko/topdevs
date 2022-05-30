@extends('layouts.industries',
  [
    'portfolio' => ['sliderProps' => ['rubricType' => 'industries', 'rubricName' => 'dating'], 'desc' => ['Dig into the best testimony of our dating app development expertise reflected in our clients\' success stories.']],
    'learn' => ['desc' => ['Get to know the newest technology trends', 'and how we will incorporate them into your', 'mobile dating app.'], 'industry' => 'dating'],
    'connect' => ['desc' => ['Looking for an dating app development company? Let\'s create a dating', 'app of your bravest business expectations together!']]
  ]
)

@section('link')
  <meta property="og:title" content="Top Dating App Development Company | TopDevs">
  <meta property="og:description" content="Dating App Development Services ✅ Native Dating App for iOS & Android ✅ On-Demand Dating Apps ✅ Matchmaking Apps ✅ Dating Community Portals ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>

  <meta property="og:image" content="/images/site/industries/dating/hero-bg.png">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="/images/site/industries/dating/hero-bg.png"/>
@endsection

@section('content')
  <dating></dating>
@endsection
