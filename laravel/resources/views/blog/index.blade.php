@extends('layouts.app')

@section('link')
  <meta property="og:title" content="IT Expert Blog for Startups & Enterprises | TopDevs">
  <meta property="og:description" content="Pulse of Innovative Tech, Trends & Tips for Startups & Enterprises ✅ Business Insights ✅ Latest Technology Advancements ✅ Case studies ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>
@endsection

@section('content')
  <blog
    :latest-posts="{{json_encode($selected_posts)}}"
    :categories="{{json_encode($dropdowns)}}"
    :tags="{{json_encode($tags)}}"
  >
  </blog>
@endsection
