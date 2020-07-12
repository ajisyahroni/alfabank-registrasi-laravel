@extends('layouts.user.panel')
@section('title', 'Pengaturan')
@section('contents')
    
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; User Panel</span>

    <div class="float-right">
        <span>Aji Syahroni</span>
        <img src="assets/img/team/team-1.jpg" width="30" height="30" class="rounded-circle" alt="">
    </div>

    <div class="mt-3">

        <form action="user-login.html" method="POST">
            <div class="form-row">
                <div class="col-md-3 form-group">
                    <div class="form-group">
                        <img class="img-thumbnail" src="assets/img/ava/avatar-02-512.webp" width="200" height="200"
                            id="preview" alt="">
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
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control" name="phone" id="phone"
                            placeholder="phone please using 62" />
                    </div>

                </div>
            </div>



            <div class="form-group">
                <input type="date" class="form-control" name="subject" id="subject" placeholder="Birth Date" />
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Your address"></textarea>
            </div>

            <div class="form-group">
                <label for="religion">Gender</label>
                <select class="form-control" id="religion" name="religion">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="religion">Religion</label>
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
                <a href="user-ganti-password.html" class="btn btn-warning text-white btn-block mt-2"
                    type="button">Ganti password</a>
                <button class="btn btn-danger btn-block mt-2" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection