<!DOCTYPE html>
<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bongkar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body class="bg-warning">
    <div class="center">
        <div class="flipcard-inner">
            <div class="flipcard-front">
                <div class="container bg-warning border border-5">
                    <div class="text bg-warning">
                        <div>
                            <h5>Hello {{ auth()->user()->username }}</h5>
                        </div>
                        <div>
                            <h5>Action: {{ $action }}</h5>
                        </div>

                        Pilih Principal
                    </div>
                    <form action="{{ url('/bongkar_principal') }}" method="POST" class="text-center" id="submit_data">
                        @csrf
                        <div class="data" style="margin: 30px 0px">
                            <select class="form-select form-select-lg mb-3 border border-dark border-2"
                                style="overflow-y: scroll, height:50x;" name="principal">
                                <option selected></option>
                                <option value="HAPAG">HAPAG</option>
                                <option value="KMTC">KMTC</option>
                                <option value="SSL">SSL</option>
                                <option value="ONE">ONE</option>
                            </select>

                        </div>
                        @error('principal')
                            <div class="alert alert-warning d-flex align-items-center justify-content-center" role="alert"
                                style="height: 10px;margin-left:10px">
                                <div>
                                    {{ $message }}
                                </div>
                            </div>
                        @enderror
                        {{-- <div class="inner"></div> --}}
                        <button type="button" class="btn btn-dark" id="send_data" style="width:100px">Next</button>

                    </form>

                    <form action="{{ url('/logout_bongkar') }}" method="post" id="submit_logout" class="text-center">
                        @csrf
                        <button type="button" class="btn btn-danger" id="send_logout"
                            style="width:100px; margin-top:10px">Logout</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
    {{-- <div>
                @foreach ($data as $data)
                    {{ $data->data }}
                @endforeach
            </div> --}}
    {{-- <form action="{{ url('/bongkar_data') }}" id="submit_data" method="POST">
                @csrf
                <select class="form-select form-select-lg mb-3 border border-dark border-2"
                    style="overflow-y: scroll, height:50x">
                    <option selected>Open this select menu</option>
                    <option value="Hapag">Hapag</option>
                    <option value="Lloyd">Lloyd</option>
                    <option value="KMTC">KMTC</option>
                </select>
                <button type="button" class="btn btn-success" id="send_data" style="width:100px">Next</button>
            </form> --}}
    {{-- <form action="{{ url('/logout_bongkar') }}" method="post" id="submit_logout">
                <button type="button" class="btn btn-danger" id="send_logout"
                    style="width:100px; margin-top:10px">Logout</button>
            </form> --}}

    <script>
        document.getElementById("send_data").addEventListener("click", function() {
            var form1 = document.getElementById("submit_data");
            form1.submit();
        });
    </script>

    <script>
        document.getElementById("send_logout").addEventListener("click", function() {
            var form2 = document.getElementById("submit_logout");
            form2.submit();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
