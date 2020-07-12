@extends('layouts.admin.panel')
@section('title','Dashboard')
@section('contents')

<div class="mt-3 card p-3">


    <div class="row">
        <div class="col-4">
            <img width="300" height="300" src="/assets/img/team/team-1.jpg" class="rounded" alt="">
        </div>

        <div class="col-8">
            <h1>{{ $user->name }}</h1>
            <p>{{ $user->email }}</p>
            <h5 class="my-0"><span class="badge badge-pill badge-info">web design</span></h5>
            <hr>

            <p>14 Juli 1998</p>
            <p>jalan kregan utama no 33</p>
            <p>laki-laki</p>
            <p>Islam</p>
            <hr>

            <div class="form-group">
                <label for="religion">Status</label>
                <select class="form-control" id="religion" name="religion">
                    <option value="belum_verifikasi">Belum diverifikasi</option>
                    <option value="masa_studi">Masa studi</option>
                </select>
            </div>

            <a href="#" class="btn btn-block btn-outline-info">Update status</a>
        </div>
    </div>
</div>

@endsection