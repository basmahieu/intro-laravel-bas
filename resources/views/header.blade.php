<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <nav class="navbar navbar-expand-lg mt-2 px-0 ">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="img/yumi-logo.png" width="96" height="96" class="d-inline-block align-top" alt="Logo"></a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item pr-2">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item pr-2">
                            <a class="nav-link" href="{{ url('/#menu') }}"> Menu</a> </li>
                        <li class="nav-item pr-2">
                            <a class="nav-link" href="{{ url('/reviews') }}">Reviews</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container my-lg-5">
                <h1 class="font-weight-bold">@yield('title')</h1>
                @yield('image')
            </div>

        </div>
        <div class="col-lg-6 d-none d-lg-block" style="background:url(img/hero.png) no-repeat center center;background-size:cover;">
        </div>
        <div class="col-lg-6 d-lg-none">
            <img class="img-fluid" src="img/hero.png" alt="">
        </div>
    </div>