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
            <div class="text" style="font-size: 30px">HISTORY PLUGGING</div>
            <div data-aos="fade-left" data-aos-duration="300">
                <div class="table-container shadow p-3 mb-5 bg-white " style="max-width: 98%">
                    <div class="justify-content-between " style="display: flex; align-items:center;">
                        <a href="{{ route('history') }}">
                            <button type="button" class="btn btn-secondary btn-sm">
                                back
                            </button>
                        </a>
                        <div class="images-logos">
                            <img src="{{ asset('images/flag-samudera.png') }}" alt="samudera" class="img-fluid"
                                style="border: 0px; height:50px; width:250px;">
                        </div>

                    </div>

                    <div class="text fw-bold" style="font-size: 15px">Plugging Start-End</div>
                    <table class="table table-striped  border-warning border border-2 " style="width: 100%" id="dataTable">
                        <thead>
                            <tr class="bg-warning text-center">

                                <th>Container No</th>
                                <th>Start Plug</th>
                                <th>End Plug</th>
                                <th>Status</th>
                                <th>First Monitor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>{{ $data_plug->no_container }}</td>
                                <td>{{ $data_plug->time }}</td>
                                <td>{{ $data_plug->time_end }}</td>
                                <td>{{ $data_plug->status }}</td>
                                <td>{{ $data_plug->monitor }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text fw-bold" style="font-size: 15px">MONITORING</div>
                    <table class="table table-striped  border-warning border border-2 " style="width: 100%" id="dataTable">
                        <thead>
                            <tr class="bg-warning text-center">

                                <th>Container No</th>
                                <th>Set Point</th>
                                <th>Supply Point</th>
                                <th>Return Point</th>
                                <th>Remark</th>
                                <th>Time Monitoring</th>
                                <th>Status monitor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_monitor as $monitor)
                                <tr class="text-center">
                                    <td>{{ $monitor->no_container }}</td>
                                    <td>{{ $monitor->set_temp }}</td>
                                    <td>{{ $monitor->sup_temp }}</td>
                                    <td>{{ $monitor->ret_temp }}</td>
                                    <td>{{ $monitor->remark }}</td>
                                    <td>{{ $monitor->time_monitoring }}</td>
                                    <td>{{ $monitor->monitor }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    @endsection




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        // Jika terdapat pesan kesalahan validasi, tampilkan kembali modal
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <script>
        @if ($errors->any())
            $(document).ready(function() {
                $('#monitoring_plug').modal('show');
            });
        @endif
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</html>
