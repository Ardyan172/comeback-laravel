<!doctype html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/dist/css/adminlte.min.css">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- laravel jetstream -->
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <title>Website Kocheng Oyen</title>
  </head>
  <body class="hold-transition layout-top-nav">

    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
          <a href="{{ asset('adminlte') }}/index3.html" class="navbar-brand">
            <img src="{{ asset('adminlte') }}/dist/img/profil.jpg" alt="Your Profil" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">{{ Auth::user()->name }}</span>
          </a>

          <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse nav-pills order-3" id="navbarCollapse">
            <!-- Top navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('pelanggan') }}" class="nav-link {{ request()->routeIs('pelanggan') ? 'active' : '' }}">Pelanggan</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin') }}" class="nav-link {{ request()->routeIs('admin') ? 'active' : '' }}">Admin</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('siswa') }}" class="nav-link {{ request()->routeIs('siswa') ? 'active' : '' }}">Siswa</a>
              </li>
              <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Fitur Lainnya</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                  <li><a href="#" class="dropdown-item">Beberapa Aksi</a></li>
                  <li><a href="#" class="dropdown-item">Beberapa aksi yang lainnya</a></li>
                </ul>
              </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-0 ml-md-3">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Cari" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>

          <!-- Right navbar links -->
          <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                  <!-- Message Start -->
                  <div class="media">
                    <img src="{{ asset('adminlte') }}/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                    <div class="media-body">
                      <h3 class="dropdown-item-title">
                        Jess no limit
                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                      </h3>
                      <p class="text-sm">Panggil aku kapanpun kau bisa</p>
                      <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 jam lalu</p>
                    </div>
                  </div>
                  <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <!-- Message Start -->
                  <div class="media">
                    <img src="{{ asset('adminlte') }}/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                    <div class="media-body">
                      <h3 class="dropdown-item-title">
                        Brandon Kent
                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                      </h3>
                      <p class="text-sm">Aku mendapatkan pesanmu bro</p>
                      <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Jam Lalu</p>
                    </div>
                  </div>
                  <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <!-- Message Start -->
                  <div class="media">
                    <img src="{{ asset('adminlte') }}/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                    <div class="media-body">
                      <h3 class="dropdown-item-title">
                        Sarah Viloid
                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                      </h3>
                      <p class="text-sm">Apa kabar?</p>
                      <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Jam Lalu</p>
                    </div>
                  </div>
                  <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">Lihat semua pesan</a>
              </div>
            </li>

            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">15 Notifikasi</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fas fa-envelope mr-2"></i> 4 Pesan Baru
                  <span class="float-right text-muted text-sm">3 Menit</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fas fa-users mr-2"></i> 8 Permintaan Pertemanan
                  <span class="float-right text-muted text-sm">12 Jam</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fas fa-file mr-2"></i> 3 Laporan Baru
                  <span class="float-right text-muted text-sm">2 Hari</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">Lihat Semua Notifikasi</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
              </a>
            </li>
          </ul>
        </div>


        <!-- profil photo laravel jetstream -->
        <div class="ml-3 relative">
          <x-jet-dropdown align="right" width="48">
            <x-slot name="trigger">
              @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
              <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
              </button>
              @else
              <span class="inline-flex rounded-md">
                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                  {{ Auth::user()->name }}

                  <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </button>
              </span>
              @endif
            </x-slot>

            <x-slot name="content">
              <!-- Account Management -->
              <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Manage Account') }}
              </div>

              <x-jet-dropdown-link href="{{ route('profile.show') }}">
                {{ __('Profile') }}
              </x-jet-dropdown-link>

              @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
              <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                {{ __('API Tokens') }}
              </x-jet-dropdown-link>
              @endif

              <div class="border-t border-gray-100"></div>

              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-jet-dropdown-link href="{{ route('logout') }}"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                {{ __('Log Out') }}
              </x-jet-dropdown-link>
            </form>
          </x-slot>
        </x-jet-dropdown>
      </div>
    </nav>
    <!-- /.navbar -->


    @if (Route::has('login'))
    @auth
    <!-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">OK</a> -->
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Gabung</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Daftar</a>
    @endif
    @endauth
    @endif

    @if (Route::has('login'))
    <!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> -->
      <div class="content-wrapper">
        <div class="content-header">
          <div class="container-md">
            <div class="row mb-3">
              <!-- judul -->
              <div class="offset-md-3 col-md-6">
                <h1 class="m-0 text-center">@yield('judulPelanggan')</h1>
              </div>
            </div>

            <div class="row mb-3">
                <!-- hanya di halaman pelanggan -->
                @yield('tombolTambah')
                <!-- content -->
            </div>

            @yield('konten')
          </div> 
          @else
          <h1>Selamat Datang Di Website Kocheng Oyen</h1>
          <!-- </div> -->
          @endif
        </div>
      </div>
    </div>

    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item {{ request()->routeIs('home') ? 'active' : '' }}"><a class="page-link" href="{{ route('home') }}">1</a></li>
        <li class="page-item {{ request()->routeIs('pelanggan') ? 'active' : '' }}"><a class="page-link" href="{{ route('pelanggan') }}">2</a></li>
        <li class="page-item {{ request()->routeIs('admin') ? 'active' : '' }}"><a class="page-link" href="{{ route('admin') }}">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 0.1
      </div>
      <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Website Kocheng Oren</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->


    <!-- My Bootstrap -->
    <script src="{{ asset('bootstrap') }}/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="{{ asset('adminlte') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte') }}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('adminlte') }}/dist/js/demo.js"></script>

    <!-- script saya -->
    <script src="{{ asset('js/script.js') }}"></script>

    @stack('modals')
    <!-- laravel jetstream -->
    @livewireScripts
  </body>
  </html>