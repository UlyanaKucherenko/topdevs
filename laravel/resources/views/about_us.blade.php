@extends('layouts.app')

@section('link')
  <meta property="og:title" content="Custom Web & Mobile App Development Company | TopDevs">
  <meta property="og:description" content="Full-Cycle Web & Mobile Development Services ✅Trusted Technology Partner for Business ✅11+ years iOS Development Expertise ✅ 200+ projects delivered ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>
@endsection

@section('content')
  <about-us></about-us>
@endsection

