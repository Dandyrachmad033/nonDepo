<!DOCTYPE html>
<html lang="en">

<body>
    @extends('layouts.sidebarcopy')
    @section('content')
        <section class="home-section">
            <form method="POST" id="submit_cfs">
                @csrf
                <div class="text" style="font-size: 40px">CFS Worksheet</div>
                <div class="container-fluid justify-content-center" style="margin-bottom:10px">



                    <div data-aos="fade-left" data-aos-duration="300">
                        <div class="row shadow bg-white pt-3">

                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"><label class="form-label" style="color: white">
                                            ACTIVITY
                                            DATE</label></div>
                                    <div class="card-body">
                                        <input type="Date" class="form-control border border-dark mb-3 mb-3 text-center"
                                            name="activity_date">
                                    </div>
                                </div>

                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"><label class="form-label" style="color:white">
                                            JO/ORDER
                                            NO</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3 text-center"
                                            name="no_order">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">PRINCIPAL</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3 text-center"
                                            name="principal">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">FORWARDER</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3 text-center"
                                            name="forwarder">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">SHIPPER</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3 text-center"
                                            name="shipper">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"><label class="form-label"
                                            style="color:white">CARGO</label>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3 text-center"
                                            name="cargo">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">party</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3 text-center"
                                            name="party">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label" style="color:white">Closing
                                            date</label></div>
                                    <div class="card-body">
                                        <input type="date" class="form-control border border-dark mb-3 text-center"
                                            name="closing_date">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">Remark</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3 text-center"
                                            name="remark">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clone-in-here">
                        <div class="row shadow bg-white clone-this" style="margin-bottom: 30px">
                            <div class="col text-center col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                <div class="card text-dark border-dark">
                                    <div class="card-header bg-dark fw-bold d-flex justify-content-between align-items-center number-clone"
                                        style="color: white">
                                        <div class="col-6 text-end">
                                            <span>1</span>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button type="button" class="btn btn-danger remove-button clone-button"
                                                onclick="removeClone(this)">X</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-center  col-lg-6 col-md-6 col-sm-12 col-12 mb-0 ">
                                <div class="card text-dark bg-warning border-dark">
                                    <div class="card-header bg-dark" style="color: white">Stripping</div>
                                    <div class="card-body">
                                        <label class="form-label">No Container</label>
                                        <input type="text" class="form-control border border-dark text-center"
                                            style="margin-bottom: 10px" name="strip_container_no[]"
                                            id="strip_container_no">
                                        <label class="form-label">No Seal</label>
                                        <input type="text" class="form-control border border-dark text-center"
                                            style="margin-bottom: 10px" name="strip_seal_no[]" id="strip_seal_no">
                                    </div>
                                </div>
                            </div>
                            <div class="col text-center col-lg-6 col-md-6 col-sm-12 col-12 ">
                                <div class="card text-dark bg-warning border-dark mb-3 border-bottom">
                                    <div class="card-header bg-dark " style="color: white">Stripping</div>
                                    <div class="card-body">
                                        <label class="form-label">No Container</label>
                                        <input type="text" class="form-control border border-dark text-center"
                                            style="margin-bottom: 10px" name="stuf_container_no[]">
                                        <label class="form-label">No Seal</label>
                                        <input type="text" class="form-control border border-dark text-center"
                                            style="margin-bottom: 10px" name="stuf_seal_no[]">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between position-sticky">
                    <button type="button" class="btn btn-success position-sticky bottom-0 end mb-3"
                        onclick="cloneForm()">Add
                        Form</button>

                    <button type="submit" class="btn btn-success position-sticky bottom-0 end mb-3" id="send_cfs"
                        data-bs-toggle="modal" data-bs-target="#pending_worksheet"
                        formaction="{{ url('/cfs_form') }}">Pending</button>

                    <button type="submit" class="btn btn-success position-sticky bottom-0 end mb-3" id="send_cfs"
                        data-bs-toggle="modal" data-bs-target="#submit_worksheet"
                        formaction="{{ url('/finish_form_worksheet') }}">submit</button>
                </div>
            </form>
        </section>

        {{-- modal confirm submit --}}
        <div class="modal fade" id="pending_worksheet" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body bg-warning text-center" style="color:black">
                        Data Berhasil Dipending
                    </div>

                </div>
            </div>
        </div>

        <script>
            // Mendapatkan nilai dari local storage jika ada
            document.getElementById('strip_container_no').value = localStorage.getItem('strip_container_no') || '';
            document.getElementById('strip_seal_no').value = localStorage.getItem('strip_seal_no') || '';

            // Menyimpan nilai ke local storage saat input berubah
            document.getElementById('strip_container_no').addEventListener('input', function() {
                localStorage.setItem('strip_container_no', this.value);
            });

            document.getElementById('strip_seal_no').addEventListener('input', function() {
                localStorage.setItem('strip_seal_no', this.value);
            });
        </script>
        <script>
            // Mendapatkan elemen input
            var userId = {{ auth()->user()->id }};
            // Fungsi untuk mendapatkan ID pengguna atau nama pengguna (sesuaikan dengan implementasi otentikasi Anda)
        </script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="{{ asset('js/stufstrip_form/worksheet/clone_worksheet.js') }}"></script>
        <script src="{{ asset('js/stufstrip_form/worksheet/worksheet_form.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @endsection
</body>

</html>

<div class="container-baru">
    <div class="home-sections">

    </div>
</div>
