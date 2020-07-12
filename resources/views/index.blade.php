@extends('layouts.app')
@section('title','Landing Page')
@section('contents')
    @include('layouts.nav')
    {{-- content utama --}}
    @include('components.hero')
    @include('components.about')
    @include('components.services')
    @include('components.register')
    @include('components.portfolio')
    @include('components.harga')
    @include('components.faq')
    @include('components.team')
    @include('components.contact')

    @include('layouts.footer')
@endsection