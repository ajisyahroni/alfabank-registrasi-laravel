@extends('layouts.app')
@section('title','Login')
@section('contents')
<!-- ======= register Section ======= -->
<section id="login" class="contact">
    <div class="container">
        <div class="section-title">
            <h2>Login Form</h2>
            <h3>let's fill this<span>form</span></h3>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 mt-5 mt-lg-0">
            <form action="{{ route('user.login') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" />
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Password" />
                    </div>

                    <div class="text-center">
                        <a class="mb-4" href="/register">belum punya akun, register disini</a>
                        <br>
                        <button class="custom-button mt-2" type="submit">Login</button>
                    </div>
                </form>
            </div>
</section>
@endsection