<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MTKI SBY | NonDepo</title>
</head>

<body>
    @include('sidebar')
    <section class="home-section">
        <div class="text" style="font-size: 40px">Edit Module</div>
        <div class="wrapper">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6" style="width:400px">
                        <label for="inputEmail4">Username</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Staff</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Staff">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">User Type</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="User">
                    </div>
                    <div class="form-group col-md-6" style="width: 600px">
                        <label for="inputAddress">Group</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Group">
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Change Password</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Password">
                    </div>
                    <div class="form-group col-md-6" style="width: 600px">
                        <label for="inputAddress">Confirm Password</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Password">
                    </div>

                </div>
                <button type="submit" class="btn btn-success">Edit</button>
            </form>
        </div>


    </section>
</body>

</html>
