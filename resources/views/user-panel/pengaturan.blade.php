@extends('layouts.user.panel')
@section('title', 'Pengaturan')
@section('contents')

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; User Panel</span>

<div class="float-right">
    <span>Aji Syahroni</span>
    <img src="{{ asset('/assets/img/team/team-1.jpg') }}" width="30" height="30" class="rounded-circle" alt="">
</div>

<div class="mt-3">

    <form action="{{ route('user.pengaturan-update', $user_info->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="form-row">
            <div class="col-md-3 form-group">
                <div class="form-group">
                    <img class="img-thumbnail" src="{{ asset('assets/img/ava/avatar-02-512.webp') }}" width="200"
                        height="200" id="preview" alt="">
                    <input type="file" class="form-control-file" id="fotoUploader" name="foto_item">
                    <script>
                        var foto = document.getElementById("fotoUploader")
                        var preview = document.getElementById("preview")
                        foto.onchange = function (evt) {
                            var reader = new FileReader()
                            var file = evt.target.files[0]
                            reader.onload = function () {
                                preview.src = reader.result
                                preview.width = "200"
                                preview.height = "200"
                            }
                            reader.readAsDataURL(file)
                        }
                    </script>
                </div>
            </div>
            <div class="col-md-9 form-group">
                <div class="form-group">
                    <input value="{{ $user_info->email }}" type="email" class="form-control" name="email" id="email"
                        placeholder="Your Email" />
                </div>
                <div class="form-group">
                    <input value="{{ $user_info->nama }}" type="text" name="nama" class="form-control" id="name"
                        placeholder="Your Name" />
                </div>

                <div class="form-group">
                    <input value="{{ $user_info->telepon }}" type="number" class="form-control" name="telepon"
                        id="phone" placeholder="phone please using 62" />
                </div>

            </div>
        </div>



        <div class="form-group">
            <input value="{{ $user_info->tanggal_lahir }}" type="date" class="form-control" name="tanggal_lahir"
                id="tanggal_lahir" placeholder="Birth Date" />
        </div>
        <div class="form-group">
            <textarea class="form-control" name="alamat" rows="5" placeholder="Your address">
                    {{ $user_info->alamat }}
                </textarea>
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" id="gender" name="gender">
                <option {{ $user_info->gender == 'L' ? 'selected' : '' }} value="L">Laki-laki
                </option>
                <option {{ $user_info->gender == 'P' ? 'selected' : '' }} value="P">Perempuan
                </option>
            </select>
        </div>

        <div class="form-group">
            <label for="religion">Religion</label>
            <select class="form-control" id="religion" name="agama">
                <option {{ $user_info->agama == 'islam' ? 'selected' : '' }} value="islam">Islam</option>
                <option {{ $user_info->agama == 'kristen' ? 'selected' : '' }} value="kristen">Kristen</option>
                <option {{ $user_info->agama == 'katolik' ? 'selected' : '' }} value="katolik">Katolik</option>
                <option {{ $user_info->agama == 'hindu' ? 'selected' : '' }} value="hindu">Hindu</option>
                <option {{ $user_info->agama == 'budha' ? 'selected' : '' }} value="budha">Budha</option>
                <option {{ $user_info->agama == 'konghucu' ? 'selected' : '' }} value="konghucu">Konghucu</option>
            </select>
        </div>


        <div class="text-center">
            <a href="{{ route('user.pengaturan-ganti-password') }}" class="btn btn-warning text-white btn-block mt-2"
                type="button">Ganti
                password</a>
            <button class="btn btn-danger btn-block mt-2" type="submit">Update</button>
        </div>
    </form>
</div>
@endsection