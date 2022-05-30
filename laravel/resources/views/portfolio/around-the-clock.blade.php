@extends('layouts.app')

@section('link')
    <title>24/7 Billing System: Payment Processing App | TopDevs</title>
    <meta name="description" content="How TopDevs performed a full-cycle development of a fintech web and mobile app for businesses that turns a smartphone into a portable point-of-sale terminal.">
    <meta name="keywords" content="virtual fitting room, full-cycle development, virtual fitting room app, portable point-of-sale terminal, mobile app for businesses , app development team, startup, building a mobile app, fashion retailers, backend development, create an MVP, proof of concept, developing an app, mobile app architecture">
    <meta property="og:title" content="24/7 Billing System: Payment Processing App | TopDevs">
    <meta property="og:description" content="How TopDevs performed a full-cycle development of a fintech web and mobile app for businesses that turns a smartphone into a portable point-of-sale terminal.">
    <meta property="og:image" content="/images/site/portfolio/around-the-clock/services-slide-27.png">
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:image" content="/images/site/portfolio/around-the-clock/services-slide-27.png" />
    <meta property="og:locale" content="en_US"/>
    <meta property="og:url" content="{{Request::url()}}"/>
    <meta property="og:type" content="website">
@endsection

@section('content')
    <portfolio-layout>
        <around-the-clock></around-the-clock>
    </portfolio-layout>
@endsection
