@extends('layouts.app')
@section('link')
  <meta property="og:title" content="{{$post['meta_title']}}">
  <meta property="og:description" content="{{$post['meta_description']}}">
  <meta property="og:image" content="{{URL::to('/')}}/storage/{{$post['picture']['path']}}">
  {{-- <meta name="og:image:secure_url" content="{{URL::to('/')}}/storage/{{$post['picture']['path']}}">
  <meta name="og:image:type" content="image/png"> --}}

  <meta property="og:locale" content="en_US"/>
  <meta property="og:type" content="article"/>
  <meta property="og:url" content="{{Request::url()}}"/>
  <meta property="article:published_time" content="{{$post['created_at']}}"/>
  <meta property="article:modified_time" content="{{$post['updated_at']}}">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image" content="{{URL::to('/')}}/storage/{{$post['picture']['path']}}" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.snow.min.css" rel="stylesheet" crossorigin="anonymous">
@endsection

@section('content')
  <post
    :post="{{json_encode($post)}}"
    :suggestions="{{json_encode($other_posts)}}"
  >
</post>
@endsection
