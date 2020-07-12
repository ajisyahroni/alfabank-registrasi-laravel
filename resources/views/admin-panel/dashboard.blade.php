@extends('layouts.admin.panel')
@section('title','Dashboard')
@section('contents')

<div class="mt-3">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari"
            aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">cari</button>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Program</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $user)
            <tr>
                <th>{{ $index = $index +1}}</th>
                <td>{{ $user->user->nama }}</td>
                <td>{{ $user->user->email }}</td>
                <td>{{ $user->user->alamat }}</td>
                <td>{{ $user->program_kursus->nama}}</td>
                <td>{{ $user->status }}</td>
                <td>
                    <a href="{{ route('admin.detail-siswa', $user->id) }}" class="btn btn-sm btn-info">detail</a>
                </td>
            </tr>    
            @endforeach
            
        </tbody>
    </table>
    <div>
        {{$users->links()}}
    </div>
</div>
@endsection