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
                    <div class="d-flex row shadow p-3 mb-5 bg-white justify-content-center w-100">
                        <div class="row w-100 ">
                            <div class="justify-content-between"
                                style="display: flex; align-items:center; margin-top:-20px; padding-right:50px">
                                <div class="text fw-bold" style="font-size: 30px">
                                    Finished Order
                                </div>
                                <div>
                                    <img src="{{ asset('images/flag-samudera.png') }}" alt="samudera" class="img-fluid"
                                        style="border: none; height:50px; width:250px;">
                                </div>
                            </div>

                        </div>
                        <div class="row w-100 justify-content-center">
                            @foreach ($cfs as $data)
                                @if ($data->form_type == 'CFS Worksheet' and $data->finish_status == 'Finished')
                                    <div class=" col-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">
                                        <a href="{{ route('details', ['id' => $data->id_job_order]) }}"
                                            class="btn btn-block w-100" style=" cursor: pointer;">
                                            <div class="card border-dark border-2 w-100 shadow">
                                                <div class="card-header bg-warning border-dark border-bottom border-2 text-center"
                                                    style="">
                                                    {{ $data->form_type }}
                                                </div>
                                                <div class="card-body text-dark">
                                                    <h5 class="card-title fw-bold">{{ $data->principal }}</h5>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px;margin-right:10px">
                                                                JO/ORDER:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center"> {{ $data->no_order }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px;margin-right:10px">
                                                                FORWARDER:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center"> {{ $data->forwarder }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                SHIPPER:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center"> {{ $data->shipper }} </p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                CARGO:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->cargo }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                PARTY:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->party }} </p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                START TIME:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->activity_date }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                CLOSSING TIME:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->clossing_date }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                REMARK:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->remark }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                STATUS ORDER:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->finish_status }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                FINISH TIME:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->finish_time }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-dark border-warning " style="color: white">See
                                                    Details>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                                @if ($data->form_type == 'CFS Tally' and $data->finish_status == 'Finished')
                                    <div class=" col-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">
                                        <a href="{{ route('details_tally', ['id' => $data->id_job_order]) }}"
                                            class="btn btn-block w-100" style=" cursor: pointer;">
                                            <div class="card border-dark w-100 border-2 shadow">
                                                <div class="card-header bg-warning border-dark border-bottom border-2 text-center"
                                                    style="">
                                                    {{ $data->form_type }}
                                                </div>
                                                <div class="card-body text-dark">
                                                    <h5 class="card-title fw-bold">{{ $data->principal }}</h5>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px;margin-right:10px">
                                                                JO/ORDER NO:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center"> {{ $data->no_order }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px;margin-right:10px">
                                                                FORWARDER:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center"> {{ $data->forwarder }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                CARGO:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->cargo }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                PARTY:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->party }} </p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                START TIME:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->activity_date }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                STUFFING CONTAINER NO:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->strip_container }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                CONTAINER NO(STRIPPING):
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->stuf_container }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                QUANTITY:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->quantity }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                STATUS ORDER:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->finish_status }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row  border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                FINISH TIME:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->finish_time }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-dark border-warning " style="color: white">See
                                                    Details>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                                @if ($data->form_type == 'Cargo Release' and $data->finish_status == 'Finished')
                                    <div class=" col-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">
                                        <a href="{{ route('details_release', ['id' => $data->id_job_order]) }}"
                                            class="btn btn-block w-100" style=" cursor: pointer;">
                                            <div class="card border-dark border-2 w-100 shadow">
                                                <div class="card-header bg-warning border-dark border-bottom border-2 text-center"
                                                    style="">
                                                    {{ $data->form_type }}
                                                </div>
                                                <div class="card-body text-dark">
                                                    <h5 class="card-title fw-bold">{{ $data->principal }}</h5>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px;margin-right:10px">
                                                                JO/ORDER NO:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center"> {{ $data->no_order }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                VEHICLE TYPE:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->veh_type }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                VEHICLE ID:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->veh_id }} </p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                CONTAINER ACTIVITY TYPE :
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->con_act }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                CONTAINER NO/SIZE:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->con_size }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                REMARK:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->remark }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                ACTIVITY DATE:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->activity_date }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                STATUS ORDER:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->finish_status }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row  border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                FINISH TIME:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->finish_time }}
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="card-footer bg-dark border-warning " style="color: white">See
                                                    Details>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                                @if ($data->form_type == 'Cargo Receiving' and $data->finish_status == 'Finished')
                                    <div class=" col-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">
                                        <a href="{{ route('details_receiving', ['id' => $data->id_job_order]) }}"
                                            class="btn btn-block w-100" style=" cursor: pointer;">
                                            <div class="card border-dark w-100 shadow">
                                                <div class="card-header bg-warning border-dark border-bottom border-2 text-center"
                                                    style="">
                                                    {{ $data->form_type }}
                                                </div>
                                                <div class="card-body text-dark border-2 ">
                                                    <h5 class="card-title fw-bold">{{ $data->principal }}</h5>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px;margin-right:10px">
                                                                JO/ORDER NO:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center"> {{ $data->no_order }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                VEHICLE TYPE:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->veh_type }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                VEHICLE ID:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->veh_id }} </p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                CONTAINER ACTIVITY TYPE :
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->con_act }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                REMARK:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->remark }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                STRIPPING TYPE:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->strip_type }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                CONTAINER NO/SIZE:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->con_size }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                ACTIVITY DATE:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->activity_date }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                STATUS ORDER:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->finish_status }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row  border-dark mb-2">
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text fw-bold"
                                                                style="text-align: left; margin-right:10px">
                                                                FINISH TIME:
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                                                            <p class="card-text text-center">{{ $data->finish_time }}
                                                            </p>
                                                        </div>
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
            </div>
        </section>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @endsection
</body>

</html>
