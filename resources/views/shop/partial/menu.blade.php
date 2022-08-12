<!-- Nav bar Menu -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <div class="container-fluid px-4 px-lg-5">
        <a class="navbar-brand" href="#!">Book Store BOSS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link {{ Request::is('shop/dashboard') ? 'active' : ''}}" aria-current="page" href="{{route('shop.dashboard')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('shop/aboutus') ? 'active' : ''}}" href= "{{route('shop.dashboard.aboutus')}}">About</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('shop/contuctus') ? 'active' : ''}}" href="{{route('shop.dashboard.contuctus')}}">Contuct Us</a></li>
            </ul>
            <div class="d-flex">
                <a href="{{route('shop.dashboard.cart')}}">
                <button class="btn btn-outline-dark" type="submit" >
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>
                </a>
                <a href="{{route('shop.user.logout')}}">
                <button class="btn btn-outline-dark" type="submit" >
                    Logout
                </button>
                </a>
            </div>
        </div>
    </div>
</nav>