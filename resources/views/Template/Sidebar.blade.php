@php
    $role = '';
    if (Auth::guard('operator')->check()) {
        $role = 'operator';
    } elseif (Auth::guard('siswa')->check()) {
        $role = 'siswa';
    }
@endphp

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="/{{ $role }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        @if ($role == 'operator')
            <li class="nav-item">
                <a class="nav-link " data-bs-target="#menu-siswa" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people"></i><span>Kelola Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="menu-siswa" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    @for($i = 2004; $i <= date('Y') + 1; $i++)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('operator.kelola_siswa',$i) }}">
                                <i class="bi bi-chevron-right"></i>
                                <span>{{ $i }}</span>
                            </a>
                        </li>
                    @endfor
                </ul>
            </li>
        @elseif ($role == 'siswa')
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="pages-blank.html">
                    <i class="bi bi-file-earmark"></i>
                    <span>Blank</span>
                </a>
            </li> --}}
        @endif
    </ul>
</aside><!-- End Sidebar-->
