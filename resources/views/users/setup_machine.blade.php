@extends('layouts.app')
@section('content')
    @if(request()->session()->has('failed'))
        <div class="alert alert-danger">
            {{request()->session()->get('failed')}}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card card-body">
                <p style="font-size: 3em;" class="text-center"><i class="fas fa-cogs text-primary"></i></p>
                <h4 class="text-center"><b>Setup Machine</b></h4>

                <p class="text-center mb-5">
                    <i class="fas fa-ellipsis-h"></i>
                </p>

                <form action="{{route('data.setupValidate')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <p class="text-center mb-0"><label>Secret Registration Key</label></p>
                        <input required type="password" name="secret_registration_key" class="text-center form-control">
                    </div>
                    <button class="btn-primary btn form-control">REGISTER MACHINE</button>
                </form>
            </div>
        </div>
    </div>

@endsection