<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>MTKIcon | Samudera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body>
    <div>

    </div>
    <div class="center">
        <div class="flipcard-inner">
            <div class="flipcard-front">
                <div class="container bg-warning border border-5">
                    <div class="text bg-warning">
                        <div>
                            <img src="{{ asset('images/samudera.png') }}" alt=""
                                style="max-width: 100px; max-height: 100px;">
                        </div>
                        NonDepo
                    </div>
                    <form action="{{ url('/login') }}" method="POST">
                        @csrf
                        <div class="data" style="margin: 25px 0px">
                            <label>Username</label>
                            <input type="text" name="username" id="username" value="{{ old('username') }}"
                                autofocus>
                        </div>
                        @error('username')
                            <div class="alert alert-warning d-flex align-items-center justify-content-center" role="alert"
                                style="height: 10px; margin-left:10px; margin-bottom:-20px">
                                <div>
                                    {{ $message }}
                                </div>
                            </div>
                        @enderror
                        <div class="data" style="margin: 25px 0px">
                            <label>Password</label>
                            <input type="password" name="password" id="password">
                        </div>
                        @error('password')
                            <div class="alert alert-warning d-flex align-items-center justify-content-center" role="alert"
                                style="height: 10px;margin-left:10px">
                                <div>
                                    {{ $message }}
                                </div>
                            </div>
                        @enderror
                        <div class="data" style="margin: 30px 0px">
                            <label>ECH (Opsional)</label>
                            <select class="form-select" aria-label="Default select example" name="actions">
                                <option selected></option>
                                <option value="K28">K28</option>
                                <option value="K35">K35</option>
                                <option value="K41">K41</option>
                                <option value="C45">C45</option>
                                <option value="F49">F49</option>
                            </select>

                        </div>
                        <div class="forgot-pass">
                            <a href="#" style="color: black">Forgot Password?</a>
                        </div>


                        <div class="btn">
                            {{-- <div class="inner"></div> --}}
                            <button type="submit">login</button>
                        </div>
                        @if (session('error'))
                            <div class="alert alert-danger d-flex align-items-center justify-content-center"
                                role="alert" style="height: 10px;margin-left:10px">
                                <div>
                                    {{ session('error') }}
                                </div>
                            </div>
                        @endif
                        <div class="col text-center" style="margin-top: -20px">
                            <button type="button" class="btn btn-primary w-50 align-self-center" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">View User
                                Login</button>
                        </div>

                        <div class="signup-link">
                            Not a member? <a href="{{ url('/regis') }}" style="color: black">Signup now</a>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-center">
                <div class="modal-header text-center bg-warning">
                    <h5 class="modal-title" id="exampleModalLabel">User Login Active</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped border-warning" style="width: 100%">
                        <thead>
                            <tr class="bg-warning text-center">
                                <th>User</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user_login as $item)
                                @if ($item->role != 'admin' and $item->status == 'login')
                                    <tr class="text-center">
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->action }}</td>

                                    </tr>
                                @endif
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


</body>

</html>
