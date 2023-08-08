<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FASILKOM UNSIKA | @yield('title')</title>
    <!-- My Icon -->
    <link rel="icon" href="{!! asset('assets/logo.png') !!}"/>
    <!-- CSS & JS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- My Style -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-grey sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="/assets/navbar.png" width="220" height="100" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#btn">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="btn">
                <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item">
                        <a class="nav-link @yield('home') mr-3" href="/">Beranda</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/sejarah">
                            <i class="bi bi-clock-history"></i> Sejarah</a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/visi-misi-tujuan">
                            <i class="bi bi-journal-bookmark"></i> Visi, Misi & Tujuan</a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/tenaga-pendidik">
                            <i class="bi bi-person-video3"></i> Tenaga Pendidik</a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/tenaga-kependidikan">
                            <i class="bi bi-person-workspace"></i> Tenaga Kependidikan</a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/fasilitas">
                            <i class="bi bi-laptop"></i> Fasilitas</a>
                        </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hallo! {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link @yield('home') mr-3" href="/">Beranda</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="/sejarah">Sejarah</a></li>
                          <li><a class="dropdown-item" href="/visi-misi-tujuan">Visi, Misi & Tujuan</a></li>
                          <li><a class="dropdown-item" href="/tenaga-pendidik">Tenaga Pendidik</a></li>
                          <li><a class="dropdown-item" href="/tenaga-kependidikan">Tenaga Kependidikan</a></li>
                          <li><a class="dropdown-item" href="/fasilitas">Fasilitas</a></li>
                        </ul>
                      </li>

                    <li class="nav-item">
                        <a class="nav-link @yield('login')" href="/login"><i class="bi bi-box-arrow-in-right"></i>
                        Login
                        </a>
                    </li>
                @endauth
                </ul>
            </div>
        </div>
    </nav>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div>
    </div>
    <script>
        feather.replace()
    </script>
</body>
</html>
