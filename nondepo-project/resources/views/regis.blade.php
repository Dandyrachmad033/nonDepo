<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>MTKIcon | Samudera</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="center">
        <div class="container bg-warning" style="width: 800px">
            <div class="text bg-warning">
                <div>
                    <img src="{{ asset('images/samudera.png') }}" alt=""
                        style="max-width: 100px; max-height: 100px;">
                </div>
                Registrasi
            </div>

            <form action="{{ url('/register') }}" method="POST">
                @csrf
                <div class="position">
                    <div class="data">
                        <label>Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="data">
                        <label>WA Number</label>
                        <input type="text" name="phone" id="phone" required>
                    </div>
                </div>

                <div class="position" style="display: flex">
                    <div class="data">
                        <label>Email</label>
                        <input type="text" name="email" required>
                    </div>
                    <div class="data">
                        <label>Password</label>
                        <input type="password" name="password" required>
                    </div>
                </div>

                {{-- <div class="position-file" style="display: flex">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload KTP</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3" style="margin-left: 20px; max-width:400px ">
                        <label for="formFile" class="form-label">Upload Surat Kuasa</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div> --}}
                <div class="col text-center" style="margin-top: 20px">
                    <button type="submit" class="btn btn-dark align-self-center">Registrasi</button>
                </div>
                <div class="signup-link">
                    Have account? <a href="{{ url('/') }}">Login</a>
            </form>
        </div>
    </div>


    </div>
</body>

</html>
