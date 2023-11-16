<!DOCTYPE html>
<html lang="en">



<body>
    @extends('layouts.sidebarcopy')
    @section('content')
        <section class="home-section">
            <div class="text" style="font-size: 40px">Details Staffing-Stripping</div>
            <div class="shadow p-3 mb-5 bg-white " style="max-width: 98%">
                <div class="border border-dark border-2">
                    <div class="border-bottom border-dark border-2 text text-center text-center d-flex justify-content-center align-items-center"
                        style="height: 50px">
                        PT Samudera Indonesia
                    </div>
                    <div class="container-fluid m-0 mt-2">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                                {{-- <img src="{{asset('images/flag-samudera.png')}}" alt="" style="width: 80%"> --}}
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 h-100">
                                <div class="row">
                                    <h4>CFS WORKSHEET</h4>
                                </div>
                                <div class="row">
                                    <div class="col col-lg-6 col-md-6 col-sm-12">
                                        <div class="card mb-4">
                                            <div class="card-header bg-danger text-center">
                                                <p class="text-white m-0">ACTIVITY DATE:</p>
                                            </div>
                                            <div class="card-body text-center my-auto p-2">
                                                <p class="fs-5 m-0">2023-12-31</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-6 col-md-6 col-sm-12">
                                        <div class="card mb-4">
                                            <div class="card-header bg-danger text-center">
                                                <p class="text-white m-0">JO/ORDER NO:</p>
                                            </div>
                                            <div class="card-body text-center my-auto p-2">
                                                <p class="fs-5 m-0">202312310001</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-header bg-danger text-center">
                                        <p class="text-white m-0">PRINCIPAL:</p>
                                    </div>
                                    <div class="card-body text-center my-auto p-2">
                                        <p class="fs-5 m-0">WAN HAI</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-header bg-danger text-center">
                                        <p class="text-white m-0">FORWARDER:</p>
                                    </div>
                                    <div class="card-body text-center my-auto p-2">
                                        <p class="fs-5 m-0">WIN COG</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-header bg-danger text-center">
                                        <p class="text-white m-0">SHIPPER:</p>
                                    </div>
                                    <div class="card-body text-center my-auto p-2">
                                        <p class="fs-5 m-0">INSAN B</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-header bg-danger text-center">
                                        <p class="text-white m-0">CARGO:</p>
                                    </div>
                                    <div class="card-body text-center my-auto p-2">
                                        <p class="fs-5 m-0">RUBBER</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-3 col-md-4 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-header bg-danger text-center">
                                        <p class="text-white m-0">PARTY:</p>
                                    </div>
                                    <div class="card-body text-center my-auto p-2">
                                        <p class="fs-5 m-0">8x20'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-4 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-header bg-danger text-center">
                                        <p class="text-white m-0">CLOSSING DATE:</p>
                                    </div>
                                    <div class="card-body text-center my-auto p-2">
                                        <p class="fs-5 m-0">2023-12-31 19:00:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-4 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-header bg-danger text-center">
                                        <p class="text-white m-0">REMARK:</p>
                                    </div>
                                    <div class="card-body text-center my-auto p-2">
                                        <p class="fs-5 m-0">Ini remark</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Add New Container div --}}
                        {{-- <div class="row g-0 rounded-top bg-danger text-white my-auto text-center align-items-center">
                            <div class="col text-start p-3">
                                No: 1
                            </div>
                        </div> --}}
                        <div class="row mb-3 g-0 h-100">
                            <div class="col col-lg-2 col-md-2 col-sm-3 col-3">
                                <div class="card h-100 justify-content-center">
                                    <div class="card-header bg-danger text-center text-white">
                                        No
                                    </div>
                                    <div class="card-body text-center">
                                        1
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-10 col-md-10 col-sm-9 col-9 h-100">
                                <div class="row g-0">
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                                        <div class="row h-100 text-start">
                                            <div class="col-12 m-0 h-100">
                                                <div class="card h-100">
                                                    <div class="card-header bg-danger text-white">
                                                        Stripping
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row p-0 mb-3">
                                                            <div class="col">
                                                                <p class="m-0">CONTAINER NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
                                                            </div>
                                                        </div>
                                                        <div class="row p-0 mb-0">
                                                            <div class="col">
                                                                <p class="m-0">SEAL NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
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
                                                    <div class="card-header bg-danger text-white">
                                                        Stuffing
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row p-0 mb-3">
                                                            <div class="col">
                                                                <p class="m-0">CONTAINER NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
                                                            </div>
                                                        </div>
                                                        <div class="row p-0 mb-0">
                                                            <div class="col">
                                                                <p class="m-0">SEAL NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
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
                        <div class="row mb-3 g-0 h-100">
                            <div class="col col-lg-2 col-md-2 col-sm-3 col-3">
                                <div class="card h-100 justify-content-center">
                                    <div class="card-header bg-danger text-center text-white">
                                        No
                                    </div>
                                    <div class="card-body text-center">
                                        1
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-10 col-md-10 col-sm-9 col-9 h-100">
                                <div class="row g-0">
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                                        <div class="row h-100 text-start">
                                            <div class="col-12 m-0 h-100">
                                                <div class="card h-100">
                                                    <div class="card-header bg-danger text-white">
                                                        Stripping
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row p-0 mb-3">
                                                            <div class="col">
                                                                <p class="m-0">CONTAINER NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
                                                            </div>
                                                        </div>
                                                        <div class="row p-0 mb-0">
                                                            <div class="col">
                                                                <p class="m-0">SEAL NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
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
                                                    <div class="card-header bg-danger text-white">
                                                        Stuffing
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row p-0 mb-3">
                                                            <div class="col">
                                                                <p class="m-0">CONTAINER NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
                                                            </div>
                                                        </div>
                                                        <div class="row p-0 mb-0">
                                                            <div class="col">
                                                                <p class="m-0">SEAL NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
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
                        <div class="row mb-3 g-0 h-100">
                            <div class="col col-lg-2 col-md-2 col-sm-3 col-3">
                                <div class="card h-100 justify-content-center">
                                    <div class="card-header bg-danger text-center text-white">
                                        No
                                    </div>
                                    <div class="card-body text-center">
                                        2
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-10 col-md-10 col-sm-9 col-9 h-100">
                                <div class="row g-0">
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                                        <div class="row h-100 text-start">
                                            <div class="col-12 m-0 h-100">
                                                <div class="card h-100">
                                                    <div class="card-header bg-danger text-white">
                                                        Stripping
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row p-0 mb-3">
                                                            <div class="col">
                                                                <p class="m-0">CONTAINER NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
                                                            </div>
                                                        </div>
                                                        <div class="row p-0 mb-0">
                                                            <div class="col">
                                                                <p class="m-0">SEAL NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
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
                                                    <div class="card-header bg-danger text-white">
                                                        Stuffing
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row p-0 mb-3">
                                                            <div class="col">
                                                                <p class="m-0">CONTAINER NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
                                                            </div>
                                                        </div>
                                                        <div class="row p-0 mb-0">
                                                            <div class="col">
                                                                <p class="m-0">SEAL NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
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
                        <div class="row mb-3 g-0 h-100">
                            <div class="col col-lg-2 col-md-2 col-sm-3 col-3">
                                <div class="card h-100 justify-content-center">
                                    <div class="card-header bg-danger text-center text-white">
                                        No
                                    </div>
                                    <div class="card-body text-center">
                                        3
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-10 col-md-10 col-sm-9 col-9 h-100">
                                <div class="row g-0">
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                                        <div class="row h-100 text-start">
                                            <div class="col-12 m-0 h-100">
                                                <div class="card h-100">
                                                    <div class="card-header bg-danger text-white">
                                                        Stripping
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row p-0 mb-3">
                                                            <div class="col">
                                                                <p class="m-0">CONTAINER NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
                                                            </div>
                                                        </div>
                                                        <div class="row p-0 mb-0">
                                                            <div class="col">
                                                                <p class="m-0">SEAL NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
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
                                                    <div class="card-header bg-danger text-white">
                                                        Stuffing
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row p-0 mb-3">
                                                            <div class="col">
                                                                <p class="m-0">CONTAINER NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
                                                            </div>
                                                        </div>
                                                        <div class="row p-0 mb-0">
                                                            <div class="col">
                                                                <p class="m-0">SEAL NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
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
                        <div class="row mb-3 g-0 h-100">
                            <div class="col col-lg-2 col-md-2 col-sm-3 col-3">
                                <div class="card h-100 justify-content-center">
                                    <div class="card-header bg-danger text-center text-white">
                                        No
                                    </div>
                                    <div class="card-body text-center">
                                        4
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-10 col-md-10 col-sm-9 col-9 h-100">
                                <div class="row g-0">
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                                        <div class="row h-100 text-start">
                                            <div class="col-12 m-0 h-100">
                                                <div class="card h-100">
                                                    <div class="card-header bg-danger text-white">
                                                        Stripping
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row p-0 mb-3">
                                                            <div class="col">
                                                                <p class="m-0">CONTAINER NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
                                                            </div>
                                                        </div>
                                                        <div class="row p-0 mb-0">
                                                            <div class="col">
                                                                <p class="m-0">SEAL NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
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
                                                    <div class="card-header bg-danger text-white">
                                                        Stuffing
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row p-0 mb-3">
                                                            <div class="col">
                                                                <p class="m-0">CONTAINER NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
                                                            </div>
                                                        </div>
                                                        <div class="row p-0 mb-0">
                                                            <div class="col">
                                                                <p class="m-0">SEAL NO:</p>
                                                            </div>
                                                            <div class="col">
                                                                <p class="m-0">MRTU1234567890</p>
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
                        <div class="d-flex justify-content-end position-sticky">
                            <button type="button" class="btn btn-warning position-sticky bottom-0 end mb-3">
                                Resume Pending
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    @endsection
</body>

</html>
