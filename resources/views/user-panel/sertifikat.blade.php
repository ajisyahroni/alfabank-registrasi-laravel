@extends('layouts.user.panel')
@section('title','Sertifikat')
@section('contents')
<div >
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; User Panel</span>

    <div class="float-right">
        <span>Aji Syahroni</span>
        <img src="/assets/img/team/team-1.jpg" width="30" height="30" class="rounded-circle" alt="">
    </div>

</div>

  @forelse ($user_info->sertifikats as $sertif)
  <div class="mt-3 text-center" style="background: url('/assets/img/hero-bg.jpg') top center;">
    <section id="certificate">
        <div class="certificate-container">
            <h1>Certificate of Competence</h1>
            <h2>Alfabank proud given to </h2>
            <img 
                width="300" 
                height="300" 
                src="{{ $user_info->image ? '/storage/'.$user_info->image : asset('assets/img/team/team-1.jpg') }}" 
                class="rounded-circle" 
                alt="">
            <h3>{{ $user_info->nama }}</h3>
            <small>{{ $sertif->kode_sertifikat }}</small>
            <h3>great competence at alfabank course</h3>
        </div>
    </section>
  </div>      
  @empty
  <div class="alert alert-danger">anda belum memiliki sertifikat</div>    
  @endforelse

@endsection