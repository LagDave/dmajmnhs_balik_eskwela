@extends('layouts.dashboard')
@section('content')

    <h4 class="text-primary"><i class="fas fa-users"></i><b> Male Enrollees</b></h4>
    <br>
    @if(sizeof($data) ===0)
        <p >Nope! No male enrollees at the moment. <i class="far fa-frown"></i></p>
    @endif
    @include('admin.pills.data_render')
@endsection