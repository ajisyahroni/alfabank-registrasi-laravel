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
            <tr>
                <th>1</th>
                <td>Mark</td>
                <td>Otto@gmail</td>
                <td>Jogja</td>
                <td>Computer science</td>
                <td>masa studi</td>
                <td>
                    <button class="btn btn-sm btn-info">lulus</button>
                </td>
            </tr>
        </tbody>
    </table>

    <nav class="mt-5">
        <ul class="pagination pagination-lg">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
    </nav>
</div>
@endsection