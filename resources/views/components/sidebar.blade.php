<nav>
    <div class="logo-name">
        <div class="logo-image">
            <img src="{{ asset('asset/img/profile.jpg') }}" alt="">
        </div>

        <span class="logo_name">Hamdani'A</span>
    </div>

    <div class="menu-items">
        <ul class="nav-links">
            <x-sidebar-link href="{{ url('dashboard') }}" :active="request()->is('dashboard')">
                <i class='bx bxs-dashboard'></i>
                <span class="link-name">Dashboard</span>
            </x-sidebar-link>
            <x-sidebar-link href="{{ url('teks') }}" :active="request()->is('teks')">
                <i class='bx bx-file'></i>
                <span class="link-name">Teks</span>
            </x-sidebar-link>
            <x-sidebar-link href="{{ url('file') }}" :active="request()->is('file')">
                <i class='bx bx-archive'></i>
                <span class="link-name">File</span>
            </x-sidebar-link>
            <x-sidebar-link href="{{ url('select') }}" :active="request()->is('select')">
                <i class='bx bx-category'></i>
                <span class="link-name">Select</span>
            </x-sidebar-link>
        </ul>

        <ul class="logout-mode">
            <li>
                <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="link-name">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
