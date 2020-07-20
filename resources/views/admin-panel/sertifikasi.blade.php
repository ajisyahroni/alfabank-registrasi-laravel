@extends('layouts.admin.panel')
@section('title','Sertifikasi')
@section('contents')


<div class="mt-3">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="cari"
            aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">cari</button>
        </div>
    </div>
    <div class="my-2">
        <a href="{{ route('admin.tersertifikasi') }}" class="btn btn-info btn-block text-white">lihat user tersertifikasi</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Program</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user_masa_studi as $index=>$data)
               <tr>
                <th>{{ $user_masa_studi->firstItem() + $index }}</th>
                <td>{{ $data->user->nama}}</td>
                <td>{{ $data->user->email}}</td>
                <td>{{ $data->program_kursus->nama}}</td>
                <td>{{ $data->status}}</td>
                <td>
                    <form action="{{ route('admin.lulus-sertifikasi',$data->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <input type="submit" class="btn btn-sm btn-info" value="lulus" />
                    </form>
                    
                </td>
            </tr> 
            @endforeach
            
        </tbody>
    </table>
<div>
    {{$user_masa_studi->links()}}
</div>
</div>
@endsection