<!DOCTYPE html>
<html lang="en">



<body>
    @extends('layouts.sidebarcopy')
    @section('content')
        <section class="home-section">
            <div class="text" style="font-size: 40px">Details Staffing-Stripping</div>
            <div class="shadow p-3 mb-5 bg-white " style="max-width: 98%">
                <div class="border border-dark border-2">
                    <div class="border-bottom border-dark border-2 text text-center text-center d-flex justify-content-center align-items-center bg-warning"
                        style="height: 50px">
                        PT Samudera Indonesia
                    </div>
                    <div class="container-fluid m-0 mt-2">
                        <form action="{{ route('resume_cfs', ['id' => $data_cfs->id_job_order]) }}" method="get">
                            @csrf

                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col col-lg-6 col-md-6 col-sm-12 p-0 m-0 text-center">
                                    <h4>CFS WORKSHEET</h4>
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
                                            <p class="text-white m-0">SHIPPER:</p>
                                        </div>
                                        <div class="card-body text-center my-auto p-2">
                                            <p class="fs-5 m-0">{{ $data_cfs->shipper }}</p>
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
                            </div>
                            <div class="row">
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
                                <div class="col col-lg-3 col-md-4 col-sm-12 col-12">
                                    <div class="card mb-4 border border-dark">
                                        <div class="card-header bg-dark text-center">
                                            <p class="text-white m-0">CLOSSING DATE:</p>
                                        </div>
                                        <div class="card-body text-center my-auto p-2">
                                            <p class="fs-5 m-0">{{ $data_cfs->clossing_date }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-4 col-sm-12 col-12">
                                    <div class="card mb-4 border border-dark">
                                        <div class="card-header bg-dark text-center">
                                            <p class="text-white m-0">REMARK:</p>
                                        </div>
                                        <div class="card-body text-center my-auto p-2">
                                            <p class="fs-5 m-0">{{ $data_cfs->remark }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @php
                                $number = 1;
                            @endphp
                            @foreach ($data_column as $data)
                                <div class="row mb-3 g-0 h-100">
                                    <div class="col col-lg-2 col-md-2 col-sm-3 col-3">
                                        <div class="card h-100 justify-content-center">
                                            <div class="card-header bg-warning text-center  border border-dark">
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
                                                            <div
                                                                class="card-header bg-warning text-center border border-dark">
                                                                Stripping
                                                            </div>
                                                            <div class="card-body border border-dark">
                                                                <div class="row p-0 mb-3">
                                                                    <div class="col">
                                                                        <p class="m-0">CONTAINER NO:</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <p class="m-0">{{ $data->strip_container_no }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-0 mb-0">
                                                                    <div class="col">
                                                                        <p class="m-0">SEAL NO:</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <p class="m-0">{{ $data->strip_seal_no }}</p>
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
                                                            <div
                                                                class="card-header bg-warning text-center border border-dark">
                                                                Stuffing
                                                            </div>
                                                            <div class="card-body border border-dark">
                                                                <div class="row p-0 mb-3">
                                                                    <div class="col">
                                                                        <p class="m-0">CONTAINER NO:</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <p class="m-0">{{ $data->stuf_container_no }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-0 mb-0">
                                                                    <div class="col">
                                                                        <p class="m-0">SEAL NO:</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <p class="m-0">{{ $data->stuf_seal_no }}</p>
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

                            @if ($data_cfs->finish_status == 'Pending')
                                <div class="d-flex justify-content-end position-sticky">
                                    <button type="submit" class="btn btn-warning position-sticky bottom-0 end mb-3">
                                        Resume Pending
                                    </button>
                                </div>
                            @endif
                        </form>
                    </div>

                </div>

            </div>
        </section>
    @endsection
</body>

</html>
