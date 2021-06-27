<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">
                <img class="d-inline-block" width="32px" height="30.61px" src="" alt="">
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">MENU UTAMA</li>
            <li class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="{{ Request::routeIs('user') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user') }}"><i class="fas fa-fire"></i><span>Pengguna</span></a>
            </li>
            <li class="{{ Request::routeIs('antrian') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('antrian') }}"><i class="fas fa-fire"></i><span>Antrian</span></a>
            </li>
        </ul>

    </aside>
</div>
