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
                        <div class="input-group">
                            <input placeholder="Search for a name..." name="key" type="text" class="form-control">
                            <div class="append">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <div class="card card-body">
                <h4 class="text-primary"><i class="fas fa-users"></i><b> Search Results for: {{$key}}</b></h4>
                <br>
                @if(sizeof($data) ===0)
                    <p >Sorry. We cannot find a match. <i class="far fa-frown"></i></p>
                @endif
                <div class="accordion" id="accordionExample">
                    @foreach($data as $datum)

                        <div class="card datum">
                            <div class="card-header" data-toggle="collapse" data-target="#data_{{$datum->id}}" aria-expanded="true" aria-controls="{{$datum->id}}">
                                <p class="text-primary">
                                    <i class="fas fa-user"></i><b> {{$datum->first_name}} {{$datum->middle_name}} {{$datum->last_name}} {{$datum->suffix}}</b>
                                </p>
                            </div>

                            <div id="data_{{$datum->id}}" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">


                                            <div class="card mb-3 card-body">
                                                <h5 class="text-primary"><i class="fas fa-book"></i> <b>Educational Information</b></h5>
                                                <br>
                                                <p>LRN: <b>{{$datum->lrn}}</b></p>
                                                <p>Admission Level: <b>Grade {{$datum->admission_level}}</b></p>
                                                <p>Track: <b>{{$datum->track}}</b></p>
                                                <p>Previous School: <b>{{strtoupper($datum->previous_school)}}</b></p>
                                            </div>

                                            <div class="card mb-3 card-body">
                                                <h5 class="text-primary"><i class="fas fa-user"></i> <b>Biodata</b></h5>
                                                <br>
                                                <p>Name: <b>{{$datum->first_name}} {{$datum->middle_name}} {{$datum->last_name}} {{$datum->suffix}}</b></p>
                                                <p>Gender: <b>{{$datum->gender}}</b></p>
                                                <p>Social Assistance Program: <b>{{$datum->social_assistance}}</b></p>
                                                <p>Citizenship: <b>{{$datum->citizenship}}</b></p>
                                                <p>Birthplace: <b>{{$datum->birthplace}}</b></p>
                                                <p>Religion: <b>{{$datum->religion}}</b></p>
                                                <p>Birth Date: <small class="text-muted">(Month-Day-Year)</small> <b>{{$datum->birth_month}}-{{$datum->birth_day}}-{{$datum->birth_year}}</b></p>
                                            </div>

                                            <div class="card mb-3 card-body">
                                                <h5 class="text-primary"><i class="fas fa-map-marked"></i> <b>Address</b></h5>
                                                <br>
                                                <p>Barangay: <b>{{$datum->barangay}}</b></p>
                                                <p>Province: <b>{{$datum->province}}</b></p>
                                                <p>City: <b>{{$datum->city}}</b></p>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">

                                            <div class="card card-body mb-3">
                                                <h5 class="text-primary"><i class="fas fa-user-shield"></i> <b>Parent and Guardian's Information</b></h5>
                                                <br>
                                                <h5>Father</h5>
                                                <br>
                                                <p>First Name: <b>{{$datum->father_first_name}}</b></p>
                                                <p>Last Name: <b>{{$datum->father_last_name}}</b></p>
                                                <p>Mobile Number: <b>{{$datum->father_mobile_number}}</b></p>
                                                <hr>
                                                <h5>Mother</h5>
                                                <br>
                                                <p>First Name: <b>{{$datum->mother_first_name}}</b></p>
                                                <p>Last Name: <b>{{$datum->mother_last_name}}</b></p>
                                                <p>Mobile Number: <b>{{$datum->mother_mobile_number}}</b></p>
                                                <hr>
                                                <h5>Guardian</h5>
                                                <br>
                                                <p>First Name: <b>{{$datum->guardian_first_name}}</b></p>
                                                <p>Last Name: <b>{{$datum->guardian_last_name}}</b></p>
                                                <p>Mobile Number: <b>{{$datum->guardian_mobile_number}}</b></p>

                                            </div>

                                            <div class="card card-body mb-3">
                                                <h5 class="text-primary"><i class="fas fa-phone"></i> <b>Contact Information</b></h5>
                                                <br>
                                                <p>Telephone: <b>{{$datum->telephone_number}}</b></p>
                                                <p>Cellphone: <b>{{$datum->cellphone_number}}</b></p>
                                                <p>Email: <b>{{$datum->email}}</b></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <br>
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