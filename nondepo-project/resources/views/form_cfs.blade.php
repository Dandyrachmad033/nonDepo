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
            <div data-aos="fade-left" data-aos-duration="300">
                <div class="container-fluid">
                    <div class="row shadow p-3 mb-5 bg-white justify-content-between w-100">
                        <div class="row w-100 text-center">
                            <div class=" col-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">
                                <a href="{{ route('cfs') }}" class="btn btn-block w-100" style=" cursor: pointer;">
                                    <div class="card border-dark border-2 w-100">
                                        <div class="card-header bg-warning border-dark border-bottom border-2 text-center"
                                            style="">
                                            Form CFS worksheet
                                        </div>
                                        <div class="card-body text-dark">
                                            <h5 class="card-title fw-bold"></h5>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold"
                                                    style="text-align: left; margin-right:10px;margin-right:10px">
                                                    Jo/Order:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold"
                                                    style="text-align: left; margin-right:10px;margin-right:10px">
                                                    Fowarder:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Shipper:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    cargo:
                                                <p class="card-text $data->cargo">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Party:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Start Time:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Finish Time:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Remark
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-dark border-warning " style="color: white"> Isi
                                            Form...>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class=" col-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">
                                <a href="{{ route('cfs_tally') }}" class="btn btn-block w-100" style=" cursor: pointer;">
                                    <div class="card border-dark border-2 w-100">
                                        <div class="card-header bg-warning border-dark border- border-2 text-center"
                                            style="">
                                            Form CFS Tally
                                        </div>
                                        <div class="card-body text-dark">
                                            <h5 class="card-title fw-bold"></h5>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold"
                                                    style="text-align: left; margin-right:10px;margin-right:10px">
                                                    Jo/Order:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold"
                                                    style="text-align: left; margin-right:10px;margin-right:10px">
                                                    Fowarder:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Shipper:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    cargo:
                                                <p class="card-text $data->cargo">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Party:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Start Time:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Finish Time:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Remark
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-dark border-warning " style="color: white"> Isi
                                            Form...>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class=" col-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">
                                <a href="{{ route('cargo_release') }}" class="btn btn-block w-100"
                                    style=" cursor: pointer;">
                                    <div class="card border-dark border-2 w-100">
                                        <div class="card-header bg-warning border-dark border-bottom border-2 text-center"
                                            style="">
                                            Form Cargo Release
                                        </div>
                                        <div class="card-body text-dark">
                                            <h5 class="card-title fw-bold"></h5>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold"
                                                    style="text-align: left; margin-right:10px;margin-right:10px">
                                                    Jo/Order:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold"
                                                    style="text-align: left; margin-right:10px;margin-right:10px">
                                                    Fowarder:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Shipper:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    cargo:
                                                <p class="card-text $data->cargo">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Party:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Start Time:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Finish Time:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Remark
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-dark border-warning " style="color: white"> Isi
                                            Form...>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class=" col-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">
                                <a href="{{ route('cargo_receiving') }}" class="btn btn-block w-100"
                                    style=" cursor: pointer;">
                                    <div class="card border-dark border-2 w-100">
                                        <div class="card-header bg-warning border-dark border-bottom border-2 text-center"
                                            style="">
                                            Form Cargo Receiving
                                        </div>
                                        <div class="card-body text-dark">
                                            <h5 class="card-title fw-bold"></h5>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold"
                                                    style="text-align: left; margin-right:10px;margin-right:10px">
                                                    Jo/Order:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold"
                                                    style="text-align: left; margin-right:10px;margin-right:10px">
                                                    Fowarder:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Shipper:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    cargo:
                                                <p class="card-text $data->cargo">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Party:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Start Time:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Finish Time:
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text fw-bold" style="text-align: left; margin-right:10px">
                                                    Remark
                                                <p class="card-text">..................................</p>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-dark border-warning " style="color: white">Isi
                                            Form....>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @endsection
</body>

</html>
