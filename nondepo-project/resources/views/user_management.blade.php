<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('sidebar/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MTKI SBY | NonDepot</title>
</head>

<body>
    @extends('layouts.sidebarcopy')
    @section('content')
        <section class="home-section">
            <div class="text" style="font-size: 40px">User Management</div>
            <br>
            <div data-aos="fade-left" data-aos-duration="300">

                <div class=" table-container shadow p-3 mb-5 bg-white rounded" style="max-width: 98%">

                    <button type="button" class="btn btn-secondary btn-sm" style="color: #ffffff" class="button-click"
                        style="color: #ffffff" id="disable_user">Disable</button>
                    <button type="button" class="btn btn-success btn-sm" style="color: #ffffff" class="button-click"
                        style="color: #ffffff" id="enable_user">Enable</button>
                    <br>
                    <br>
                    <table class="table table-striped  border-warning" style="max-width: 100%">
                        <tr class="bg-warning text-center">
                            <th> </th>
                            <th>No</th>
                            <th field="name" sortable="true">Username</th>
                            <th field="user_type" sortable="true">Email</th>
                            <th field="group_name" sortable="true">Phone</th>
                            <th field="active" sortable="true">Role</th>
                            <th>Status User</th>
                            <th> </th>
                        </tr>
                        @php
                            $counter = 1;
                        @endphp
                        @foreach ($users as $user)
                            <tr>
                                <td class="text-center"><input type="checkbox" name="groupCheckbox" /></td>
                                <td class="text-center">{{ $counter }}</td>
                                <td class="text-center nameUsername">{{ $user->username }}</td>
                                <td class="text-center">{{ $user->email }}</td>
                                <td class="text-center">{{ $user->phone }}</td>
                                <td class="text-center">{{ $user->role }}</td>
                                <td class="text-center">{{ $user->status_user }}</td>
                                <td class="text-center"><a
                                        href="{{ route('edit_user_management', ['name' => $user->username]) }}"><button
                                            type="button" class="btn btn-warning btn-sm">
                                            Edit User
                                        </button>
                                    </a> </td>
                            </tr>
                            @php
                                $counter += 1;
                            @endphp
                        @endforeach

                    </table>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Ketika tombol Nonaktifkan diklik
                document.getElementById("disable_user").addEventListener("click", function() {
                    // Temukan semua kotak centang yang dicentang
                    var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');

                    checkboxes.forEach(function(checkbox) {
                        // Dapatkan nama modul yang sesuai
                        var moduleName = checkbox.closest("tr").querySelector(".nameUsername")
                            .textContent;
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: '{{ route('disable_user') }}',
                            method: 'POST',
                            data: {
                                'user': moduleName,

                            },
                            dataType: 'json',
                            success: function(response) {
                                console.log('Nilai berhasil diperbarui ke database');
                                console.log(response);
                                window.location.reload();

                            },
                            error: function(error) {
                                console.error('Gagal memperbarui nilai ke database: ' +
                                    error);

                            }

                        });


                        // Me-refresh halaman setelah tindakan selesai

                    });

                });
            });
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Ketika tombol Nonaktifkan diklik
                document.getElementById("enable_user").addEventListener("click", function() {
                    // Temukan semua kotak centang yang dicentang
                    var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');

                    checkboxes.forEach(function(checkbox) {
                        // Dapatkan nama modul yang sesuai
                        var moduleName = checkbox.closest("tr").querySelector(".nameUsername")
                            .textContent;
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: '{{ route('enable_user') }}',
                            method: 'POST',
                            data: {
                                'user': moduleName,

                            },
                            dataType: 'json',
                            success: function(response) {
                                console.log('Nilai berhasil diperbarui ke database');
                                console.log(response);
                                window.location.reload();

                            },
                            error: function(error) {
                                console.error('Gagal memperbarui nilai ke database: ' +
                                    error);

                            }
                        });

                        // Me-refresh halaman setelah tindakan selesai


                    });

                });
            });
        </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @endsection
</body>

</html>
