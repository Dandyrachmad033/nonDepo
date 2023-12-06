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
            <div class="text" style="font-size: 30px">End-Plug & History</div>
            <div data-aos="fade-left" data-aos-duration="300">
                <div class="table-container shadow p-3 mb-5 bg-white " style="max-width: 98%">
                    <div class="justify-content-between mb-3" style="display: flex; align-items:center;">
                        <form class="d-flex align-items-center" id="searchForm" method="POSt"
                            action="{{ url('/Export_plug_history') }}">
                            @csrf
                            <input id="tanggal_awal" class="form-control me-2 border border-dark border-2" type="date"
                                name="tanggal_awal">

                            <input id="tanggal_akhir" class="form-control me-2 border border-dark border-2" type="date"
                                name="tanggal_akhir">
                            <button class="btn btn-success" type="submit">Download</button>
                        </form>

                        <form class="d-flex align-items-center" id="searchForm">
                            <input id="searchInput" class="form-control me-2 border border-warning border-2" type="search"
                                placeholder="Search" aria-label="Search">
                            <button class="btn btn-warning" type="submit" onclick="searchTable(event)">Search</button>
                        </form>
                    </div>

                    {{-- table Data Monitoring --}}
                    <table class="table table-striped  border-warning border border-2 " style="width: 100%" id="dataTable">
                        <thead>
                            <tr class="bg-warning text-center">
                                <th>No</th>
                                <th>Container No</th>
                                <th>Start Plug</th>
                                <th>End Plug</th>
                                <th>Status</th>

                                <th>History</th>
                            </tr>
                        </thead>


                        <tbody>
                            @php
                                $counter = 1;
                            @endphp
                            @foreach ($data as $index => $item)
                                <tr class="text-center">
                                    <td>{{ $counter }}</td>
                                    <td>{{ $item->no_container }}</td>
                                    <td>{{ $item->time }}</td>
                                    <td>{{ $item->time_end }}</td>
                                    <td>{{ $item->status }}</td>

                                    <td class="text-center"><a
                                            href="{{ route('view_history', ['id_plug' => $item->plug_id]) }}"><button
                                                type="button" class="btn btn-warning btn-sm">
                                                View History
                                            </button></a></td>
                                </tr>
                                @php
                                    $counter++; // Increment nomor urut setelah setiap baris
                                @endphp
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
