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
                        <input type="hidden" name="principal" id="dropdownMenuLink" value="">
                        <div class="dropdown">
                            <a class="btn btn-outline-success bg-white" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" id="valuelink" style="font-size: 25px;color:black">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" onclick="updateButton('KMTC')">KMTC</a>
                                </li>
                                <li><a class="dropdown-item" onclick="updateButton('SSL')"">SSL</a></li>
                                <li><a class="dropdown-item" onclick="updateButton('HAPAG')">HAPAG</a></li>
                                <li><a class="dropdown-item" onclick="updateButton('WANHAI')">WANHAI</a></li>
                                <li><a class="dropdown-item" onclick="updateButton('ONE')">ONE</a></li>
                                <li><a class="dropdown-item" onclick="updateButton('TRANSHUB')">TRANSHUB</a></li>
                                <li><a class="dropdown-item" onclick="updateButton('MAXICON')">MAXICON</a></li>
                                <li><a class="dropdown-item" onclick="updateButton('TCL')">TCL</a></li>
                                <li><a class="dropdown-item" onclick="updateButton('OCEANUS')">OCEANUS</a></li>
                                <li><a class="dropdown-item" onclick="updateButton('CEEKAY')">CEEKAY</a></li>
                                <li><a class="dropdown-item" onclick="updateButton('GREEN GLOBAL')">GREEN GLOBAL</a>
                                </li>
                                <li><a class="dropdown-item" onclick="updateButton('METRO')">METRO</a></li>
                                <li><a class="dropdown-item" onclick="updateButton('LKA')">LKA</a></li>
                                <li><a class="dropdown-item" onclick="updateButton('CCIS')">CCIS</a></li>
                            </ul>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/bongkar/button_submit.js') }}"></script>
</body>

</html>
