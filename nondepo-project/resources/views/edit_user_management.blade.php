<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MTKI SBY | NonDepo</title>
</head>

<body>
    @extends('layouts.sidebarcopy')
    @section('content')
        <section class="home-section">
            <div class="text" style="font-size: 40px">Edit Module</div>

            <div class="container-fluid">
                <div class="row w-100">
                    <form action="{{ url('/change_password') }}" method="POST">
                        @csrf
                        <div class=" shadow p-3 mb-5 bg-white col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-row">
                                <div class="form-group col-md-6" style="width:400px">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username"
                                        value="{{ $data->username }}">
                                </div>
                                <div class="form-group col-md-6" style="width:400px">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $data->email }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6" style="width:400px">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $data->phone }}">
                                </div>
                                <div class="form-group col-md-6" style="width:400px">
                                    <label>Role</label>
                                    <input type="text" class="form-control" name="role" value="{{ $data->role }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6" style="width:400px">
                                    <label>Change Password</label>
                                    <input type="password"
                                        class="form-control @error('password')
                                        is-invalid
                                    @enderror"
                                        name="password" id="password" style="margin-bottom: 15px">
                                    @error('password')
                                        <div class="alert alert-warning d-flex align-items-center justify-content-center"
                                            role="alert" style="height: 10px; margin-left:10px; margin-bottom:-20px">
                                            <div>
                                                {{ $message }}
                                            </div>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control " name="confirm_password"
                                        id="confirm_password" onblur="checkpassword()">
                                    <div id="password_error">

                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success" id="">Submit</button>
                        </div>
                    </form>
                </div>
        </section>

        <script>
            function checkpassword() {
                const passwordInput = document.getElementById('password');
                const confirmInput = document.getElementById('confirm_password');
                var errorpassword = document.getElementById("password_error");
                const passwordValue = passwordInput.value;
                const confirmValue = confirmInput.value;

                if (passwordValue !== confirmValue) {
                    confirmInput.classList.add("is-invalid");
                    errorpassword.textContent = "Password Tidak Sama";
                }
                // Tambahkan event listener untuk mengecek kesamaan saat input password kehilangan fokus (onblur).


            }
        </script>
    @endsection
</body>

</html>
