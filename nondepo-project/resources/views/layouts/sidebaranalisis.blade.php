<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
@include('analisis.head')

<body>
    <div class="main-container d-flex">
        <div class=" menu-btn-rn text-center bg-warning">
            <i class="fas fa-bars" style="font-size: 30px;padding-top:10px"></i>
        </div>
        {{-- Sidebar Start --}}
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

            <div class="scrollbar-sidebar" style="max-height:500px;scrollbar-width: thin; margin-top:-20px">
                <div class="menu">
                    <div class="item">
                        <a class="sub-btn" href="{{ url('/dashboard') }}"><i
                                class="fas fa-tachometer-alt"></i>Dashboard<i></i></a>
                    </div>
                    @foreach ($showdata as $menuItem)
                        <div class="item">
                            <a href="{{ $menuItem['module_link'] }}" class="sub-btn"><i
                                    class="{{ $menuItem['module_icon'] }}"></i>{{ $menuItem['module_name'] }}
                                @if (count($menuItem->sub_m_module) > 0)
                                    <i class="fas fa-angle-right dropdown"></i>
                                @endif
                            </a>
                            <div class="sub-menu">
                                @foreach ($menuItem->sub_m_module as $subItem)
                                    <a href="{{ url($subItem['module_link']) }}"
                                        class="sub-item">{{ $subItem['module_name'] }}</a>
                                @endforeach
                            </div>
                        </div>
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
        {{-- Sidebar Ends --}}


        {{-- Content Start --}}
        <div class="content">
            {{-- Navbar Start --}}
            <nav class="navbar navbar-expand-md navbar-light bg-light border-bottom sticky-top">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">
                        <button class="btn px-1 py-0 open-btn me-2"><i class="fa-solid fa-bars"></i></button>
                        <a class="navbar-brand fs-4" href="#"></a>
                    </div>

                </div>
            </nav>
            {{-- Navbar Ends --}}


            {{-- Main Content Start --}}
            <div class="dashboard-content px-3 pt-3">
                @yield('content')
            </div>
            {{-- Main Content Ends --}}
        </div>
        {{-- Content Ends --}}
    </div>
    <script defer src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/6b61509af7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    {{-- <script src="https://cdn.datatables.net/v/bs5/dt-1.13.6/fh-3.4.0/r-2.5.0/sc-2.2.0/datatables.min.js"></script> --}}
    @stack('script')
    <script>
        // Sidebar
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
    {{-- <script>
        var canvas = document.querySelector('canvas');
        fitToContainer(canvas);

        function fitToContainer(canvas){
            canvas.style.width ='100%';
            canvas.style.height='100%';
            canvas.width  = canvas.offsetWidth;
            canvas.height = canvas.offsetHeight;
        }
    </script> --}}
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        const sidebar = document.querySelector(".sidebar");
        const content = document.querySelector(".content");

        content.addEventListener("scroll", () => {
            const scrollTop = content.scrollTop;
            sidebar.style.top = `${scrollTop}px`;
        });
    </script>
</body>

</html>
