@extends('layouts.app')
@section('content')
    <div class="p-5 d-flex align-items-center card card-body">
        <i style="font-size: 6em;" class="fas text-danger fa-times-circle success-icon"></i>
        <br>    
        <h1 class='text-danger'>Ooops!</h1>
        <p style="max-width:500px" class="text-center"> You are using an invalid machine. If you think this is one of the school's "VALID" machine, please ask any event official such as a Teacher or <a href='{{route("data.setupPage")}}'>setup this machine</a>.</p>
    </div>
@endsection