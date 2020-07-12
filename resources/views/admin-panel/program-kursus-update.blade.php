@extends('layouts.admin.panel')
@section('title','Program Kursus')
@section('contents')

<div class="row mt-3">
    <div class="col-4">
        <h3>Update</h3>
        <form action="{{ route('admin.program-kursus-update', $programKursus->id) }}" method="POST">
            @csrf
            @method('patch')
            
            <div class="form-group">
            <input type="text" name="nama" value="{{ $programKursus->nama }}" placeholder="nama" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="study-period">Study Period</label>
                <select class="form-control" id="study-period" name="masa_studi">
                    <option {{ $programKursus->masa_studi == 1 ? 'selected' : '' }} value="1">1 Month</option>
                    <option {{ $programKursus->masa_studi == 2 ? 'selected' : '' }} value="2">2 Month</option>
                </select>
            </div>

            <div class="form-group">
                <input type="number" name="harga" placeholder="price" value="{{ $programKursus->harga}}" id="" class="form-control">
            </div>

            <div class="form-group">
                <input type="number" name="kuota" placeholder="quota" value="{{ $programKursus->kuota}}" id="" class="form-control">
            </div>

            <input type="submit" value="update" class="btn mb-2 btn-block btn-info">
            <a class="btn text-white btn-block btn-warning" href="{{ route('admin.program-kursus') }}">kembali</a>
        </form>
    </div>
    <div class="col">
        <h3>List Course Program</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>waktu studi</th>
                    <th>harga</th>
                    <th>kuota</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>{{ $programKursus->nama }}</td>
                    <td>{{ $programKursus->masa_studi }} bulan</td>
                    <td>{{ $programKursus->harga }} jt</td>
                    <td>{{ $programKursus->kuota }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection