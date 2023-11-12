<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTKI SBY | NonDepo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Analisis link --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>
    <div class="main-container d-flex">
        <div class=" menu-btn-rn text-center bg-warning">
            <i class="fas fa-bars" style="font-size: 30px;padding-top:10px"></i>
        </div>
        <div id="side_nav" class="sidebar">
            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">

                <header style="height: 170px; margin-top:-20px;margin-left:-8px; padding-right:8px;">
                    <button type="button" class="btn btn-warning btn-sm text-right close-btn-rn d-md-none d-block "
                        style="margin-left: 15em; margin-top:20px;">
                        <i class="fas fa-times bg-warning"></i>
                    </button>

                    <div class="images-profile">
                        <img src="{{ asset('images/samudera.png') }}" alt="">

                    </div>
                    <h5 class="text-type" style="color: white">{{ auth()->user()->username }}</h5>

                </header>
            </div>

            <div class="scrollbar-sidebar" style="; max-height:500px;margin-top:-20px">
                <div class="menu">
                    <div class="item">
                        <a class="sub-btn" href="{{ url('/dashboard') }}"><i
                                class="fas fa-tachometer-alt"></i>Dashboard<i></i></a>
                    </div>
                    @foreach ($showdata as $menuItem)
                        @if ($menuItem['module_status'] != '0')
                            <div class="item">
                                <a href="{{ $menuItem['module_link'] }}" class="sub-btn"
                                    data-index="{{ $menuItem['module_id'] }}"><i
                                        class="{{ $menuItem['module_icon'] }}"></i>{{ $menuItem['module_name'] }}
                                    @if (count($menuItem->sub_m_module) > 0)
                                        <i class="fas fa-angle-right dropdown"></i>
                                    @endif
                                </a>
                                <div class="sub-menu" data-index="{{ $menuItem['module_id'] }}">
                                    @foreach ($menuItem->sub_m_module as $subItem)
                                        @if ($subItem['module_status'] != '0')
                                            <a href="{{ url($subItem['module_link']) }}"
                                                class="sub-item">{{ $subItem['module_name'] }}</a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach

                    @if (auth()->user()->role == 'admin')
                        <div class="item">
                            <a class="sub-btn"><i class="fas fa-database"></i>Setup<i
                                    class="fas fa-angle-right dropdown"></i></a>
                            <div class="sub-menu">
                                <a href="{{ url('/module_management') }}" class="sub-item">Module Management</a>
                                <a href="{{ url('/access_management') }}" class="sub-item">Access Management</a>
                                <a href="{{ url('/user_management') }}" class="sub-item">User Management</a>
                            </div>
                        </div>
                    @endif

                </div>
                <div class="item text-center">
                    <a href="{{ url('/logout') }}" class="sub-btn" style="color: black"><i class="fas fa-sign-out-alt"
                            style="color: black"></i>Logout </a>
                </div>
            </div>


        </div>
        <div class="content">
            <nav class="navbar navbar-expand-md navbar-lightsticky-top" style="background:   #FAF9F6;">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">
                        <button class="btn px-1 py-0 open-btn me-2"><i class="fa-solid fa-bars fa-2xl"></i></button>
                        <a class="navbar-brand fs-4" href="#"></a>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
    </div>



    <script>
        $(document).ready(function() {
            $('.close-btn-rn').click(function() {
                $('#side_nav').addClass('active')

                $('.menu-btn-rn').addClass('active'); // Mengubah margin-left agar sidebar hilang ke kiri
            });
        });

        $('.open-btn').on('click', function() {
            $('.sidebar').addClass('active');

        });
    </script>
    <script>
        AOS.init();
    </script>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/cameraon.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>
