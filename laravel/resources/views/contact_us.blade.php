@extends('layouts.app')

@section('link')
  <meta property="og:title" content="Contact Your Software Development Partner | TopDevs">
  <meta property="og:description" content="Web & Mobile App Development Services ✅ Tech Partner for Business ✅ Phones:  +1 323 315 0425 (USA), +1 (647) 877 2408 (CAN) ✅ Email: info@topdevs.org ✅">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{Request::url()}}"/>
@endsection

@section('content')
  <contact-us></contact-us>
@endsection

