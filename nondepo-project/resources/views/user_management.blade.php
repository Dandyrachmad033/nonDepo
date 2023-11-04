<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('sidebar/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MTKI SBY | NonDepot</title>
</head>

<body>
    @extends('layouts.sidebarcopy')
    @section('content')
        <section class="home-section">
            <div class="text" style="font-size: 40px">User Management</div>
            <br>
            <div class=" table-container shadow p-3 mb-5 bg-white rounded" style="max-width: 98%">

                <button type="button" class="btn btn-secondary btn-sm" style="color: #ffffff" class="button-click"
                    style="color: #ffffff">Disable</button>
                <br>
                <br>
                <table class="table table-striped  border-warning" style="max-width: 100%">
                    <tr class="bg-warning text-center">
                        <th></th>
                        <th>No</th>
                        <th field="name" sortable="true">Staff Name</th>
                        <th field="user_type" sortable="true">User Type</th>
                        <th field="group_name" sortable="true">Group Name</th>
                        <th field="active" sortable="true">Status</th>
                        <th> </th>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="groupCheckbox" /></td>
                        <td>1</td>
                        <td>Agus Salim</td>
                        <td>Admin</td>
                        <td>management</td>
                        <td>Active</td>
                        <td style="max-width: 40px"><button type="button" class="btn btn-warning btn-sm"
                                style="color: #1b1a1b" class="button-click">
                                <a href="/edit_user_management" style="color: #1b1a1b"> Edit User</a></button></td>
                    </tr>

                </table>
            </div>
        </section>
    @endsection
</body>

</html>
