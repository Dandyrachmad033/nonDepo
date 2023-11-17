<!DOCTYPE html>
<html lang="en">



<body>
    @extends('layouts.sidebarcopy')
    @section('content')
        <section class="home-section">
            <div class="text" style="font-size: 40px">Details Staffing-Stripping Tally</div>
            <div class="shadow p-3 mb-5 bg-white " style="max-width: 98%">
                <div class="border border-dark border-2">
                    <div class="border-bottom border-dark border-2 text text-center text-center d-flex justify-content-center align-items-center bg-warning"
                        style="height: 50px">
                        PT Samudera Indonesia
                    </div>
                    <div class="container-fluid m-0 mt-2">
                        <form action="{{ route('resume_cfs_tally', ['id' => $data_cfs->id_job_order]) }}" method="get">
                            @csrf
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col col-lg-6 col-md-6 col-sm-12 p-0 m-0 text-center">
                                    <h4>CFS TALLY</h4>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-12 h-100">

                                    <div class="row">
                                        <div class="col col-lg-6 col-md-6 col-sm-12">
                                            <div class="card mb-4 border border-dark">
                                                <div class="card-header bg-dark text-center">
                                                    <p class="text-white m-0">ACTIVITY DATE:</p>
                                                </div>
                                                <div class="card-body text-center my-auto p-2">
                                                    <p class="fs-5 m-0">{{ $data_cfs->activity_date }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-lg-6 col-md-6 col-sm-12">
                                            <div class="card mb-4 border border-dark">
                                                <div class="card-header bg-dark text-center">
                                                    <p class="text-white m-0">JO/ORDER NO:</p>
                                                </div>
                                                <div class="card-body text-center my-auto p-2">
                                                    <p class="fs-5 m-0">{{ $data_cfs->no_order }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="card mb-4 border border-dark">
                                        <div class="card-header bg-dark text-center">
                                            <p class="text-white m-0">PRINCIPAL:</p>
                                        </div>
                                        <div class="card-body text-center my-auto p-2">
                                            <p class="fs-5 m-0">{{ $data_cfs->principal }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="card mb-4 border border-dark">
                                        <div class="card-header bg-dark text-center">
                                            <p class="text-white m-0">FORWARDER:</p>
                                        </div>
                                        <div class="card-body text-center my-auto p-2">
                                            <p class="fs-5 m-0">{{ $data_cfs->forwarder }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="card mb-4 border border-dark">
                                        <div class="card-header bg-dark text-center">
                                            <p class="text-white m-0">CARGO:</p>
                                        </div>
                                        <div class="card-body text-center my-auto p-2">
                                            <p class="fs-5 m-0">{{ $data_cfs->cargo }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-3 col-md-4 col-sm-12 col-12">
                                    <div class="card mb-4 border border-dark">
                                        <div class="card-header bg-dark text-center">
                                            <p class="text-white m-0">PARTY:</p>
                                        </div>
                                        <div class="card-body text-center my-auto p-2">
                                            <p class="fs-5 m-0">{{ $data_cfs->party }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-lg-3 col-md-4 col-sm-12 col-12">
                                    <div class="card mb-4 border border-dark">
                                        <div class="card-header bg-dark text-center">
                                            <p class="text-white m-0">CONTAINER NO(STRIPPING):</p>
                                        </div>
                                        <div class="card-body text-center my-auto p-2">
                                            <p class="fs-5 m-0">{{ $data_cfs->strip_container }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-3 col-md-4 col-sm-12 col-12">
                                    <div class="card mb-4 border border-dark">
                                        <div class="card-header bg-dark text-center">
                                            <p class="text-white m-0">STUFFING CONTAINER NO:</p>
                                        </div>
                                        <div class="card-body text-center my-auto p-2">
                                            <p class="fs-5 m-0">{{ $data_cfs->stuf_container }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-4 col-sm-12 col-12">
                                    <div class="card mb-4 border border-dark">
                                        <div class="card-header bg-dark text-center">
                                            <p class="text-white m-0">QUANTITY:</p>
                                        </div>
                                        <div class="card-body text-center my-auto p-2">
                                            <p class="fs-5 m-0">{{ $data_cfs->quantity }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @php
                                $number = 1;
                            @endphp
                            @foreach ($data_column_tally as $data)
                                <div class="row mb-3 g-0 h-100">
                                    <div class="col col-lg-2 col-md-2 col-sm-3 col-3">
                                        <div class="card h-100 justify-content-center">
                                            <div class="card-header bg-dark text-center text-white">
                                                No
                                            </div>
                                            <div class="card-body text-center border border-dark">
                                                {{ $number }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-10 col-md-10 col-sm-9 col-9 h-100">
                                        <div class="row g-0">
                                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                                                <div class="row h-100 text-start">
                                                    <div class="col-12 m-0 h-100">
                                                        <div class="card h-100">
                                                            <div class="card-header bg-dark text-white">
                                                                DATA
                                                            </div>
                                                            <div class="card-body border border-dark">
                                                                <div class="row p-0 mb-3">
                                                                    <div class="col">
                                                                        <p class="m-0">DESCRIPTION OF GOODS:</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <p class="m-0">{{ $data->desc }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-0 mb-0">
                                                                    <div class="col">
                                                                        <p class="m-0">DIMENSION:</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <p class="m-0">{{ $data->dimension }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                                                <div class="row h-100 text-start">
                                                    <div class="col-12 m-0 h-100">
                                                        <div class="card h-100">
                                                            <div class="card-header bg-dark text-white border border-dark">
                                                                Data
                                                            </div>
                                                            <div class="card-body border border-dark">
                                                                <div class="row p-0 mb-3">
                                                                    <div class="col">
                                                                        <p class="m-0">UNIT:</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <p class="m-0">{{ $data->unit }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-0 mb-0">
                                                                    <div class="col">
                                                                        <p class="m-0">JUMLAH:</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <p class="m-0">{{ $data->value }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $number += 1;
                                @endphp
                            @endforeach

                            <div class="d-flex justify-content-end position-sticky">
                                <button type="submit" class="btn btn-warning position-sticky bottom-0 end mb-3">
                                    Resume Pending
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
    @endsection
</body>

</html>
