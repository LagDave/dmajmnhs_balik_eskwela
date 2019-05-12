@extends('layouts.app')
@section('content')

    <div class="p-5 d-flex align-items-center card card-body">
        <i style="font-size: 6em;" class="fas text-success fa-check-circle success-icon"></i>
        <br>
        <h1 style="color:#777">CONGRATULATIONS!</h1>
        <p style="color:#999; width:500px" class="text-center"><b class="text-success">You are now enrolled!</b></p>
    </div>

    <script>
        $.playSound('{{asset('assets/audio/notification.mp3')}}');
        setTimeout(function(){
            window.location.replace('/');
        }, 3000)
    </script>
@endsection