<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Samudera | MTKI surabaya</title>

</head>

<body>
    @extends('layouts.sidebarcopy')
    @section('content')
        <section class="home-section">
            <div class="text" style="font-size: 40px">Module Management</div>
            <br>
            <div data-aos="fade-left" data-aos-duration="300">

                <div class=" table-container shadow p-3 mb-5 bg-white rounded" style="max-width: 98%">

                    <a href="/add_module_view"><button type="button" class="btn btn-success btn-sm"
                            style="color: #ffffff; " class="button-click"> Add Module
                        </button> </a>


                    <!-- On tables -->
                    <br>
                    <br>
                    <table class="table table-striped border border-2  border-warning" style="max-width: 100%">
                        <tr class="bg-warning text-center">
                            <th field="module_id" sortable="true">No</th>
                            <th field="module_id" sortable="true">Module Name</th>
                            <th field="module_desc" sortable="true">Module Desc</th>
                            <th field="module_path" sortable="true">Module Path</th>
                            <th field="module_script" sortable="true">Module Script</th>
                            <th field="parent_module_id" sortable="true">Parent Module</th>
                            <th field="module_order" sortable="true">Module Order</th>
                            <th field="theme_icon" sortable="true">Theme Icon</th>
                            <th field="active" sortable="true">Active</th>
                            <th> </th>
                            <th> </th>
                        </tr>

                        @foreach ($showdata as $index => $data)
                            <tr class="text-center">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $data->module_name }}</td>
                                <td>{{ $data->module_desc }}</td>
                                <td>{{ $data->module_path }}</td>
                                <td>{{ $data->module_script }}</td>
                                <td>{{ $data->module_parent }}</td>
                                <td>{{ $data->module_order }}</td>
                                <td>{{ $data->module_icon }}</td>
                                <td>{{ $data->module_status }}</td>
                                <td> <a href="{{ route('edit_module', ['id' => $data->module_name]) }}"><button
                                            class="btn btn-warning btn-sm" style="color: #0b0b0b">Edit</button></a></td>
                                <td>
                                    <a href="{{ route('remove_module', ['id' => $data->module_id]) }}"><button
                                            class="btn btn-danger btn-sm">Remove</button></a>
                                </td>
                            </tr>

                            @foreach ($data->sub_m_module as $subData)
                                <tr class="text-center">
                                    <td></td>
                                    <td>{{ $subData->module_name }}</td>
                                    <td>{{ $subData->module_desc }}</td>
                                    <td>{{ $subData->module_path }}</td>
                                    <td>{{ $subData->module_script }}</td>
                                    <td>{{ $subData->module_parent }}</td>
                                    <td>{{ $subData->module_order }}</td>
                                    <td></td>
                                    <td>{{ $subData->module_status }}</td>
                                    <td><a href="{{ route('edit_module', ['id' => $subData->module_name]) }}"><button
                                                class="btn btn-warning btn-sm" style="color: #000000">Edit</button></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('remove_module', ['id' => $subData->module_id]) }}"><button
                                                class="btn btn-danger btn-sm">Remove</button></a>

                                    </td>
                                </tr>
                            @endforeach
                        @endforeach


                    </table>
                </div>
            </div>
        </section>
    @endsection


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>
