<!DOCTYPE html>
<html lang="en">

<body>
    @extends('layouts.sidebarcopy')
    @section('content')
        <section class="home-section">
            <form action="{{ url('/cfs_form') }}" method="POST" id="submit_cfs">
                @csrf
                <div class="text" style="font-size: 40px">CFS Tally</div>
                <div class="container-fluid justify-content-center" style="margin-bottom:10px">



                    <div data-aos="fade-left" data-aos-duration="300">
                        <div class="row shadow bg-white pt-3">

                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"><label class="form-label" style="color: white">
                                            ACTIVITY
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
                                            style="color:white">PRINCIPAL</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3" name="principal">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">FORWARDER</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3" name="forwarder">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"><label class="form-label"
                                            style="color:white">CARGO</label>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3" name="cargo">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">PARTY</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3" name="party">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">CONTAINER NO(STRIPPING)</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3"
                                            name="container_strip">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label"
                                            style="color:white">QUANTITY</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3" name="remark">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                                <div class="card text-dark bg-light border-dark mb-3">
                                    <div class="card-header bg-dark"> <label class="form-label" style="color:white">STUFFING
                                            CONTAINER NO</label></div>
                                    <div class="card-body">
                                        <input type="text" class="form-control border border-dark mb-3"
                                            name="container_stuf">
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
                                            <button type="button" class="btn btn-lg btn-danger rounded-circle"
                                                id="decrement">-</button>
                                            <label class="form-label" id="counter" style="font-size: 30px">0</label>
                                            <button type="button" class="btn btn-lg btn-success rounded-circle"
                                                id="increment">+</button>

                                        </div>

                                        <div class="card text-dark bg-light border-dark mb-3 d-none" id="TotalCard">
                                            <div class="card-header bg-dark"> <label class="form-label"
                                                    style="color:white">TOTAL NILAI : <label class="form-label"
                                                        style="color:white" id="total_value"> </label> </label></div>

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

                    <button type="submit" class="btn btn-success position-sticky bottom-0 end mb-3"
                        id="send_cfs">Submit</button>
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
                document.getElementById('TotalCard').classList.remove('d-none');

                document.querySelector('.clone-in-here').appendChild(clone);
            }
        </script>

        <script>
            // Ambil elemen-elemen yang diperlukan
            var decrementButton = document.getElementById('decrement');
            var incrementButton = document.getElementById('increment');
            var counterLabel = document.getElementById('counter');
            var total = document.getElementById('total_value');

            // Inisialisasi counter
            var counterValue = 0;

            // Tambahkan event listener untuk tombol decrement
            decrementButton.addEventListener('click', function() {
                if (counterValue > 0) {
                    counterValue--;
                    updateCounter();
                }
            });

            // Tambahkan event listener untuk tombol increment
            incrementButton.addEventListener('click', function() {
                counterValue++;
                updateCounter();
            });

            // Fungsi untuk memperbarui nilai counter pada label
            function updateCounter() {
                counterLabel.textContent = counterValue;
                total.textContent = counterValue;
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
