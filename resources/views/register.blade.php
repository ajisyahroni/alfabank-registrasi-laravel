@extends('layouts.app')
@section('title','Register')
@section('contents')

<!-- ======= register Section ======= -->
<section id="register" class="contact">
    <div class="container">
        <div class="section-title">
            <h2>Register Form</h2>
            <h3>let's fill this<span>form</span></h3>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 mt-5 mt-lg-0">

                <form action="{{route('user.register') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="nama" class="form-control" id="name"
                                placeholder="Masukkan nama lengkap" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" />
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control" name="telepon" id="phone"
                            placeholder="gunakan format 62" />
                    </div>

                    <div class="form-group">
                        <input type="date" class="form-control" name="tanggal_lahir" id="subject"
                            placeholder="Tanggal lahir" />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="alamat" rows="5" placeholder="Alamat lengkap"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="religion">Agama</label>
                        <select class="form-control" id="religion" name="agama">
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            <option value="konghucu">Konghucu</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="program_kursus">Program Kursus</label>
                        <select name="program_kursus" id="program_kursus" class="form-control">
                            @foreach ($program_kursus as $pk)
                            <option value="{{$pk->id }}">{{ $pk->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="password">password</label>
                        <input class="form-control" type="password" name="password" id="password"
                            placeholder="password">
                    </div>


                    <div class="text-center">
                        <a class="mb-4" href="/login">sudah mendaftar, login disini</a>
                        <br>
                        <button class="custom-button mt-2" type="submit">Submit</button>

                    </div>
                </form>
            </div>
</section>
@endsection