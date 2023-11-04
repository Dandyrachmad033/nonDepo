<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTKI SBY | NonDepo</title>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>
    {{-- Sidebar --}}
    <div class="main-container d-flex">
        <div class="sidebar bg-primaryDark col-lg-2 col-md-35 col-sm-6 col-8" id="side_nav">
            <div style="position: fixed" class="sidebar col-lg-2 col-md-35 col-sm-6 col-8" id="side_nav_content">
                <div class="d-block pb-2 w-100 pe-0 me-0 mb-4 bg-secondaryDark justify-content-end">
                    <div class="row pt-2 ps-3 pe-3 m-0">
                        <button class="btn d-md-none d-block close-btn py-0 px-2 text-white bg-danger"
                            style="width: fit-content"><i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div
                        class="row d-flex flex-column pb-3 pt-0 pe-0 ps-0 m-0 justify-content-center align-items-center w-100">
                        <div class="my-4 rounded-circle container-fluid p-0"
                            style="width: 100px; height: 100px; overflow:hidden;">
                            <img src="{{ asset('assets/img/samudera-indonesia.webp') }}" alt=""
                                class="img-fluid w-100" style="height: 100px; object-fit:cover;">
                        </div>
                        <h3 class="text-center text-white">Admin</h3>
                    </div>
                </div>
                <ul class="list-unstyled px-2">
                    <li class="active">
                        <a href="#" class="text-decoration-none px-3 py-3 d-block">
                            <i class="fa-solid fa-house me-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="">
                        <a href="#"
                            class="text-decoration-none px-3 py-3 d-block d-flex justify-content-between align-items-center">
                            <span><i class="fa-solid fa-plug me-2"></i>
                                Reefer Service</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </li>
                    <li class="">
                        <a href="#" class="text-decoration-none px-3 py-3 d-block">
                            <i class="fa-solid fa-rotate me-2"></i>
                            Stuffing Stripping
                        </a>
                    </li>
                    <li class="">
                        <a href="#" class="text-decoration-none px-3 py-3 d-block">
                            <i class="fa-solid fa-gear me-2"></i>
                            Setup
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content">
            <nav class="navbar navbar-expand-md navbar-light bg-light border-bottom sticky-top">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">
                        <button class="btn px-1 py-0 open-btn me-2"><i class="fa-solid fa-bars"></i></button>
                        <a class="navbar-brand fs-4" href="#"></a>
                    </div>
                    <h4 class="h4 text-primaryDark">Dashboard</h4>
                </div>
            </nav>

            <div class="dashboard-content px-3 pt-3">
                @yield('content')
            </div>
        </div>
    </div>
</body>
<script defer src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="https://kit.fontawesome.com/6b61509af7.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(".sidebar ul li").on('click', function() {
        $(".sidebar ul li.active").removeClass('active');
        $(this).addClass('active');
    });

    $('.open-btn').on('click', function() {
        $('.sidebar').addClass('active');

    });


    $('.close-btn').on('click', function() {
        $('.sidebar').removeClass('active');

    });

    const toggle = document.getElementById('sidebar-toggle');
    toggle.onclick = function() {
        toggle.classList.toggle('active')
    }
</script>
<script>
    var canvas = document.querySelector('canvas');
    fitToContainer(canvas);

    function fitToContainer(canvas) {
        canvas.style.width = '100%';
        canvas.style.height = '100%';
        canvas.width = canvas.offsetWidth;
        canvas.height = canvas.offsetHeight;
    }
</script>

</html>
