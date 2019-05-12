<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--SCRIPTS--}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{asset('js/users/sound.js')}}"></script>

    {{-- STYLESHEETS --}}
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
    @yield('content')
</div>


{{-- Loading Screen --}}
<div class="loading-screen">
    <div class="box">
        <div class="b b1"></div>
        <div class="b b2"></div>
        <div class="b b3"></div>
        <div class="b b4"></div>
    </div>
</div>
<br>
</body>
</html>

{{-- Form Submit Script --}}
<script>
    let main_form  = $('.main-form');
    let loading_screen = $('.loading-screen');



    main_form.on('submit', function(){
        loading_screen.css({
            'animation-name': 'showLoadingScreen',
            'animation-duration': '.5s',
            'animation-fill-mode': 'both'
        })
    })
</script>