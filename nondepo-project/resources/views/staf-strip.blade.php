<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MTKI SBY | NonDepo</title>
</head>

<body>
    @extends('layouts.sidebarcopy')
    @section('content')
        <section class="home-section w-100">
            <div class="text w-100" style="font-size: 30px">Staffing & Stripping</div>
            <div class="container-fluid">
                <div class="row shadow p-3 mb-5 bg-white justify-content-between w-100">
                    <div class="row w-100 ">
                        <div class="justify-content-between "
                            style="display: flex; align-items:center; margin-top:-20px; padding-right:50px">
                            <div>
                                <a href="{{ route('cfs') }}">
                                    <button type="button" class="btn btn-success btn-sm">
                                        Formulir CFS
                                    </button>
                                </a>

                            </div>
                            <div>
                                <img src="{{ asset('images/flag-samudera.png') }}" alt="samudera" class="img-fluid"
                                    style="border: none; height:50px; width:250px;">
                            </div>
                        </div>

                    </div>

                    <div class="row w-100 justify-content-center">
                        <div class=" col-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">
                            <a href="{{ route('details') }}" class="btn btn-block w-100" style=" cursor: pointer;">
                                <div class="card border-dark w-100">
                                    <div class="card-header bg-warning border-dark border-bottom text-center"
                                        style="">
                                        NOMOR JOB ORDER
                                    </div>
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">Nama PT</h5>
                                        <p class="card-text" style="text-align: left">Customer: </p>
                                        <p class="card-text" style="text-align: left">Nama PT: </p>
                                        <p class="card-text" style="text-align: left">Source: </p>
                                        <p class="card-text" style="text-align: left">Destination: </p>
                                        <p class="card-text" style="text-align: left">Start Time: </p>
                                        <p class="card-text" style="text-align: left">Finish Time: </p>
                                    </div>
                                    <div class="card-footer bg-dark border-warning " style="color: white">See Details></div>
                                </div>
                            </a>

                        </div>

                        <div class="col-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">

                            <a href="{{ route('details') }}" class="btn btn-block w-100" style=" cursor: pointer;">
                                <div class="card border-dark ">
                                    <div class="card-header bg-warning border-dark border-bottom text-center"
                                        style="">
                                        NOMOR JOB ORDER
                                    </div>
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">Nama PT</h5>
                                        <p class="card-text" style="text-align: left">Customer: </p>
                                        <p class="card-text" style="text-align: left">Nama PT: </p>
                                        <p class="card-text" style="text-align: left">Source: </p>
                                        <p class="card-text" style="text-align: left">Destination: </p>
                                        <p class="card-text" style="text-align: left">Start Time: </p>
                                        <p class="card-text" style="text-align: left">Finish Time: </p>
                                    </div>
                                    <div class="card-footer bg-dark border-warning " style="color: white">See Details></div>
                                </div>
                            </a>
                        </div>

                        <div class="col-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">
                            <a href="{{ route('details') }}" class="btn btn-block w-100" style=" cursor: pointer;">
                                <div class="card border-dark ">
                                    <div class="card-header bg-warning border-dark border-bottom text-center"
                                        style="">
                                        NOMOR JOB ORDER
                                    </div>
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">Nama PT</h5>
                                        <p class="card-text" style="text-align: left">Customer: </p>
                                        <p class="card-text" style="text-align: left">Nama PT: </p>
                                        <p class="card-text" style="text-align: left">Source: </p>
                                        <p class="card-text" style="text-align: left">Destination: </p>
                                        <p class="card-text" style="text-align: left">Start Time: </p>
                                        <p class="card-text" style="text-align: left">Finish Time: </p>
                                    </div>
                                    <div class="card-footer bg-dark border-warning " style="color: white">See Details>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</body>

</html>
