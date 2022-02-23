<nav class="navbar navbar-expand-lg navbar-white bg-dark nav-pills flex-column flex-sm-row">
        <div class="container">
            <a class="navbar-brand" href="/">Test Company</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'home') ? 'active' : '' }} flex-sm-fill text-sm-center nav-link" aria-current="page" href="/">Home</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link {{ ($active === 'about Us') ? 'active' : '' }}" href="/about">About Us</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'products') ? 'active' : '' }}" href="/products">Products</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link {{ ($active === 'categiries') ? 'active' : '' }}" href="/categories">Categories</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link {{ ($active === 'contact Us') ? 'active' : '' }}" href="/contact">Contact</a>
                </li> -->
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button class="dropdown-item" type="submit">
                                    <i class="bi bi-box-arrow-right"></i> logout</a>
                                </button>
                            </form>
                        </li>
                    </ul>
                    </li>
                @else
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'login') ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>
            </div>
        </div>
</nav>