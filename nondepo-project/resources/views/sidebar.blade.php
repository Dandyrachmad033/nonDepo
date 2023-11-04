<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTKI SBY | NonDepo</title>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body style="background: #ffc107">
    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>
    <div class="side-bar">
        <header>
            <div class="close-btn" style="padding-right: 10px">
                <i class="fas fa-times"></i>
            </div>
            <div style="padding-left: 7px; margin-bottom: -10px">
                <img src="{{ asset('images/samudera.png') }}" alt="">

            </div>
            <h5 class="text-type">Admin</h5>
        </header>
        <div class="scrollbar-sidebar" style="overflow-y: scroll; max-height:500px;scrollbar-width: thin;">
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

                <div class="item">
                    <a class="sub-btn"><i class="fas fa-database"></i>Setup<i
                            class="fas fa-angle-right dropdown"></i></a>
                    <div class="sub-menu">
                        <a href="{{ url('/module_management') }}" class="sub-item">Module Management</a>
                        <a href="{{ url('/access_management') }}" class="sub-item">Access Management</a>
                        <a href="{{ url('/user_management') }}" class="sub-item">User Management</a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer-sidebar">
            <div class="item text-center">
                <a href="{{ url('/logout') }}" class="sub-btn" style="color: black"><i class="fas fa-sign-out-alt"
                        style="color: black"></i>Logout </a>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
