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
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"><label class="form-label" style="color: white">
                                            RECEIVING
                                            DATE</label></div>
                                    <div class="card-body">
                                        <input type="Date" class="form-control border border-dark mb-3 mb-3"
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
                                        <input type="text" class="form-control border border-dark mb-3" name="no_order">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">PRINCIPAL/CUSTOMER</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3" name="principal">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"><label class="form-label" style="color:white">CONTAINER
                                            NO/SIZE</label>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3" name="con_size">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label" style="color:white">VEHICLE
                                            TYPE</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3" name="veh_type">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label" style="color:white">VEHICLE
                                            ID</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3" name="veh_id">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">STRIPPING TYPE</label></div>
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input border border-dark" type="checkbox"
                                                value="TO WAREHOUSE" id="flexCheckDefault" name="warehouse">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                TO WAREHOUSE
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input border border-dark" type="checkbox"
                                                value="TO YARD" id="flexCheckDefault" name="yard">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                TO YARD
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input border border-dark" type="checkbox"
                                                value="TO CONTAINER" id="flexCheckDefault" name="to_con">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                TO CONTAINER
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">CONTAINER ACTIVITY TYPE (if using container)</label></div>
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input border border-dark" type="checkbox"
                                                value="GROUNDED" id="flexCheckDefault" name="grounded">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                GROUNDED
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input border border-dark" type="checkbox"
                                                value=" ON CHASIS" id="flexCheckDefault" name="on_chasis">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                ON CHASIS
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">REMARK</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3"
                                            name="remark">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="clone-in-here">
                        <div class="row shadow pb-3 bg-white clone-this" style="margin-bottom: 30px">
                            <div class="fw-bold count"></div>
                            <div class="col text-center  col-lg-12 col-md-12 col-sm-12 col-12 mb-0 ">
                                <div class="card text-dark bg-warning border-dark">
                                    <div class="card-header bg-dark" style="color: white">Stripping</div>
                                    <div class="card-body">
                                        <label class="form-label">DESCRIPTION OF GOODS</label>
                                        <textarea class="form-control border border-dark" id="exampleFormControlTextarea1" rows="3" name="desc[]"></textarea>
                                        <label class="form-label">DIMENSION</label>
                                        <input type="text" class="form-control border border-dark"
                                            style="margin-bottom: 10px" name="dimension[]">
                                        <label class="form-label">UNIT</label>
                                        <input type="text" class="form-control border border-dark"
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


        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
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
                // document.getElementById('TotalCard').classList.remove('d-none');

                // Change labels and input IDs if needed
                clone.querySelectorAll(".total_value").forEach(label => {
                    label.setAttribute("for", label.getAttribute("for") + cloneCounter);
                    label.textContent = "";
                });
                clone.querySelectorAll(".counter").forEach(label => {
                    label.setAttribute("for", label.getAttribute("for") + cloneCounter);
                    label.textContent = "0";
                });
                clone.querySelectorAll("input, textarea").forEach(input => {
                    input.setAttribute("id", input.getAttribute("id") + cloneCounter);
                    input.value = ""; // Clear input values in the new form
                });


                // Ambil elemen-elemen yang diperlukan dalam form yang di-clone
                var decrementButton = clone.querySelector('.btn-decrement');
                var incrementButton = clone.querySelector('.btn-increment');
                var counterLabel = clone.querySelector('.counter');
                var total = clone.querySelector('.total_value');
                var hiddenInput = clone.querySelector('[name="value[]"]');

                // Inisialisasi counter pada elemen clone
                var counterValue = 0;

                // Tambahkan event listener untuk tombol decrement pada elemen clone
                decrementButton.addEventListener('click', function() {
                    if (counterValue > 0) {
                        counterValue--;
                        updateCounter();
                    }
                });

                // Tambahkan event listener untuk tombol increment pada elemen clone
                incrementButton.addEventListener('click', function() {
                    counterValue++;
                    updateCounter();
                });

                // Fungsi untuk memperbarui nilai counter pada label pada elemen clone
                function updateCounter() {
                    counterLabel.textContent = counterValue;
                    total.textContent = counterValue;
                    hiddenInput.value = counterValue;
                }



                document.querySelector('.clone-in-here').appendChild(clone);
            }

            var decrementButton = document.querySelector('.btn-decrement');
            var incrementButton = document.querySelector('.btn-increment');
            var counterLabel = document.querySelector('.counter');
            var total = document.querySelector('.total_value');
            var hiddenInput = document.querySelector('[name="value[]"]');
            // Inisialisasi counter pada elemen clone
            var counterValue = 0;

            // Tambahkan event listener untuk tombol decrement pada elemen clone
            decrementButton.addEventListener('click', function() {
                if (counterValue > 0) {
                    counterValue--;
                    updateCounter();
                }
            });

            // Tambahkan event listener untuk tombol increment pada elemen clone
            incrementButton.addEventListener('click', function() {
                counterValue++;
                updateCounter();
            });

            // Fungsi untuk memperbarui nilai counter pada label pada elemen clone
            function updateCounter() {
                counterLabel.textContent = counterValue;
                total.textContent = counterValue;
                hiddenInput.value = counterValue;
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
