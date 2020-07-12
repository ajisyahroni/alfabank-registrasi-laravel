@extends('layouts.admin.panel')
@section('title','Program Kursus')
@section('contents')

<div class="row mt-3">
    <div class="col-4">
        <h3>Tambah</h3>
        <form action="{{ route('admin.create-program-kursus') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="nama" placeholder="nama program kursus" id="" class="form-control">
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="study-period">Masa studi</label>
                <select class="form-control" id="study-period" name="masa_studi">
                    <option disabled selected>pilih salah satu</option>
                    <option value="1">1 bulan</option>
                    <option value="2">2 bulan</option>
                </select>
                @error('masa_studi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="number" name="harga" placeholder="harga" id="" class="form-control">
                @error('harga')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="number" name="kuota" placeholder="kuota siswa" id="" class="form-control">
                @error('kuota')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <input type="submit" value="tambah" class="btn btn-block btn-danger">
        </form>
    </div>
    <div class="col">
        <h3>Daftar program kursus</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Waktu studi</th>
                    <th>Harga</th>
                    <th>Kuota</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($programKursuses as $index => $pk)
                <tr>
                    <th>{{$index = $index+1}}</th>
                    <td>{{$pk->nama}}</td>
                    <td>{{$pk->masa_studi}} bulan</td>
                    <td>{{$pk->harga}} jt</td>
                    <td>{{$pk->kuota}}</td>
                    <td>
                        <a href="{{ route('admin.program-kursus-edit',$pk->id)}}" class="btn btn-sm btn-info">ubah</a>
                        
                        <form action="{{ route('admin.delete-program-kursus',$pk->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="hapus" class="btn btn-sm btn-danger" />    
                        </form>
                    </td>
                </tr>    
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@endsection
