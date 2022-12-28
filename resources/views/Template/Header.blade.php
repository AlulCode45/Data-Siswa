@php
    $role = '';
    if (Auth::guard('operator')->check()) {
        $role = 'operator';
    } elseif (Auth::guard('siswa')->check()) {
        $role = 'siswa';
    }
@endphp
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
            <span class="d-none d-lg-block">DataSiswa</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    @if ($role == 'operator')
                        <img src="{{ asset('/foto_profile/'.Auth::guard('operator')->user()->foto_profile) }}" alt="profile" class="rounded rounded-circle" style="width: 40px; height: 40px;">
                    @elseif ($role == 'siswa')
                        <img src="{{ asset('assets/img/profile-img.png') }}" alt="Profile" class="rounded-circle"
                    @endif
                    <span class="d-none d-md-block dropdown-toggle ps-2">
                        @if ($role == 'operator')
                            {{ Auth::guard('operator')->user()->name }}
                        @elseif ($role == 'siswa')
                            {{ Auth::guard('siswa')->user()->nama_siswa }}
                        @endif
                    </span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>
                            @if ($role == 'operator')
                                {{ Auth::guard('operator')->user()->name }}
                            @elseif ($role == 'siswa')
                                {{ Auth::guard('siswa')->user()->nama_siswa }}
                            @endif
                        </h6>
                        <span>
                            {{ $role }}
                        </span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    @if($role == 'operator')
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('operator.profile') }}">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    @endif
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
