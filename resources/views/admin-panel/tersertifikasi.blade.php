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
        <a href="{{ route('admin.sertifikasi') }}" class="btn btn-success btn-block text-white">lihat user dalam masa studi</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Program</th>
                <th>Nilai</th>
                <th>kode</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user_tersertifikasi as $index => $data)
               <tr>
                <th>{{ $user_tersertifikasi->firstItem() + $index }}</th>
                <td>{{ $data->nama  }}</td>
                <td>{{ $data->email  }}</td>
                <td>
                    @foreach ($data->program_kursuses as $pk)
                        <span class="badge bagde-pill badge-info">{{ $pk->nama}}</span>
                        <br>
                    @endforeach
                    
                </td>
                <td>
                    @foreach($data->sertifikats as $srtf)
                        <span class="badge bagde-pill badge-info">{{ $srtf->nilai}}</span>
                        <br>
                    @endforeach
                </td>
                <td>
                    @foreach($data->sertifikats as $srtf)
                        <span>{{ $srtf->kode_sertifikat}}</span>
                        <br>
                    @endforeach
                    
                </td>
                <th>
                <form action="{{ route('admin.suspend-sertifikasi',$data->id) }}" method="post">
                    @csrf
                    @method('delete')
                        <input type="submit" value="suspend" class="btn btn-sm btn-danger">
                    </form>
                </th>
            </tr> 
            @endforeach
            
        </tbody>
    </table>
<div>
    {{-- {{$user_tersertifikasi->links()}} --}}
</div>
</div>
@endsection