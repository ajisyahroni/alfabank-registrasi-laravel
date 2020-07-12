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

                <form action="/login" method="POST">
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Masukkan nama lengkap" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" />
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control" name="phone" id="phone"
                            placeholder="gunakan format 62" />
                    </div>

                    <div class="form-group">
                        <input type="date" class="form-control" name="subject" id="subject"
                            placeholder="Tanggal lahir" />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Alamat lengkap"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="religion">Gender</label>
                        <select class="form-control" id="religion" name="religion">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="religion">Agama</label>
                        <select class="form-control" id="religion" name="religion">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
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