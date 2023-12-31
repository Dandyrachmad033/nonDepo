<!DOCTYPE html>
<html lang="en">

<body>
    @extends('layouts.sidebarcopy')
    @section('content')
        <section class="home-section">
            <form method="POST" id="submit_cfs">
                @csrf
                <div class="text" style="font-size: 40px">Cargo Receiving</div>
                <div class="container-fluid justify-content-center" style="margin-bottom:10px">



                    <div data-aos="fade-left" data-aos-duration="300">
                        <div class="row shadow bg-white pt-3">

                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3 shadow">
                                    <div class="card-header bg-dark"><label class="form-label" style="color: white">
                                            RECEIVING
                                            DATE</label></div>
                                    <div class="card-body">
                                        <input type="Date" class="form-control border border-dark mb-3 mb-3"
                                            name="activity_date">
                                    </div>
                                </div>
                                @error('activity_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3 shadow">
                                    <div class="card-header bg-dark"><label class="form-label" style="color:white">
                                            JO/ORDER
                                            NO</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3 text-center"
                                            name="no_order">
                                    </div>
                                </div>
                                @error('no_order')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3 shadow">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">PRINCIPAL/CUSTOMER</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3 text-center"
                                            name="principal">
                                    </div>
                                </div>
                                @error('principal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3 shadow">
                                    <div class="card-header bg-dark"><label class="form-label" style="color:white">CONTAINER
                                            NO/SIZE</label>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3 text-center"
                                            name="con_size">
                                    </div>
                                </div>
                                @error('con_size')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3 shadow">
                                    <div class="card-header bg-dark"> <label class="form-label" style="color:white">VEHICLE
                                            TYPE</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3 text-center"
                                            name="veh_type">
                                    </div>
                                </div>
                                @error('veh_type')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3 shadow">
                                    <div class="card-header bg-dark"> <label class="form-label" style="color:white">VEHICLE
                                            ID</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3 text-center"
                                            name="veh_id">
                                    </div>
                                </div>
                                @error('veh_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3 shadow">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">STRIPPING TYPE</label></div>
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input border border-dark" type="checkbox"
                                                value="TO WAREHOUSE" id="flexCheckDefault1" name="warehouse"
                                                {{ old('warehouse') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                TO WAREHOUSE
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input border border-dark" type="checkbox"
                                                value="TO YARD" id="flexCheckDefault2" name="yard"
                                                {{ old('yard') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                TO YARD
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input border border-dark" type="checkbox"
                                                value="TO CONTAINER" id="flexCheckDefault3" name="to_con"
                                                {{ old('to_con') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                TO CONTAINER
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                @error('warehouse')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3 shadow">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">CONTAINER ACTIVITY TYPE (if using container)</label></div>
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input border border-dark" type="checkbox"
                                                value="GROUNDED" id="flexCheckDefault4" name="grounded"
                                                {{ old('grounded') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                GROUNDED
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input border border-dark" type="checkbox"
                                                value=" ON CHASIS" id="flexCheckDefault5" name="on_chasis"
                                                {{ old('on_chasis') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                ON CHASIS
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                @error('on_chasis')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3 shadow">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">REMARK</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3 text-center"
                                            name="remark">
                                    </div>
                                </div>
                                @error('remark')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="clone-in-here">
                        <div class="row shadow pb-3 bg-white clone-this" style="margin-bottom: 30px">
                            <div class="fw-bold count"></div>
                            <div class="col text-center  col-lg-12 col-md-12 col-sm-12 col-12 mb-0">
                                <div class="card text-dark bg-warning border-dark shadow">
                                    <div class="card-header bg-dark" style="color: white">Stripping</div>
                                    <div class="card-body">
                                        <label class="form-label">DESCRIPTION OF GOODS</label>
                                        <textarea class="form-control border border-dark text-center" id="exampleFormControlTextarea1" rows="3"
                                            name="desc[]"></textarea>
                                        <label class="form-label">DIMENSION</label>
                                        <input type="text" class="form-control border border-dark text-center"
                                            style="margin-bottom: 10px" name="dimension[]">
                                        <label class="form-label">UNIT</label>
                                        <input type="text" class="form-control border border-dark text-center"
                                            style="margin-bottom: 10px" name="unit[]">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <button type="button"
                                                class="btn btn-lg btn-danger rounded-circle btn-decrement"
                                                id="decrement">-</button>
                                            <input type="hidden" name="value[]">
                                            <label class="form-label counter" id="counter"
                                                style="font-size: 30px">0</label>
                                            <button type="button"
                                                class="btn btn-lg btn-success rounded-circle btn-increment"
                                                id="increment">+</button>

                                        </div>

                                        <div class="card text-dark bg-light border-dark mb-3 d-none" id="TotalCard">
                                            <div class="card-header bg-dark"> <label class="form-label"
                                                    style="color:white">TOTAL NILAI : <label
                                                        class="form-label total_value" style="color:white"
                                                        id="total_value"> </label> </label></div>

                                        </div>
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
                        formaction="{{ url('/form_receiving') }}">Pending</button>

                    <button type="submit" class="btn btn-success position-sticky bottom-0 end mb-3" id="send_cfs"
                        formaction="{{ url('/finish_form_receiving') }}">submit</button>
                </div>
            </form>
        </section>


        <div class="modal fade" id="submit_receiving" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body bg-warning text-center" style="color:black">
                        Data Berhasil Didapatkan
                    </div>

                </div>
            </div>
        </div>


        <script>
            var userId = {{ auth()->user()->id }};
        </script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="{{ asset('js/stufstrip_form/receiving/clone_receiving.js') }}"></script>
        <script src="{{ asset('js/stufstrip_form/receiving/receiving_form.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @endsection
</body>

</html>

<div class="container-baru">
    <div class="home-sections">

    </div>
</div>
