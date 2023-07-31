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
                {{-- Item3 --}}
                <li class="nav-item">
                    <a class="nav-link @yield('collection_day')" href="{{ route('collection_Days.index') }}">Days</a>
                </li>
                {{-- Item3 --}}
                <li class="nav-item">
                    <a class="nav-link @yield('daily_collection')" href="{{ route('daily_Collections.index') }}">Daily hunt</a>
                </li>
                {{-- Item3 --}}
                <li class="nav-item">
                    <a class="nav-link @yield('account_inventory')" href="{{ route('account_Inventories.index') }}">Accounts inventories</a>
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
                        <li><a class="dropdown-item @yield('collection_dayCreate')" href="{{ route('collection_Days.create') }}">Day</a></li>
                        <li><a class="dropdown-item @yield('daily_collectionsCreate')" href="{{ route('daily_Collections.create') }}">Daily hunt</a></li>
                        <li><a class="dropdown-item @yield('account_inventoryCreate')" href="{{ route('account_Inventories.create') }}">Account inventory</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
