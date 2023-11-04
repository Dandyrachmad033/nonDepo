<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MTKI SBY | NonDepo</title>
</head>

<body>
    @include('sidebar')
    <section class="home-section">
        <div class="text" style="font-size: 40px;">Edit Access</div>

        <table class="table table-hover" style="width:85%;"">
            <input type='hidden' name='group_id' id='group_id' class='form-control'>
            <thead>
                <tr class='warning'>
                    <th>Module Name</th>
                    <th>
                        <span class="label
            label-danger">
                            <i class="fa fa-lock"></i> Forbidden
                        </span>
                    <th>
                        <span class="label label-success">
                            <i class="fa fa-plus"></i> Insert
                        </span>
                    </th>
                    <th>
                        <span class="label label-warning">
                            <i class="fa fa-edit"></i> Update
                        </span>
                    </th>
                    <th>
                        <span class="label label-danger">
                            <i class="fa fa-minus"></i> Delete
                        </span>
                    </th>
                    <th>
                        <span class="label label-info">
                            <i class="fa fa-print"></i> Print
                        </span>
                    </th>
                    <th>
                        <span class="label label-primary">
                            <i class="fa fa-thumbs-up"></i> Approval 1
                        </span>
                    </th>
                    <th>
                        <span class="label label-primary">
                            <i class="fa fa-thumbs-up"></i> Approval 2
                        </span>
                    </th>
                    <th>
                        <span class="label label-primary">
                            <i class="fa fa-thumbs-up"></i> Approval 3
                        </span>
                    </th>
                </tr>

                <tr>
                    <td>Plugin</td>
                    <td><input type="checkbox" name="groupCheckbox" /></td>
                    <td><input type="checkbox" name="groupCheckbox" /></td>
                    <td><input type="checkbox" name="groupCheckbox" /></td>
                    <td><input type="checkbox" name="groupCheckbox" /></td>
                    <td><input type="checkbox" name="groupCheckbox" /></td>
                    <td><input type="checkbox" name="groupCheckbox" /></td>
                    <td><input type="checkbox" name="groupCheckbox" /></td>
                    <td><input type="checkbox" name="groupCheckbox" /></td>
                </tr>
            </thead>

        </table>

    </section>
</body>

</html>
