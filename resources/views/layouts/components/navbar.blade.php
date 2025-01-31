<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('welcome') }}">
            <img src="{{ Vite::asset('resources/images/home/pngtree-modern-kitchen-logo-png-image_4122137.jpg') }}" class="mr-2 rounded-circle border border-light" width="70" height="70" alt="Inventory Logo">
            <span class="text-warning">Masak Yuks</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link text-light {{ request()->routeIs('welcome') ? 'active' : '' }}" aria-current="page" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-light {{ request()->routeIs('item.*') ? 'active' : '' }}" href="{{ route('item.index') }}">StOCK</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
