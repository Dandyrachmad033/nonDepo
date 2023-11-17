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
                                <a href="{{ route('cfs') }}" style="display: inline-block; ">
                                    <button type="button" class="btn btn-warning btn-sm m-2">
                                        CFS Worksheet
                                    </button>
                                </a>

                                <a href="{{ route('cfs_tally') }}" style="display: inline-block; ">
                                    <button type="button" class="btn btn-warning btn-sm m-2">
                                        CFS Tally
                                    </button>
                                </a>

                                <a href="{{ route('cargo_release') }}" style="display: inline-block; ">
                                    <button type="button" class="btn btn-warning btn-sm m-2">
                                        Cargo Release
                                    </button>
                                </a>

                                <a href="{{ route('cargo_receiving') }}" style="display: inline-block; ">
                                    <button type="button" class="btn btn-warning btn-sm m-2" style="width: 140px">
                                        Cargo Receiving
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
                        @foreach ($cfs as $data)
                            @if ($data->form_type == 'CFS Worksheet')
                                <div class=" col-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">
                                    <a href="{{ route('details', ['id' => $data->id_job_order]) }}"
                                        class="btn btn-block w-100" style=" cursor: pointer;">
                                        <div class="card border-dark w-100">
                                            <div class="card-header bg-warning border-dark border-bottom text-center"
                                                style="">
                                                {{ $data->form_type }}
                                            </div>
                                            <div class="card-body text-dark">
                                                <h5 class="card-title fw-bold">{{ $data->principal }}</h5>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px;margin-right:10px">
                                                        Jo/Order:
                                                    <p class="card-text"> {{ $data->no_order }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px;margin-right:10px">
                                                        Fowarder:
                                                    <p class="card-text"> {{ $data->forwarder }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        Shipper:
                                                    <p class="card-text"> {{ $data->shipper }} </p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        cargo:
                                                    <p class="card-text">{{ $data->cargo }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        Party:
                                                    <p class="card-text">{{ $data->party }} </p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        Start Time:
                                                    <p class="card-text">{{ $data->activity_date }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        Finish Time:
                                                    <p class="card-text">{{ $data->clossing_date }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        Remark
                                                    <p class="card-text">{{ $data->remark }}</p>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-dark border-warning " style="color: white">See
                                                Details>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                            @if ($data->form_type == 'CFS Tally')
                                <div class=" col-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">
                                    <a href="{{ route('details_tally', ['id' => $data->id_job_order]) }}"
                                        class="btn btn-block w-100" style=" cursor: pointer;">
                                        <div class="card border-dark w-100">
                                            <div class="card-header bg-warning border-dark border-bottom text-center"
                                                style="">
                                                {{ $data->form_type }}
                                            </div>
                                            <div class="card-body text-dark">
                                                <h5 class="card-title fw-bold">{{ $data->principal }}</h5>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px;margin-right:10px">
                                                        Jo/Order No:
                                                    <p class="card-text"> {{ $data->no_order }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px;margin-right:10px">
                                                        Fowarder:
                                                    <p class="card-text"> {{ $data->forwarder }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        cargo:
                                                    <p class="card-text">{{ $data->cargo }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        Party:
                                                    <p class="card-text">{{ $data->party }} </p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        Start Time:
                                                    <p class="card-text">{{ $data->activity_date }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        STUFFING CONTAINER NO:
                                                    <p class="card-text">{{ $data->strip_container }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        CONTAINER NO(STRIPPING):
                                                    <p class="card-text">{{ $data->stuf_container }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        Quantity:
                                                    <p class="card-text">{{ $data->quantity }}</p>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-dark border-warning " style="color: white">See
                                                Details>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                            @if ($data->form_type == 'Cargo Release')
                                <div class=" col-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">
                                    <a href="{{ route('details_tally', ['id' => $data->id_job_order]) }}"
                                        class="btn btn-block w-100" style=" cursor: pointer;">
                                        <div class="card border-dark w-100" style="height: 338px">
                                            <div class="card-header bg-warning border-dark border-bottom text-center"
                                                style="">
                                                {{ $data->form_type }}
                                            </div>
                                            <div class="card-body text-dark">
                                                <h5 class="card-title fw-bold">{{ $data->principal }}</h5>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px;margin-right:10px">
                                                        Jo/Order No:
                                                    <p class="card-text"> {{ $data->no_order }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        VEHICLE TYPE:
                                                    <p class="card-text">{{ $data->veh_type }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        VEHICLE ID:
                                                    <p class="card-text">{{ $data->veh_id }} </p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        CONTAINER ACTIVITY TYPE :
                                                    <p class="card-text">{{ $data->con_act }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        Remark:
                                                    <p class="card-text">{{ $data->remark }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        Activity Date:
                                                    <p class="card-text">{{ $data->activity_date }}</p>
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="card-footer bg-dark border-warning " style="color: white">See
                                                Details>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                            @if ($data->form_type == 'Cargo Receiving')
                                <div class=" col-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">
                                    <a href="{{ route('details_tally', ['id' => $data->id_job_order]) }}"
                                        class="btn btn-block w-100" style=" cursor: pointer;">
                                        <div class="card border-dark w-100" style="height: 338px">
                                            <div class="card-header bg-warning border-dark border-bottom text-center"
                                                style="">
                                                {{ $data->form_type }}
                                            </div>
                                            <div class="card-body text-dark">
                                                <h5 class="card-title fw-bold">{{ $data->principal }}</h5>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px;margin-right:10px">
                                                        Jo/Order No:
                                                    <p class="card-text"> {{ $data->no_order }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        VEHICLE TYPE:
                                                    <p class="card-text">{{ $data->veh_type }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        VEHICLE ID:
                                                    <p class="card-text">{{ $data->veh_id }} </p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        CONTAINER ACTIVITY TYPE :
                                                    <p class="card-text">{{ $data->con_act }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        Remark:
                                                    <p class="card-text">{{ $data->remark }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        STRIPPING TYPE:
                                                    <p class="card-text">{{ $data->strip_type }}</p>
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="card-text fw-bold"
                                                        style="text-align: left; margin-right:10px">
                                                        Activity Date:
                                                    <p class="card-text">{{ $data->activity_date }}</p>
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="card-footer bg-dark border-warning " style="color: white">See
                                                Details>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
    @endsection
</body>

</html>
