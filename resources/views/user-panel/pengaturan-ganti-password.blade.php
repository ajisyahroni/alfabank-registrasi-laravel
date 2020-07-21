@extends('layouts.user.panel')
@section('title', 'Pengaturan Ganti Password')
@section('contents')

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; User Panel</span>

<div class="float-right">
    <span>{{ $user_info->nama }}</span>
    <img src="{{ asset('/assets/img/team/team-1.jpg') }}" width="30" height="30" class="rounded-circle" alt="">
</div>
<div class="mt-3">

    <form action="{{ route('user.pengaturan-ganti-password-action', $user_info->id) }}" method="POST">
        @csrf
        @method('PATCH')        

        {{-- OLD PASSWORD --}}
        <div class="form-group">
            <input type="password" name="old_password" class="form-control" id="name" placeholder="old password" />
        </div>

        <div class="form-row">
            {{-- NEW PASSWORD --}}
            <div class="col-md-6 form-group">
                <input type="password" name="new_password" class="form-control" id="name" placeholder="new password" />
            </div>
            {{-- NEW PASSWORD CONFIRM --}}
            <div class="col-md-6 form-group">
                <input type="password" name="confirm_new_password" class="form-control" id="name"
                    placeholder="confirm new password" />
            </div>
        </div>



        <div class="text-center">
            <button class="btn btn-danger btn-block mt-2" type="submit">Update</button>
        </div>
    </form>
</div>
@endsection