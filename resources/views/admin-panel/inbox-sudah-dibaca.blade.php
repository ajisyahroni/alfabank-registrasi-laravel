@extends('layouts.admin.panel')
@section('title','Inbox')
@section('contents')
<div class="mt-3">
    <ul class="nav nav-tabs mb-5">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.inbox') }}">Inbox masuk <span class="badge badge-pill badge-danger">5</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="admin-inbox-sudah-dibaca.html">Sudah dibaca</a>
        </li>
    </ul>

    <div class="card">
        <div class="media p-3">
            <img class="rounded-circle" width="70" height="70" class="mr-1" src="assets/img/ava/avatar-02-512.webp"
                alt="Generic placeholder image">
            <div class="media-body pl-2">
                <h5 class="my-0">Aji Syahroni</h5>
                <i>ajisyahroni@gmail.com</i> | 5 july
                <h5 class="my-0"><span class="badge badge-pill badge-info">cooperation</span></h5>

                <p class="mt-2">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                    sollicitudin. Cras
                    purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                    nisi
                    vulputate fringilla. Donec lacinia congue felis in faucibus.</p>

                <a href="#" class="btn btn-sm btn-outline-danger float-right">hapus</a>
            </div>
        </div>
    </div>
</div>
@endsection