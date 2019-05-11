<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <title>DMAJMNHS Balik Eskwela</title>
</head>
<body>
@if(request()->session()->has('is_admin'))
    @include('navs/admin_navbar')
@else
    @include('navs/user_navbar')
@endif

<br>
<div class="container">
    <div class="row">
        {{-- MENU --}}
        <div class="col-lg-3 mb-5">
            <div class="card card-body">
                <div class="nav flex-column nav-pills">
                    <h5 class="text-primary"><i class="fas fa-cogs"></i> <b>Dashboard</b></h5>
                    <br>
                    <a href="{{route('admin.dashboard.all')}}" class="nav-link">All</a>
                    <a href="{{route('admin.dashboard.males')}}" class="nav-link">Males</a>
                    <a href="{{route('admin.dashboard.females')}}" class="nav-link">Females</a>
                    <a href="{{route('admin.dashboard.eleven')}}" class="nav-link">Grade 11</a>
                    <a href="{{route('admin.dashboard.twelve')}}" class="nav-link">Grade 12</a>
                </div>
            </div>
        </div>

        {{-- CONTENTS --}}
        <div class="col-lg-9">

            <div class="card card-body">
                <form method="POST" action="{{route('admin.dashboard.search')}}" class="form">
                    @csrf
                    <div class="form-group">
                        <div class="input-group search">
                            <input  placeholder="Search for a name..." name="key" type="text" class="form-control">
                            <div class="append">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <div class="card card-body">
                <h4 class="text-primary"><i class="fas fa-users"></i><b> All Enrollees</b></h4>
                <br>
                @if(sizeof($data) ===0)
                    <p >Nope! No enrollees at the moment. <i class="far fa-frown"></i></p>
                @endif
                @include('admin.pills.data_render')
            </div>
        </div>
    </div>
</div>
<br>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>