<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MTKI SBY | NonDepo</title>
</head>

<body>
    @extends('layouts.sidebarcopy')
    @section('content')
        <section class="home-section">
            <div class="text" style="font-size: 30px">Monitoring Reefer</div>
            <div data-aos="fade-left" data-aos-duration="300">
                <div class="table-container shadow p-3 mb-5 bg-white " style="max-width: 98%">
                    @if (auth()->user()->role == 'admin')
                        <div class="justify-content-between " style="display: flex; align-items:center;">
                            <div>
                                <a href="{{ route('not_monitoring') }}">
                                    <button type="button" class="btn btn-danger btn-sm">
                                        Not Monitoring
                                    </button>
                                </a>

                            </div>
                            <div>
                                <img src="{{ asset('images/flag-samudera.png') }}" alt="samudera" class="img-fluid"
                                    style="border: 0px; height:50px; width:250px;">
                            </div>
                        </div>
                    @endif

                    {{-- table Data Monitoring --}}
                    <table class="table table-striped  border-warning " style="width: 100%">
                        <thead>
                            <tr class="bg-warning text-center">
                                <th>No</th>
                                <th>Container No</th>
                                <th>Set Point</th>
                                <th>Supply</th>
                                <th>Return</th>
                                <th>Remark</th>
                                <th>Last Monitor</th>

                                <td> </td>
                            </tr>
                        </thead>


                        <tbody>
                            @php
                                $counter = 1;
                            @endphp
                            @foreach ($data_monitor as $index => $item)
                                @php
                                    // Menghitung shift saat ini berdasarkan waktu saat ini
                                    $currentHour = now()->format('H');
                                    if ($currentHour >= 7 && $currentHour < 15) {
                                        $currentShift = 'shift 1';
                                    } elseif ($currentHour >= 15 && $currentHour < 23) {
                                        $currentShift = 'shift 2';
                                    } else {
                                        $currentShift = 'shift 3';
                                    }
                                @endphp
                                @if ($item->status == 'plugging' and $item->monitor == 'not' and $item->shift == $currentShift)
                                    @php
                                        // Memeriksa apakah tanggal pada waktu pemantauan sama dengan tanggal hari ini (25-09-2023)
                                        $monitoringDate = Carbon\Carbon::parse($item->time_monitoring)->format('Y-m-d');
                                        $currentDate = now()->format('Y-m-d');

                                    @endphp
                                    @if ($monitoringDate == $currentDate)
                                        <tr class="text-center">
                                            <td>{{ $counter }}</td>
                                            <td>{{ $item->no_container }}</td>
                                            <td>{{ $item->set_temp }}</td>
                                            <td>{{ $item->sup_temp }}</td>
                                            <td>{{ $item->ret_temp }}</td>
                                            <td>{{ $item->remark }}</td>
                                            <td class="text-center">{{ $item->time_monitoring }}</td>

                                            <td class="text-center"><button type="button" class="btn btn-success btn-sm"
                                                    data-bs-toggle="modal" data-bs-target="#monitoring_plug"
                                                    data-no-container="{{ $item->no_container }}"
                                                    data-set-temp="{{ $item->set_temp }}"
                                                    data-last-monitor="{{ $item->time_monitoring }}">
                                                    Monitoring
                                                </button></td>
                                        </tr>
                                        @php
                                            $counter++; // Increment nomor urut setelah setiap baris
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    @endsection

    {{-- Modal Form Monitoring --}}
    <div class="modal fade" id="monitoring_plug" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border border-warning">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="exampleModalLabel">Monitoring</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/monitorings') }}" method="POST" id="start_monitor"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="last_monitor" id="modal_last_monitor">
                        <div class="mb-3">
                            <label class="col-form-label">Nomor Container</label>
                            <input type="text" class="form-control border border-1 border-dark"
                                id="modal_no_container" name="no_container" readonly>
                        </div>
                        <div class="row">

                            <div class="mb-3">
                                <label class="col-form-label">Set Point Temperature</label>
                                <input type="text" class="form-control border border-1 border-dark"
                                    id="modal_set_temp" name="set_temp" readonly>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label class="col-form-label">Celcius</label>
                                    <select class="form-select border border-1 border-dark"
                                        aria-label="Default select example" id="cel_two" name="cel_two">
                                        <option value="-">-</option>
                                        <option value="+">+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <label class="col-form-label">Supply Temperature</label>
                                    <input type="text"
                                        class="form-control border border-1 border-dark @error('sup_temp')
                                        is-invalid
                                    @enderror"
                                        onblur="validatesuptemp()" id="sup_temp" name="sup_temp"
                                        value="{{ old('sup_temp') }}">
                                    <div id="suptemp_error">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label class="col-form-label">Celcius</label>
                                    <select class="form-select border border-1 border-dark"
                                        aria-label="Default select example" id="cel_tree" name="cel_tree">
                                        <option value="-">-</option>
                                        <option value="+">+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <label class="col-form-label">Return Temperature</label>
                                    <input type="text"
                                        class="form-control border border-1 border-dark @error('ret_temp')
                                        is-invalid
                                    @enderror"
                                        onblur="validaterettemp()" id="ret_temp" name="ret_temp"
                                        value="{{ old('ret_temp') }}">
                                    <div id="rettemp_error">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label col-form-label">Alarm</label>
                            <input type="text" class="form-control border border-1 border-dark" id="alarm"
                                name="alarm">
                        </div>

                        <div class="mb-3">
                            <label "form-label">Remark</label>
                            <textarea class="form-control border border-1 border-dark" id="remark" name="remark" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label form-label">Photo</label>
                            <input class="form-control border border-1 border-dark" type="file" id="photo"
                                name="photo[]" multiple>
                        </div>

                    </form>
                </div>
                <div class="modal-footer bg-dark d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="camera-button" class="btn btn-warning btn-sm " data-bs-target="#opencamera"
                        data-bs-toggle="modal" data-bs-dismiss="modal">
                        <i class='bx bxs-camera bg-warning' style="font-size: 30px; margin-bottom:0"></i>
                    </button>
                    <button type="submit" class="btn btn-warning" id="send_data">Submit</button>
                </div>
            </div>
        </div>
    </div>
</body>

{{-- Modal open camera form --}}
<div class="modal fade" id="opencamera" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title" id="exampleModalToggleLabel2">Photo Camera</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="x-button"></button>
            </div>
            <div class="modal-body text-center">
                <video width="320" height="240" id="video">

                </video>
            </div>
            <div class="modal-footer bg-dark  d-flex justify-content-between">
                <button id="cancel-button" class="btn btn-warning" data-bs-target="#exampleModal"
                    data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
                <button id="camera-button" class="btn btn-warning btn-sm ">
                    <i class='bx bxs-camera bg-warning' style="font-size: 30px; margin-bottom:0"></i>
                </button>
            </div>
        </div>
    </div>
</div>

{{-- Modal success input data --}}
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body bg-warning">
                Send Data Success!!!
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    // Jika terdapat pesan kesalahan validasi, tampilkan kembali modal
</script>

<script>
    document.getElementById("send_data").addEventListener("click", function() {
        var form1 = document.getElementById("start_monitor");
        form1.submit();
        var successModal = new bootstrap.Modal(document.getElementById("successModal"));
        successModal.show();
    });
</script>

<script>
    $(document).ready(function() {
        $('#monitoring_plug').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var no_container = button.data('no-container');
            var set_temp = button.data('set-temp');
            var last_monitor = button.data('last-monitor');

            var modal = $(this);
            modal.find('#modal_no_container').val(no_container);
            modal.find('#modal_set_temp').val(set_temp);
            modal.find('#modal_last_monitor').val(last_monitor);

        });
    });
</script>
<script>
    @if ($errors->any())
        $(document).ready(function() {
            $('#monitoring_plug').modal('show');
        });
    @endif
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</html>
