<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https:cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bongkar_data.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>
</head>

<body>
    <div class="container-fluid bg-warning">
        <div class="row justify-content-center">
            <div class="  col col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="shadow p-3 mb-3 mt-3 me-5 ms-5 bg-white" style="border-radius: 10px">

                    <div class="card border border-dark">
                        <div class="card-header text-center bg-dark" style="color: white">
                            User : {{ auth()->user()->username }}
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title" style="font-size: 40px">Pcincipal : {{ $principal }}</h5>
                        </div>
                        <div class="card-footer bg-warning text-muted border-top border-dark text-center">
                            <h6 style="color: black"> Action: {{ $action }}</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <a href="{{ route('bongkar') }}">
                <div class="card-container" style="margin-bottom:30px">
                    <button type="button" class="btn btn-success" style="width:150px" id="send_back"
                        onclick="simpanKeDatabase()">Submit & back</button>
                </div>
            </a>
        </div>
        <div class="row" style="margin-left:25px">
            <div class="col text-center col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="shadow p-3 mb-5 bg-white" style="max-width: 18rem; border-radius: 10px">
                    <div class=" card text-white border border-dark  " style="max-width: 18rem;">
                        <div class="card-header border-bottom border-dark bg-dark text-center">Bongkar 20
                            Feet
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">

                                <h5 style="color: black">[B20] : <span id="b20Value">{{ $dataB20 }} </span> </h5>

                            </h5>
                            <div>
                                @if (auth()->user()->role == 'admin')
                                    <button type="button" class="btn btn-outline-danger" style="margin-right: 40px"
                                        onclick="kurangiNilaib20()">Kurang</button>
                                @endif
                                <button type="button" class="btn btn-outline-success"
                                    onclick="tambahNilaib20()">Tambah</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col text-center col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="shadow p-3 mb-5 bg-white" style="max-width: 18rem;border-radius: 10px">
                    <div class=" card text-white border border-dark " style="max-width: 18rem;">
                        <div class="card-header border-bottom border-dark bg-dark text-center">Bongkar 40
                            Feet
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">

                                <h5 style="color: black">[B40] : <span id="b40Value">{{ $dataB40 }} </span> </h5>

                            </h5>
                            <div>
                                @if (auth()->user()->role == 'admin')
                                    <button type="button" class="btn btn-outline-danger" style="margin-right: 40px"
                                        onclick="kurangiNilaib40()">Kurang
                                    </button>
                                @endif
                                <button type="button" class="btn btn-outline-success"
                                    onclick="tambahNilaib40()">Tambah</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col text-center col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="shadow p-3 mb-5 bg-white" style="max-width: 18rem; border-radius: 10px">
                    <div class="card text-white border border-dark " style="max-width: 18rem;">
                        <div class="card-header border-bottom border-dark bg-dark text-center">Muat 20
                            Feet
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">

                                <h5 style="color: black">[M20] : <span id="m20Value"> {{ $dataM20 }}</span> </h5>

                            </h5>
                            <div>
                                @if (auth()->user()->role == 'admin')
                                    <button type="button" class="btn btn-outline-danger" style="margin-right: 40px"
                                        onclick="kurangiNilaim20()">Kurang
                                    </button>
                                @endif
                                <button type="button" class="btn btn-outline-success"
                                    onclick="tambahNilaim20()">Tambah</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col text-center col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="shadow p-3 mb-5 bg-white" style="max-width: 18rem; border-radius: 10px">
                    <div class="card text-white border border-dark " style="max-width: 18rem; ">
                        <div class="card-header border-bottom border-dark bg-dark text-center">Muat 40
                            Feet
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">

                                <h5 style="color: black">[M40] : <span id="m40Value">{{ $dataM40 }}</span> </h5>

                            </h5>
                            <div>
                                @if (auth()->user()->role == 'admin')
                                    <button type="button" class="btn btn-outline-danger" style="margin-right: 40px"
                                        onclick="kurangiNilaim40()">Kurang
                                    </button>
                                @endif
                                <button type="button" class="btn btn-outline-success"
                                    onclick="tambahNilaim40()">Tambah</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="row" style="margin-left: 25px">
            <div class="col text-center col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="shadow p-3 mb-5 bg-white" style="max-width: 18rem; border-radius: 10px">
                    <div class="card text-white border border-dark " style="max-width: 18rem;">
                        <div class="card-header border-bottom border-dark bg-dark text-center">Shifting 20
                            Feet
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">

                                <h5 style="color: black">[S20] : <span id="s20Value"> {{ $dataS20 }}</span>
                                </h5>

                            </h5>
                            <div>
                                @if (auth()->user()->role == 'admin')
                                    <button type="button" class="btn btn-outline-danger" style="margin-right: 40px"
                                        onclick="kurangiNilais20()">Kurang
                                    </button>
                                @endif
                                <button type="button" class="btn btn-outline-success"
                                    onclick="tambahNilais20()">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-center col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="shadow p-3 mb-5 bg-white" style="max-width: 18rem;border-radius: 10px">

                    <div class="card text-white border border-dark " style="max-width: 18rem;">
                        <div class="card-header border-bottom border-dark bg-dark text-center">Shifting 40
                            Feet
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">

                                <h5 style="color: black">[S40] : <span id="s40Value">{{ $dataS40 }}</span>
                                </h5>

                            </h5>
                            <div>
                                @if (auth()->user()->role == 'admin')
                                    <button type="button" class="btn btn-outline-danger" style="margin-right: 40px"
                                        onclick="kurangiNilais40()">Kurang
                                    </button>
                                @endif
                                <button type="button" class="btn btn-outline-success"
                                    onclick="tambahNilais40()">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-center col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="shadow p-3 mb-5 bg-white" style="max-width:18rem; border-radius: 10px">
                    <div class="card text-white border border-dark " style="max-width: 18rem;">
                        <div class="card-header border-bottom border-dark bg-dark text-center">Repair 20
                            Feet
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">

                                <h5 style="color: black">[R20] : <span id="r20Value"> {{ $dataR20 }}</span>
                                </h5>

                            </h5>
                            <div>
                                @if (auth()->user()->role == 'admin')
                                    <button type="button" class="btn btn-outline-danger" style="margin-right: 40px"
                                        onclick="kurangiNilair20()">Kurang
                                    </button>
                                @endif
                                <button type="button" class="btn btn-outline-success"
                                    onclick="tambahNilair20()">Tambah</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col text-center col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="shadow p-3 mb-5 mt-1 bg-white" style="max-width: 18rem; border-radius: 10px">
                    <div class="card text-white border border-dark " style="max-width: 18rem;">
                        <div class="card-header border-bottom border-dark bg-dark text-center">Repair 40
                            Feet
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">

                                <h5 style="color: black">[R40] : <span id="r40Value">{{ $dataR40 }}</span>
                                </h5>

                            </h5>
                            <div>
                                @if (auth()->user()->role == 'admin')
                                    <button type="button" class="btn btn-outline-danger" style="margin-right: 40px"
                                        onclick="kurangiNilair40()">Kurang
                                    </button>
                                @endif
                                <button type="button" class="btn btn-outline-success"
                                    onclick="tambahNilair40()">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Versi terbaru dari jQuery -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <script>
        function tambahNilaib20() {
            var b20Value = parseInt(document.getElementById('b20Value').textContent);
            b20Value += 1;
            document.getElementById('b20Value').textContent = b20Value;
            b20Ori = b20Value - {{ $dataB20 }};
            datasementara['B20'] = b20Ori;
            console.log(datasementara);
            //simpanKeDatabase(datasementara, 'B20');
        }


        function kurangiNilaib20() {
            var b20Value = parseInt(document.getElementById('b20Value').textContent);
            if (b20Value > 0) {
                b20Value -= 1;
                document.getElementById('b20Value').textContent = b20Value;

                //simpanKeDatabase(b20Value, 'B20');
            }
        }

        function tambahNilaib40() {
            var b40Value = parseInt(document.getElementById('b40Value').textContent);
            b40Value += 1;
            b40Ori = b40Value - {{ $dataB40 }};
            document.getElementById('b40Value').textContent = b40Value;
            datasementara['B40'] = b40Ori;
            //simpanKeDatabase(b40Value, 'B40');
        }


        function kurangiNilaib40() {
            var b40Value = parseInt(document.getElementById('b40Value').textContent);
            if (b40Value > 0) {
                b40Value -= 1;
                document.getElementById('b40Value').textContent = b40Value;

                //simpanKeDatabase(b40Value, 'B40');

            }
        }

        function tambahNilaim20() {
            var m20Value = parseInt(document.getElementById('m20Value').textContent);
            m20Value += 1;
            document.getElementById('m20Value').textContent = m20Value;
            m20Ori = m20Value - {{ $dataM20 }};
            datasementara['M20'] = m20Ori;
            //simpanKeDatabase(m20Value, 'M20');
        }


        function kurangiNilaim20() {
            var m20Value = parseInt(document.getElementById('m20Value').textContent);
            if (m20Value > 0) {
                m20Value -= 1;
                document.getElementById('m20Value').textContent = m20Value;

                //simpanKeDatabase(m20Value, 'M20');

            }
        }

        function tambahNilaim40() {
            var m40Value = parseInt(document.getElementById('m40Value').textContent);
            m40Value += 1;
            document.getElementById('m40Value').textContent = m40Value;
            m40Ori = m40Value - {{ $dataM40 }};
            datasementara['M40'] = m40Ori;
            //simpanKeDatabase(m40Value, 'M40');
        }


        function kurangiNilaim40() {
            var m40Value = parseInt(document.getElementById('m40Value').textContent);
            if (m40Value > 0) {
                m40Value -= 1;
                document.getElementById('m40Value').textContent = m40Value;

                //simpanKeDatabase(m40Value, 'M40');

            }
        }

        function tambahNilais20() {
            var s20Value = parseInt(document.getElementById('s20Value').textContent);
            s20Value += 1;
            document.getElementById('s20Value').textContent = s20Value;
            s20Ori = s20Value - {{ $dataS20 }};
            datasementara['S20'] = s20Ori;
            //simpanKeDatabase(s20Value, 'S20');
        }


        function kurangiNilais20() {
            var s20Value = parseInt(document.getElementById('s20Value').textContent);
            if (s20Value) {
                s20Value -= 1;
                document.getElementById('s20Value').textContent = s20Value;

                //simpanKeDatabase(s20Value, 'S20');

            }
        }

        function tambahNilais40() {
            var s40Value = parseInt(document.getElementById('s40Value').textContent);
            s40Value += 1;
            document.getElementById('s40Value').textContent = s40Value;
            s40Ori = s40Value - {{ $dataS40 }};
            datasementara['S40'] = s40Ori;
            //simpanKeDatabase(s40Value, 'S40');
        }


        function kurangiNilais40() {
            var s40Value = parseInt(document.getElementById('s40Value').textContent);
            if (s40Value > 0) {
                s40Value -= 1;
                document.getElementById('s40Value').textContent = s40Value;

                //simpanKeDatabase(s40Value, 'S40');

            }
        }

        function tambahNilair20() {
            var r20Value = parseInt(document.getElementById('r20Value').textContent);
            r20Value += 1;
            document.getElementById('r20Value').textContent = r20Value;
            r20Ori = r20Value - {{ $dataR20 }};
            datasementara['R20'] = r20Ori;
            //simpanKeDatabase(r20Value, 'R20');
        }


        function kurangiNilair20() {
            var r20Value = parseInt(document.getElementById('r20Value').textContent);
            if (r20Value > 0) {
                r20Value -= 1;
                document.getElementById('r20Value').textContent = r20Value;

                //simpanKeDatabase(r20Value, 'R20');

            }
        }

        function tambahNilair40() {
            var r40Value = parseInt(document.getElementById('r40Value').textContent);
            r40Value += 1;
            document.getElementById('r40Value').textContent = r40Value;
            r40Ori = r40Value - {{ $dataR40 }};
            datasementara['R40'] = r40Ori;

            //simpanKeDatabase(r40Value, 'R40');
        }


        function kurangiNilair40() {
            var r40Value = parseInt(document.getElementById('r40Value').textContent);
            if (r40Value > 0) {
                r40Value -= 1;
                document.getElementById('r40Value').textContent = r40Value;

                //simpanKeDatabase(r40Value, 'R40');
            }
        }

        var datasementara = {

        };

        function simpanKeDatabase() {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route('bongkar_update') }}',
                method: 'POST',
                data: datasementara,
                dataType: 'json',
                success: function(response) {
                    console.log('Nilai berhasil diperbarui ke database');
                    console.log(response);


                },
                error: function(error) {
                    console.error('Gagal memperbarui nilai ke database: ' + error);

                }
            });
        }
    </script>



</body>

</html>
