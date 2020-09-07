@extends('layouts.app')
@section('title', '| '.$title.'')
@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon icon-user mr-2"></i>
                        {{$title}} Page
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <div class="tab-content pb-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                <div class="container col-md-6">
                    <div class="col-md-12">
                        <div class="card my-3">
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="mx-auto d-block rounded-circle" width="100" src="{{ asset('images/ava/' . Auth::user()->admin_detail[0]->foto) }}" alt="User Image">
                                    <p class="mt-2 fs-20 text-uppercase font-weight-normal text-black" style="margin-bottom: 0px">{{ Auth::user()->admin_detail[0]->nama }}</p>
                                    <span>{{ Auth::user()->role[0]->role->name }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
