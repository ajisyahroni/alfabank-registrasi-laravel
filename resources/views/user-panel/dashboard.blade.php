@extends('layouts.user.panel')
@section('title', 'Dashboard')
@section('contents')
    

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; User Panel</span>

    <div class="float-right">
        <span>{{ $user_info->nama }}</span>
        <img src="assets/img/team/team-1.jpg" width="30" height="30" class="rounded-circle" alt="">
    </div>

    <div class="mt-3">
        <div class="jumbotron">
            <h1 class="display-4">Web design</h1>
            <h2><span class="badge badge-pill badge-info">Sedang masa studi</span></h2>
            <hr class="my-4">
            <h4 class="my-0"><span>1 Month program</span></h4>
            <i>terdaftar pada 1 Juli 2020</i>
        </div>
    </div>

@endsection