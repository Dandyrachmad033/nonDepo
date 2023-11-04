<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MTKI SBY | NonDepo</title>
</head>

<body>
    @extends('layouts.sidebarcopy')
    @section('content')
        <section class="home-section">
            <div class="text" style="font-size: 40px;">Add New Module</div>
            <div class="wrapper shadow p-3 mb-5 bg-white rounded">
                <form action="{{ url('/add_module') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6" style="width:400px">
                            <label for="inputEmail4">Module Name</label>
                            <input type="text" class="form-control border border-1 border-dark" id="module_name"
                                name="module_name" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Module path</label>
                            <input type="text" class="form-control border border-1 border-dark" id="module_path"
                                name="module_path" placeholder="Path" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description Module</label>
                        <textarea placeholder="Description" class="form-control  border border-1 border-dark" id="module_desc"
                            name="module_desc" rows="3" required style="max-width: 408px"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Module Script</label>
                            <input type="text" class="form-control  border border-1 border-dark" id="module_script"
                                name="module_script" placeholder="script" required>
                        </div>
                        <div class="form-group col-md-6" style="width: 600px">
                            <label for="module_parent">Parent Module</label>
                            <select class="form-control  border border-1 border-dark" id="module_parent"
                                name="module_parent" required>
                                <option value="home">home</option>
                                @foreach ($showdata as $menuItem)
                                    <option value="{{ $menuItem->module_name }}">{{ $menuItem->module_name }}</option>
                                @endforeach
                            </select>
                        </div>


                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Module Order</label>
                            <input type="text" class="form-control  border border-1 border-dark" id="module_order"
                                name="module_order" placeholder="Order" required>
                        </div>
                        <div class="form-group col-md-6" style="width: 600px">
                            <label for="inputAddress">Module Icon</label>
                            <input type="text" class="form-control  border border-1 border-dark" id="module_icon"
                                name="module_icon" placeholder="icon" required>
                        </div>

                    </div>


                    <div class="form-group">
                        <label class="col-md-3 ">Status</label>
                        <div style="max-width: 200px">
                            <div class="input-small">
                                <select id="module_status" name="module_status"
                                    class="form-control select2  border border-1 border-dark"
                                    data-placeholder="Select Status">
                                    <option value="1">Active</option>
                                    <option value="0">InActive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>


        </section>
    @endsection
</body>

</html>
