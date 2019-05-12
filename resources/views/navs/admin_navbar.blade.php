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
                    <a href="{{route('admin.statistics.main')}}" class="nav-link">Statistics</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <div class="btn-group">
                        <a style="cursor: pointer" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Output
                        </a>
                        <div class="navdrop dropdown-menu dropdown-menu-sm-right">
                            <div class="dropdown-header">
                                Bulk Data
                            </div>
                            <a class="dropdown-item" href="{{route('admin.dashboard.download.all')}}"><i class="fas fa-download text-primary"></i> All to Excel</a>
                            <a class="dropdown-item" href="{{route('admin.dashboard.download.males')}}"><i class="fas fa-download text-primary"></i> Males to Excel</a>
                            <a class="dropdown-item" href="{{route('admin.dashboard.download.females')}}"><i class="fas fa-download text-primary"></i> Females to Excel</a>
                            <a class="dropdown-item" href="{{route('admin.dashboard.download.eleven')}}"><i class="fas fa-download text-primary"></i> Grade Eleven to Excel</a>
                            <a class="dropdown-item" href="{{route('admin.dashboard.download.twelve')}}"><i class="fas fa-download text-primary"></i> Grade Twelve to Excel</a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-header">
                                Categorized Data
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <a class="dropdown-item" href="{{route('admin.dashboard.download.elevenMales')}}"><i class="fas fa-download text-primary"></i> Grade Eleven Males to Excel</a>
                                    <a class="dropdown-item" href="{{route('admin.dashboard.download.elevenFemales')}}"><i class="fas fa-download text-primary"></i> Grade Eleven Females to Excel</a>
                                    <a class="dropdown-item" href="{{route('admin.dashboard.download.twelveMales')}}"><i class="fas fa-download text-primary"></i> Grade Twelve Males to Excel</a>
                                    <a class="dropdown-item" href="{{route('admin.dashboard.download.twelveFemales')}}"><i class="fas fa-download text-primary"></i> Grade Twelve Females to Excel</a>
                                </div>
                                <div class="col-lg-6">
                                    <a class="dropdown-item" href="{{route('admin.dashboard.download.downloadGasEleven')}}"><i class="fas fa-download text-primary"></i> Grade 11 GAS</a>
                                    <a class="dropdown-item" href="{{route('admin.dashboard.download.downloadGasTwelve')}}"><i class="fas fa-download text-primary"></i> Grade 12 GAS</a>
                                    <a class="dropdown-item" href="{{route('admin.dashboard.download.downloadTvlEleven')}}"><i class="fas fa-download text-primary"></i> Grade 11 TVL</a>
                                    <a class="dropdown-item" href="{{route('admin.dashboard.download.downloadTvlTwelve')}}"><i class="fas fa-download text-primary"></i> Grade 12 TVL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>