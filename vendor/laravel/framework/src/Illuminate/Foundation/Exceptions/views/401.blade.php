@extends('errors::illustrated-layout')
@section('image')
<div style="background-image: url({{ asset('/svg/503.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center"></div>
@endsection
@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))
