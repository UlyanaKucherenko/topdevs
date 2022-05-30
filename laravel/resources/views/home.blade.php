@extends('layouts.app')

@section('link')
  <meta property="og:title" content="TopDevs: Web and Mobile Application Development Company">
  <meta property="og:description" content="Web & Mobile App Development Company ✅ IT Outsourcing ✅ IT Outstaffing ✅ Full Cycle Development  ✅ Web  Development ✅Mobile App Development ✅UX/UI Design ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>
@endsection

@section('content')
  <home></home>
@endsection

