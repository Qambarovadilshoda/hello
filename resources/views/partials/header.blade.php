<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{route('welcome')}}">
            <img src="images/logo.png" class="img-fluid logo-image">

            <div class="d-flex flex-column">
                <strong class="logo-text">Gotto</strong>
                <small class="logo-slogan">Online Job Portal</small>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-center ms-lg-5">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('welcome')}}">Homepage</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About Gotto</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ url('/post-show') }}">Job Listings</a></li>

                        <li><a class="dropdown-item" href="{{ url('/post-show-details') }}">Job Details</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>

                <li class="nav-item ms-lg-auto">
                    <a class="nav-link" href="#">Register</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link custom-btn btn" href="#">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>