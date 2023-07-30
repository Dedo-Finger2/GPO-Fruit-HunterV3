<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">GPO Fruit Hunter V3</a>

        {{-- Botão que vai aparecer apenas quando a navbar colapsar --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- Conteúdo da navbar --}}
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @yield('home')" aria-current="page" href="{{ route('home') }}">Home</a> {{-- Home --}}
                </li>

                {{-- Item1 --}}
                <li class="nav-item">
                    <a class="nav-link @yield('rarity')" href="{{ route('rarities.index') }}">Rarities</a>
                </li>
                {{-- Item2 --}}
                <li class="nav-item">
                    <a class="nav-link @yield('fruit')" href="{{ route('fruits.index') }}">Fruits</a>
                </li>
                {{-- Item3 --}}
                <li class="nav-item">
                    <a class="nav-link @yield('account')" href="{{ route('accounts.index') }}">Accounts</a>
                </li>

                {{-- Dropdown --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Creating
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item @yield('rarityCreate')" href="{{ route('rarities.create') }}">Rarity</a></li>
                        <li><a class="dropdown-item @yield('fruitCreate')" href="{{ route('fruits.create') }}">Fruit</a></li>
                        <li><a class="dropdown-item @yield('accountCreate')" href="{{ route('accounts.create') }}">Account</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
