<!DOCTYPE html>
<html lang="en">

<body>
    @extends('layouts.sidebarcopy')
    @section('content')
        <section class="home-section">
            <form action="{{ url('/resume_worksheet') }}" method="POST" id="submit_cfs">
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
                                        <input type="hidden" value="{{ $data_cfs->id_job_order }}" name="id">
                                        <input type="Date" class="form-control border border-dark mb-3 mb-3 text-center"
                                            name="activity_date" value="{{ $tgl_activity }}">
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
                                            name="no_order" value="{{ $data_cfs->no_order }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">PRINCIPAL</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3  text-center"
                                            name="principal" value="{{ $data_cfs->principal }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">FORWARDER</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3  text-center"
                                            name="forwarder" value="{{ $data_cfs->forwarder }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">SHIPPER</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3  text-center"
                                            name="shipper" value="{{ $data_cfs->shipper }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"><label class="form-label"
                                            style="color:white">CARGO</label>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3  text-center"
                                            name="cargo" value="{{ $data_cfs->cargo }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">party</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3  text-center"
                                            name="party" value="{{ $data_cfs->party }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label" style="color:white">Closing
                                            date</label></div>
                                    <div class="card-body">
                                        <input type="date" class="form-control border border-dark mb-3  text-center"
                                            name="closing_date" value="{{ $tgl_clossing }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">Remark</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3  text-center"
                                            name="remark" value="{{ $data_cfs->remark }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($stufstrip as $item)
                        <div class="row shadow bg-white clone-this" style="margin-bottom: 30px">
                            <div class="fw-bold count"></div>
                            <div class="col text-center  col-lg-6 col-md-6 col-sm-12 col-12 mb-0 ">
                                <div class="card text-dark bg-warning border-dark">
                                    <div class="card-header bg-dark" style="color: white">Stripping</div>
                                    <div class="card-body">
                                        <input type="hidden" name="group_id[]" value="{{ $item->group_id }}">
                                        <label class="form-label">No Container</label>
                                        <input type="text" class="form-control border border-dark  text-center"
                                            style="margin-bottom: 10px" name="strip_container_no[]"
                                            value="{{ $item->strip_container_no }}" placeholder="no container">
                                        <label class="form-label">No Seal</label>
                                        <input type="text" class="form-control border border-dark  text-center"
                                            style="margin-bottom: 10px" name="strip_seal_no[]"
                                            value="{{ $item->strip_seal_no }}" placeholder="no seal">
                                    </div>
                                </div>
                            </div>
                            <div class="col text-center col-lg-6 col-md-6 col-sm-12 col-12 ">
                                <div class="card text-dark bg-warning border-dark mb-3 border-bottom">
                                    <div class="card-header bg-dark " style="color: white">Stripping</div>
                                    <div class="card-body">
                                        <label class="form-label">No Container</label>
                                        <input type="text" class="form-control border border-dark  text-center"
                                            style="margin-bottom: 10px" name="stuf_container_no[]"
                                            value="{{ $item->stuf_container_no }}" placeholder="no container">
                                        <label class="form-label">No Seal</label>
                                        <input type="text" class="form-control border border-dark  text-center"
                                            style="margin-bottom: 10px" name="stuf_seal_no[]"
                                            value="{{ $item->stuf_seal_no }}" placeholder="no seal">
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                    <div class="clone-in-here">

                    </div>
                </div>
                <div class="d-flex justify-content-between position-sticky">
                    <button type="button" class="btn btn-success position-sticky bottom-0 end mb-3"
                        onclick="cloneForm()">Add
                        Form</button>

                    <button type="submit" class="btn btn-success position-sticky bottom-0 end mb-3" id="send_cfs"
                        data-bs-toggle="modal" data-bs-target="#pending_worksheet"
                        formaction="{{ url('/resume_worksheet') }}">Pending</button>

                    <button type="submit" class="btn btn-success position-sticky bottom-0 end mb-3" id="send_cfs"
                        data-bs-toggle="modal" data-bs-target="#submit_worksheet"
                        formaction="{{ url('/finish_resume_worksheet') }}">submit</button>
                </div>
            </form>
        </section>


        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            let cloneCounter = 0;

            function cloneForm() {
                cloneCounter++;
                const originalForm = document.querySelector(".clone-this");

                const clone = originalForm.cloneNode(true);
                clone.classList.remove("clone-this");
                clone.classList.add(`clone-${cloneCounter}`);
                // Change labels and input IDs if needed
                clone.querySelectorAll("label").forEach(label => {
                    label.setAttribute("for", label.getAttribute("for") + cloneCounter);
                });
                clone.querySelectorAll("input").forEach(input => {
                    input.setAttribute("id", input.getAttribute("id") + cloneCounter);
                    input.value = ""; // Clear input values in the new form
                });

                document.querySelector('.clone-in-here').appendChild(clone);
            }
        </script>








        {{-- <script>
            $(document).ready(function() {
                let previousClone = null;
                $('.button-clone-form').click(function() {
                    // Clone the HTML
                    let clone = $('.second-clone').html();
                    // Append the clone to the container
                    $('.awal-clone').append(clone);
                    // Get the values from input fields in the previous clone
                    if (previousClone !== null) {
                        let noContainerValue = previousClone.find('input[name="no_container_strip[]"]').val();
                        let sealValue = previousClone.find('input[name="seal_strip[]"]').val();

                        console.log('No Container Value from the previous clone: ' + noContainerValue);
                        console.log('Seal Value from the previous clone: ' + sealValue);
                    }

                    // Update the reference to the previous clone
                    previousClone = $('.awal-clone .second-clone').last();
                });
            });
        </script> --}}

        {{-- <script>
            let previousClone = null;
            $(document).ready(function() {
                $('.button-clone-form').click(function() {


                    // Get the values from input fields
                    $('.awal-clone').append($('.second-clone').html())

                    let noContainerValue = newlyAddedClone.find('input[name="no_container_strip[]"]').val();
                    let sealValue = newlyAddedClone.find('input[name="seal_strip[]"]').val();
                    let newlyAddedClone = $('.awal-clone .second-clone').last();

                    // Now you can use the values as needed
                    console.log('No Container Value: ' + noContainerValue);
                    console.log('Seal Value: ' + sealValue);
                })
            })
        </s> --}}
        {{-- <script>
            document.getElementById("send_cfs").addEventListener("click", function() {
                var form1 = document.getElementById("submit_cfs");
                form1.submit();

            });
        </script> --}}
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @endsection
</body>

</html>

<div class="container-baru">
    <div class="home-sections">

    </div>
</div>
