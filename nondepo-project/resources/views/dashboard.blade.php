<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MTKI SBY | NonDepo</title>
</head>

<body>
    @extends('layouts.sidebarcopy')
    @section('content')
        <section class="home-section">
            <div class="text" style="font-size: 40px">Dashboard</div>
            <div data-aos="fade-down" data-aos-duration="300">
                <div class="row">

                    <div class=" shadow p-3 mb-5 bg-white wrapper-container col-lg-4 col-md-6 col-sm-12 mb-4"
                        style="max-width: 320px; margin-left:20px; border-radius:10px; max-height:220px">
                        <div class="card text-white bg-danger "
                            style="width: 18rem; margin-right: 50px;overflow: hidden; max-height: 14rem">
                            <div class="card-header text-center">Plugging</div>
                            <div class="card-body bg-white text-center">
                                <h5 class="card-title color-text" style="font-weight: bold;">{{ $db_plug }}
                                </h5>
                                <h5 class="card-title color-text" style="font-size: 15px">Sedang Berjalan</h5>
                                <br>
                                <button type="button" class="btn btn-danger btn-sm " style="width:70px; border-radius:30px"
                                    onclick="window.location.href='{{ route('reefer_plugging') }}'"> Visit</button>
                            </div>
                        </div>
                    </div>

                    <div class=" shadow p-3 mb-5 bg-white wrapper-container col-lg-4 col-md-6 col-sm-12 mb-4"
                        style="max-width: 320px; margin-left:20px; border-radius:10px; max-height:220px">

                        <div class="card text-white bg-warning mb-3"
                            style="width: 18rem; margin-right: 50px; overflow: hidden; max-height: 14rem">
                            <div class="card-header text-center">Monitoring</div>
                            <div class="card-body bg-white text-center">
                                <h5 class="card-title color-text" style="font-weight: bold;">{{ $db_monitor }}
                                </h5>
                                <h5 class="card-title color-text" style="font-size: 15px">Belum Dimonitor</h5>
                                <br>
                                <button type="button" class="btn btn-warning btn-sm "
                                    style="width:70px; border-radius:30px"
                                    onclick="window.location.href='{{ route('monitoring') }}'">visit</button>
                            </div>
                        </div>
                    </div>

                    <div class=" shadow p-3 mb-5 bg-white wrapper-container col-lg-4 col-md-6 col-sm-12 mb-4"
                        style="max-width: 320px; margin-left:20px; border-radius:10px; max-height:220px">

                        <div class="card text-white bg-info mb-3"
                            style="width: 18rem; overflow: hidden; max-height: 14rem;">
                            <div class="card-header text-center">PTI</div>
                            <div class="card-body bg-white text-center">
                                <h5 class="card-title color-text" style="font-weight: bold;"> 30
                                </h5>
                                <h5 class="card-title color-text" style="font-size: 15px">Sedang Berjalan</h5>
                                <br>
                                <button type="button" class="btn btn-info btn-sm " style="width:70px; border-radius:30px"
                                    onclick="window.location.href='{{ route('pti') }}'">visit</button>
                            </div>
                        </div>
                    </div>
                </div>


        </section>
    @endsection

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>
