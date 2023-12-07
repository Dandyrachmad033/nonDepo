<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MTKI SBY | NonDepo</title>
</head>

<body>
    @extends('layouts.sidebarcopy')
    @section('content')
        <section class="home-section w-100">
            <div class="text w-100" style="font-size: 30px">Create Job Order</div>
            <div class="container-fluid">
                <form action="{{ url('/create_job_order') }}" method="post">
                    <div class="d-flex row shadow p-3 mb-5 bg-white justify-content-center w-100">
                        <div class="row w-100 ">
                            <div class="d-flex justify-content-center"
                                style="display: flex; align-items:center; margin-top:-20px; padding-right:50px">

                                <div>
                                    <img src="{{ asset('images/flag-samudera.png') }}" alt="samudera" class="img-fluid"
                                        style="border: none; height:50px; width:250px;">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col text-center">
                                <p class="fw-bold">JOB ORDER SHEET</p>

                            </div>
                        </div>
                        @csrf
                        <div class="row w-100 justify-content-center">
                            <div class="text-center  col-lg-12 col-md-12 col-sm-12 col-12" style="max-width: 60%">
                                <div class="bg-warning p-3 mb-3 shadow col-12 col-lg-12 col-md-12 col-sm-12">

                                    <div class="form-group col-md-12 col-lg-12 col-sm-12 mb-3">
                                        <label>JOB ORDER NO</label>
                                        <input type="text" class="form-control border border-2 border-dark"
                                            id="no_order" name="no_order" placeholder="NO JOB ORDER" required>
                                    </div>
                                    <div class="form-group col-md-12 col-lg-12 col-sm-12 mb-3">
                                        <label>BILLING TO</label>
                                        <input type="text" class="form-control border border-2 border-dark"
                                            id="billing_to" name="billing_to" placeholder="Billing to" required>
                                    </div>
                                    <div class="form-group col-md-12 col-lg-12 col-sm-12 mb-3">
                                        <label>INSTRUCTION NO/PO</label>
                                        <input type="text" class="form-control border border-2 border-dark"
                                            id="instruction" name="isntruction" placeholder="INSTRUCTION NO/PO" required>
                                    </div>
                                    <div class="form-group col-md-12 col-lg-12 col-sm-12 mb-3">
                                        <label>TERM OF PAYMENT</label>
                                        <input type="text" class="form-control border border-2 border-dark"
                                            id="payment" name="payment" placeholder="TERM OF PAYMENT" required>
                                    </div>
                                    <div class="form-group col-md-12 col-lg-12 col-sm-12 mb-3">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <label>START TIME</label>
                                                <input type="date" class="form-control border border-2 border-dark"
                                                    id="start_time" name="start_time" required>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <label>CLOSSING TIME</label>
                                                <input type="date" class="form-control border border-2 border-dark"
                                                    id="clossing_time" name="closing_time" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-lg-12 col-sm-12 mb-3">
                                        <label>INSTRUCTION</label>
                                        <select class="form-select border border-dark border-2"
                                            aria-label="Default select example">
                                            <option></option>
                                            <option value="TRUCK TO CONTAINER">TRUCK TO CONTAINER</option>
                                            <option value="TRUCK TO YARD">TRUCK TO YARD</option>
                                            <option value="TRUCK TO WAREHOUSE">TRUCK TO WAREHOUSE</option>
                                            <option value="CONTAINER TO CONTAINER">CONTAINER TO CONTAINER</option>
                                            <option value="CONTAINER TO YARD">CONTAINER TO YARD</option>
                                            <option value="CONTAINER TO WAREHOUSE">CONTAINER TO WAREHOUSE</option>
                                            <option value="WAREHOUSE TO CONTAINER">WAREHOUSE TO CONTAINER</option>
                                            <option value="WAREHOUSE TO YARD">WAREHOUSE TO YARD</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group shadow col-md-12 col-lg-12 col-sm-12 mb-3">
                                    <table class="table table-striped  border-warning border border-2 " style="width: 100%"
                                        id="dataTable">
                                        <thead>
                                            <tr class="bg-warning text-center">
                                                <th>FROM</th>
                                                <th>TO</th>
                                                <th>GOODS</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <div class="clone-in-here">
                                                <tr class="text-center clone-this">
                                                    <td> <input type="text"
                                                            class="form-control border border-1 border-dark" id="from"
                                                            name="from[]" placeholder="FROM" required>
                                                    </td>
                                                    <td> <input type="text"
                                                            class="form-control border border-1 border-dark" id="to"
                                                            name="to[]" placeholder="TO" required>
                                                    </td>
                                                    <td> <input type="text"
                                                            class="form-control border border-1 border-dark"
                                                            id="goods" name="goods[]" placeholder="GOODS" required>
                                                    </td>
                                                    <td><button type="button"
                                                            class="btn btn-danger position-sticky bottom-0 end mb-3"
                                                            onclick="removeForm(this)"
                                                            style="display: none">Remove</button></td>
                                                </tr>

                                            </div>

                                        </tbody>
                                    </table>

                                </div>
                                <div class="d-flex justify-content-between">

                                    <button type="button" class="btn btn-success position-sticky bottom-0 end mb-3"
                                        onclick="cloneForm()">Add</button>
                                </div>

                            </div>
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="row w-100">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                                        <div class="row clone-here mb-3">
                                            <div class="col-12 col-lg-12 col-md-12 col-sm 12 clone-this-one mb-3">
                                                <div class="shadow card border border-dark">
                                                    <div class="card-body bg-warning">
                                                        <h5 class="card-title text-center">Revenue</h5>
                                                        <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                                            <label>DESCRIPTION</label>
                                                            <input type="text"
                                                                class="form-control border border-2 border-dark "
                                                                id="desc" name="desc[]" placeholder="NO JOB ORDER"
                                                                required>
                                                        </div>

                                                        <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                                            <div class="row">
                                                                <div
                                                                    class="col-12 col-lg-3 col-md-3 col-sm-12 text-center">
                                                                    <label for="currencyType">TYPE</label>
                                                                    <select
                                                                        class="form-select border border-dark border-2 text-center mx-auto currencyType"
                                                                        id="currencyType" aria-label="Currency Type"
                                                                        onchange="updateCurrencyFormat()">
                                                                        <option value="IDR">IDR</option>
                                                                        <option value="USD">USD</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                                                                    <label>QUANTITY</label>
                                                                    <input type="number"
                                                                        class="form-control border border-2 border-dark quantity"
                                                                        id="quantity" name="quantity[]"
                                                                        placeholder="Jumlah" required>
                                                                </div>
                                                                <div class="col-12 col-lg-5 col-md-5 col-sm-12">
                                                                    <label for="rate">RATE</label>
                                                                    <input type="number"
                                                                        class="form-control border border-2 border-dark rate"
                                                                        id="rate" name="rate[]" placeholder="Rate"
                                                                        required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                                            <div class="row">
                                                                <div
                                                                    class="col-lg-6 col-md-6 col-sm-12 col-12 text-center total-all">
                                                                    <label class="text-center">TOTAL</label>
                                                                    <input type="text"
                                                                        class="form-control border border-2 border-dark "
                                                                        id="total" name="total[]" readonly>
                                                                </div>
                                                                <div
                                                                    class="col-lg-6 col-md-6 col-sm-12 col-12 text-center tax">
                                                                    <label class="text-center">TAX 11%</label>
                                                                    <input type="text"
                                                                        class="form-control border border-2 border-dark "
                                                                        id="tax" name="tax[]" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-lg-12 col-md-12 col-sm-12 mb-3 justify-content-end">
                                                            <button type="button"
                                                                class="btn btn-danger bottom-0 end mb-3 btn-display mx-auto"
                                                                onclick=" removeElement(this)"
                                                                style="display: none">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">

                                            <button type="button"
                                                class="btn btn-success position-sticky bottom-0 end mb-3"
                                                onclick="cloneElement()">Add</button>
                                        </div>

                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-12 text-center">
                                        <div class="row clone-cost mb-3">
                                            <div class="col-12 col-lg-12 col-md-12 col-sm 12 clone-this-cost mb-3">
                                                <div class="card border border-dark shadow">
                                                    <div class="card-body bg-warning">
                                                        <h5 class="card-title text-center">Cost</h5>
                                                        <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                                            <label>DESCRIPTION</label>
                                                            <input type="text"
                                                                class="form-control border border-2 border-dark "
                                                                id="desc_cost" name="desc_cost[]"
                                                                placeholder="NO JOB ORDER" required>
                                                        </div>

                                                        <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                                            <div class="row">
                                                                <div
                                                                    class="col-12 col-lg-3 col-md-3 col-sm-12 text-center">
                                                                    <label for="currencyType">TYPE</label>
                                                                    <select
                                                                        class="form-select border border-dark border-2 text-center mx-auto currencyType_cost"
                                                                        id="currencyType_cost"
                                                                        onchange="updateCurrencyFormat()">
                                                                        <option value="IDR">IDR</option>
                                                                        <option value="USD">USD</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                                                                    <label>QUANTITY</label>
                                                                    <input type="number"
                                                                        class="form-control border border-2 border-dark "
                                                                        id="quantity_cost" name="quantity_cost[]"
                                                                        placeholder="Jumlah" required>
                                                                </div>
                                                                <div class="col-12 col-lg-5 col-md-5 col-sm-12">
                                                                    <label for="rate">RATE</label>
                                                                    <input type="number"
                                                                        class="form-control border border-2 border-dark"
                                                                        id="rate_cost" name="rate_cost[]"
                                                                        placeholder="Rate" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                                            <div class="row">
                                                                <div
                                                                    class="col-lg-6 col-md-6 col-sm-12 col-12 text-center total-cost">
                                                                    <label class="text-center">TOTAL</label>
                                                                    <input type="text"
                                                                        class="form-control border border-2 border-dark"
                                                                        id="total_cost" name="total_cost[]" readonly>
                                                                </div>
                                                                <div
                                                                    class="col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                                                                    <label class="text-center">TAX 11%</label>
                                                                    <input type="text"
                                                                        class="form-control border border-2 border-dark "
                                                                        id="tax_cost" name="tax_cost[]" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-lg-12 col-md-12 col-sm-12 mb-3 justify-content-end">
                                                            <button type="button"
                                                                class="btn btn-danger bottom-0 end mb-3 btn-display mx-auto"
                                                                onclick="removeElement_cost(this)"
                                                                style="display: none">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="button"
                                                class="btn btn-success position-sticky bottom-0 end mb-3"
                                                onclick="cloneElement_cost()">Add</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12 col-md-12 col-sm-12 bg-dark mb-3 p-3">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <label class="text-center" style="color: white">TOTAL ALL REVENUE</label>
                                            <input type="text"
                                                class="form-control border border-2 border-dark text-center"
                                                id="total_all_revenue" name="total_all_revenue" readonly>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <label class="text-center" style="color: white">TOTAL ALL COST</label>
                                            <input type="text" class="form-control border border-2 border-dark "
                                                id="total_all_cost" name="total_all_cost" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success bottom-0 end mb-3"
                            style="max-width: 300px">Submit</button>
                </form>
            </div>
        </section>
        <script src="{{ asset('js/create-jo/clone_revenue.js') }}"></script>
        <script src="{{ asset('js/create-jo/clone_cost.js') }}"></script>
        <script src="{{ asset('js/create-jo/clone_Tform.js') }}"></script>
    @endsection
</body>

</html>
