<div class="sidebar">
    <img class="sidebarLogo" src="{{ URL('/images/logo.png') }}">
    <div class="divider"></div>

    <div class="sidebarContent">
        @can('admin')
            <form method="GET" action="{{ route('dashboard') }}">
                @csrf
                <button type="submit" class="sidebarItem{{ Request::is('dashboard') ? '-selected' : '' }}">
                    Dashboard
                </button>
            </form>
        @endcan
        @can('view', App\Models\Product::class)
            <form method="GET" action="{{ route('catalog') }}">
                @csrf
                <button type="submit" class="sidebarItem{{ Request::is('catalogus') ? '-selected' : '' }}">
                    Catalogus
                </button>
            </form>
        @endcan
        @can('member')
            <form method="GET" action="{{ route('reservationHistory') }}">
                @csrf
                <button type="submit" class="sidebarItem{{ Request::is('reserveringen') ? '-selected' : '' }}">
                    Reserveringen
                </button>
            </form>
            <form method="GET" action="{{ route('loanHistory') }}">
                @csrf
                <button type="submit" class="sidebarItem{{ Request::is('uitleningen') ? '-selected' : '' }}">
                    Uitleningen
                </button>
            </form>
        @endcan
        @can('worker', App\Models\Reservation::class)
            <form method="GET" action="{{ route('allReservations') }}">
                @csrf
                <button type="submit" class="sidebarItem{{ Request::is('alleReserveringen') ? '-selected' : '' }}">
                    Alle Reserveringen
                </button>
            </form>
        @endcan
        @can('worker', App\Models\User::class)
            <form method="GET" action="{{ route('userManagement') }}">
                @csrf
                <button type="submit" class="sidebarItem{{ Request::is('gebruikersBeheren') ? '-selected' : '' }}">
                    Gebruikers Beheren
                </button>
            </form>
        @endcan
        @can('admin')
            <form method="GET" action="{{ route('allCategories') }}">
                @csrf
                <button type="submit" class="sidebarItem{{ Request::is('categorieën') ? '-selected' : '' }}">
                    Categorieën
                </button>
            </form>
        @endcan
        @can('update', App\Models\Product::class)
            <form method="GET" action="{{ route('allProducts') }}">
                @csrf
                <button type="submit" class="sidebarItem{{ Request::is('producten') ? '-selected' : '' }}">
                    Producten
                </button>
            </form>
        @endcan
    </div>

    <div class="divider"></div>
    <div class="sidebarBottom">
        <div class="userInfo">
            <div>{{ Auth::user()->email }}</div>
            <div
                class="sidebarUserRole badge-pill mt-1 {{ match (Auth::user()->role) {
                    'admin' => 'badge-danger',
                    'employee' => 'badge-warning',
                    default => 'badge-Primary',
                } }}">
                {{ Auth::user()->role }}
            </div>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn bg-danger text-white p-1">Uitloggen</button>
        </form>
    </div>
</div>
