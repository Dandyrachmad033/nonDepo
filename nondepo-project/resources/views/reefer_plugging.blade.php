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
            <div class="text" style="font-size: 30px">Reefer Plugging</div>
            <div data-aos="fade-left" data-aos-duration="300">

                <div class="table-container shadow p-3 mb-5 bg-white rounded" style="max-width: 98%">

                    <div class="justify-content-between " style="display: flex; align-items:center;">

                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" onclick="openModal()">
                            Start Plugging
                        </button>


                        <div class="images-logos">
                            <img src="{{ asset('images/flag-samudera.png') }}" alt="samudera" class="img-fluid"
                                style="border: 0px; height:50px; width:250px;">
                        </div>
                        <form class="d-flex align-items-center" id="searchForm">
                            <input id="searchInput" class="form-control me-2 border border-warning border-2" type="search"
                                placeholder="Search" aria-label="Search">
                            <button class="btn btn-warning" type="submit" onclick="searchTable(event)">Search</button>
                        </form>
                    </div>


                    <table class="table table-striped border-warning border border-2" style="width: 100%" id="dataTable">
                        <thead>
                            <tr class="bg-warning text-center">
                                <th>No</th>
                                <th>Container No</th>
                                <th>Set Point</th>
                                <th>Supply</th>
                                <th>Return</th>
                                <th>Remark</th>
                                <th>start plug</th>
                                <th style="max-width: 100px"></th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $counter = ($data->currentPage() - 1) * $data->perPage() + 1;
                            @endphp
                            @foreach ($data as $index => $item)
                                <tr class="text-center">
                                    <td>{{ $counter }}</td>
                                    <td>{{ $item['no_container'] }}</td>
                                    <td>{{ $item['set_temp'] }}</td>
                                    <td>{{ $item['sup_temp'] }}</td>
                                    <td>{{ $item['ret_temp'] }}</td>
                                    <td>{{ $item['remark'] }}</td>
                                    <td class="text-center">{{ date('d-m-Y h:i:s', strtotime($item->time)) }}</td>
                                    <td class="text-center"> <button onclick="openModalEnd(this)" type="button"
                                            class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#end_plugging" data-no-container="{{ $item->no_container }}"
                                            data-set-temp="{{ $item->set_temp }}" data-remark="{{ $item->remark }}">
                                            End Plugging
                                        </button></td>
                                    <td class="text-center">{{ $item->status }}</td>
                                </tr>
                                @php
                                    $counter++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->links() }}
                    <div>

                    </div>
                </div>


            </div>
            <!-- Button trigger modal -->

            <!-- Modal -->
        </section>
    @endsection
    {{-- Modal Start Plugging --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border border-warning">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="exampleModalLabel">Plugging</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        onclick="closeModal()"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/start_plugging') }}" method="POST" id="start_plug"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="no_container" class="col-form-label">Nomor Container</label>
                            <input type="text"
                                class="form-control border border-1 border-dark  @error('no_container')
                                is-invalid
                            @enderror"
                                onblur="validateNoContainer()" id="no_container" name="no_container"
                                value="{{ old('no_container') }}">
                            <div id="no_container_error">

                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Celcius</label>
                                    <select class="form-select border border-1 border-dark"
                                        aria-label="Default select example" id="cel_one" name="cel_one">
                                        <option value="-">-</option>
                                        <option value="+">+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Set Point Temperature</label>
                                    <input type="text"
                                        class="form-control border border-1 border-dark @error('set_temp')
                                        is-invalid
                                    @enderror"
                                        onblur="validatesettemp()" id="set_temp" name="set_temp"
                                        value="{{ old('set_temp') }}">
                                    <div id="settemp_error">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Celcius</label>
                                    <select class="form-select border border-1 border-dark"
                                        aria-label="Default select example" id="cel_two" name="cel_two">
                                        <option value="-">-</option>
                                        <option value="+">+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Supply Temperature</label>
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
                                    <label for="message-text" class="col-form-label">Celcius</label>
                                    <select class="form-select border border-1 border-dark"
                                        aria-label="Default select example" id="cel_tree" name="cel_tree">
                                        <option value="-">-</option>
                                        <option value="+">+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Return Temperature</label>
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
                            <label for="alarm" class="col-form-label">Alarm</label>
                            <input type="text" class="form-control border border-1 border-dark" id="alarm"
                                name="alarm">
                        </div>

                        <div class="mb-3">
                            <label for="remark" class="form-label">Remark</label>
                            <textarea class="form-control border border-1 border-dark" id="remark" name="remark" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>
                            <input class="form-control border border-1 border-dark" type="file" id="photo"
                                name="photo[]" multiple>
                        </div>
                        <div>
                            {{ session('error') }}
                        </div>

                        <img id="snapshot" height="100"
                            style="display: none; border-radius: 0; width: 150px; max-width: 100%; margin: 20px auto;" />


                    </form>
                </div>
                <div class="modal-footer bg-dark d-flex justify-content-between">

                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                        onclick="closeModal()">Close</button>
                    <button id="camera-button" class="btn btn-warning btn-sm " data-bs-target="#opencamera"
                        data-bs-toggle="modal" data-bs-dismiss="modal">
                        <i class='bx bxs-camera bg-warning' style="font-size: 30px; margin-bottom:0"></i>
                    </button>
                    <button type="submit" class="btn btn-warning btn-sm" id="send_data">Submit</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Camera Open --}}
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

                    <button id="camera-capture" class="btn btn-warning btn-sm ">
                        <i class='bx bxs-camera bg-warning' style="font-size: 30px; margin-bottom:0"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal end plugging --}}
    <div class="modal fade" id="end_plugging" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border border-warning">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="exampleModalLabel">End Plugging</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        onclick="closeModalEnd()"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/end_plugging') }}" method="POST" id="end_plug_end"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="no_container" class="col-form-label">Nomor Container</label>
                            <input type="text" class="form-control  border border-1 border-dark"
                                id="modal_no_container" name="no_container" readonly>

                        </div>
                        <div class="row">

                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Set Point Temperature</label>
                                <input type="text" class="form-control  border border-1 border-dark"
                                    id="modal_set_temp" name="set_temp" readonly>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Celcius</label>
                                    <select class="form-select  border border-1 border-dark"
                                        aria-label="Default select example" id="cel_two_end" name="cel_two_end">
                                        <option value="-">-</option>
                                        <option value="+">+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Supply Temperature</label>
                                    <input type="text"
                                        class="form-control  border border-1 border-dark @error('sup_temp_end')
                                        is-invalid
                                    @enderror"
                                        onblur="validatesuptempend()" id="sup_temp_end" name="sup_temp_end">
                                    <div id="suptempend_error">

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Celcius</label>
                                    <select class="form-select  border border-1 border-dark"
                                        aria-label="Default select example" id="cel_tree_end" name="cel_tree_end">
                                        <option value="-">-</option>
                                        <option value="+">+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3 ">
                                    <label for="message-text" class="col-form-label">Return Temperature</label>
                                    <input type="text"
                                        class="form-control  border border-1 border-dark @error('ret_temp_end')
                                        is-invalid
                                    @enderror"
                                        onblur="validaterettempend()" id="ret_temp_end" name="ret_temp_end">
                                    <div id="rettempend_error">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="remark" class="form-label">Remark</label>
                            <textarea class="form-control  border border-1 border-dark" id="modal_remark" name="remark_end" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Photo</label>
                            <input class="form-control  border border-1 border-dark" type="file" id="photo"
                                name="photo_end[]" multiple>
                        </div>

                    </form>
                </div>
                <div class="modal-footer bg-dark d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                        onclick="closeModalEnd()">Close</button>
                    <button id="camera-button2" class="btn btn-warning btn-sm" data-bs-target="#opencamera"
                        data-bs-toggle="modal" data-bs-dismiss="modal">
                        <i class='bx bxs-camera bg-warning' style="font-size: 30px; margin-bottom:0"></i>
                    </button>
                    <button type="submit" class="btn btn-warning btn-sm" id="send_data_end">Submit</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Success Input Data --}}
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body bg-warning">
                    Send Data Success!!!
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        // Fungsi untuk membuka modal dan menyimpan status ke dalam localStorage
    </script>

    <!-- Masukkan di bagian head atau sebelum tag penutup body -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/plugging/button_submit.js') }}"></script>
    <script src="{{ asset('js/plugging/modal.js') }}"></script>
    <script src="{{ asset('js/plugging/search_button.js') }}"></script>
    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var modal = document.getElementById('exampleModal');
                if (modal) {
                    modal.classList.add('show');
                    modal.style.display = 'block';
                }
            });
        </script>
    @endif




    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>






</body>

</html>
