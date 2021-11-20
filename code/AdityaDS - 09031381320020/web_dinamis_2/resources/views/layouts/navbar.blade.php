<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ url('/') }}"
                        class="nav-link px-2 {{ request()->is('/') ? 'text-secondary' : 'text-white' }}">Home</a></li>
                @auth
                    @if (auth()->user()->role == 'Admin')
                        <li><a href="{{ url('page/admin') }}"
                                class="nav-link px-2  {{ request()->is('page/admin') ? 'text-secondary' : 'text-white' }}">Page
                                Admin</a></li>
                    @endif
                    @if (auth()->user()->role != 'Mahasiswa')
                        <li><a href="{{ url('page/dosen') }}"
                                class="nav-link px-2  {{ request()->is('page/dosen') ? 'text-secondary' : 'text-white' }}">Page
                                Dosen</a></li>
                    @endif
                    @if (auth()->user()->role != 'Dosen')
                        <li><a href="{{ url('page/mahasiswa') }}"
                                class="nav-link px-2  {{ request()->is('page/mahasiswa') ? 'text-secondary' : 'text-white' }}">Page
                                Mahasiswa</a></li>
                    @endif
                @endauth
            </ul>

            @auth
                <span class="px-2">{{ auth()->user()->name }}</span>
                <div class="text-end">
                    <a href="{{ route('logout') }}" class="btn btn-outline-light me-2">Logout</a>
                </div>
            @endauth

            @guest
                <div class="text-end">
                    <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                </div>
            @endguest
        </div>
    </div>
</header>
