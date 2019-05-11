<nav class="shadow sticky-top navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand py-0" href="#">
            <img style="width: 50px;"
                 src="{{asset('assets/images/dmaj_logo.png')}}" alt="">
            <b>DMAJ Balik Eskwela</b>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Statistics</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Output</a>
                </li>
            </ul>
        </div>
    </div>
</nav>