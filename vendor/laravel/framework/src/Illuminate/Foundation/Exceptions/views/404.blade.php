@extends('errors::illustrated-layout')
@section('image')
<div style="background-image: url({{ asset('/svg/404.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center"></div>
@endsection
@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
