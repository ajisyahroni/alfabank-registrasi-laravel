@extends('layouts.admin.panel')
@section('title','Dashboard')
@section('contents')

<div class="mt-3 card p-3">


    <div class="row">
        <div class="col-4">
            <img width="300" height="300" src="/assets/img/team/team-1.jpg" class="rounded" alt="">
        </div>

        <div class="col-8">
            <h1>{{ $user->user->nama }}</h1>
            <p>{{ $user->user->email }}</p>
            <h5 class="my-0"><span class="badge badge-pill badge-info">web design</span></h5>
            <hr>

            <p>{{ $user->user->tanggal_lahir }}</p>
            <p>{{ $user->user->alamat}}</p>
            <p>{{ $user->user->gender == 'L' ? 'Laki-laki' : 'Perempuan' }} </p>
            <p>{{ $user->user->agama }}</p>
            <hr>

        <form action="{{ route('admin.update-status-siswa',$user->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option {{$user->status == 'belum_verifikasi' ? 'selected' : ''}} value="belum_verifikasi">Belum diverifikasi</option>
                        <option {{$user->status == 'masa_studi' ? 'selected' : ''}} value="masa_studi">Masa studi</option>
                    </select>
                </div>
    
                <input type="submit" class="btn btn-block btn-outline-info" value="Update status" />
            </form>
        </div>
    </div>
</div>

@endsection