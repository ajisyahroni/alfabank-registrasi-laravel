@extends('layouts.user.panel')
@section('title', 'Dashboard')
@section('contents')


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; User Panel</span>

<div class="float-right">
    <span>{{ $user_info->nama }}</span>
    <img src="/assets/img/team/team-1.jpg" width="30" height="30" class="rounded-circle" alt="">
</div>
@forelse ($dashboard_info as $info)
<div class="mt-3">
    <div class="jumbotron">
        <h1 class="display-4">{{ $info->program_kursus->nama}}</h1>
        <h2><span class="badge badge-pill badge-info">{{ $info->status}}</span></h2>
        <hr class="my-4">
        <h4 class="my-0"><span>Masa studi {{ $info->program_kursus->masa_studi}} bulan</span></h4>
        <i>terdaftar pada {{ $info->created_at->format('d M Y')}}</i>
    </div>
</div>
@empty
<div class="alert alert-danger">anda tidak memiliki data</div>
@endforelse

@endsection