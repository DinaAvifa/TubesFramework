<nav class="navbar navbar-expand-md navbar-light shadow-xl bg-app">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="img-fluid" src="{{ Vite::asset('resources/images/logo.png') }}" alt="image" style="width: 100px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                @php
                    $currentRouteName = Route::currentRouteName();
                @endphp
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link @if ($currentRouteName == 'home') active @endif">Home</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a href="{{ route('produk.index') }}" class="nav-link @if ($currentRouteName == 'produk.index') active @endif">Daftar Produk</a>
                    </li>
                @endauth
                <li class="nav-item">
                    <a href="{{ route('company') }}" class="nav-link @if ($currentRouteName == 'company') active @endif">Profile Perusahaan</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="background-color: #fff; border-radius: 20px; padding: 6px 12px;">
                            <i class="bi-person-circle"></i> {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="bi-person-fill"></i> {{ __('My profile') }}
                            </a>
                            <hr>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bi bi-lock"></i> {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
