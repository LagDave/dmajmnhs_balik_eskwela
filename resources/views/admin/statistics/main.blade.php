@extends('layouts.statistics')
@section('content')

    <div class="row">
        <div class="col-lg-6">
            <p class="text-center"><b>Gender Density</b></p>
            <hr>
            <canvas style="width: 100%; " id="gender_density"></canvas>
            <hr>
            <p class="text-muted">Summary:</p>
            <p class="text-muted">Total Number of Males: <b>{{$total_males}}</b></p>
            <p class="text-muted">Total Number of Females: <b>{{$total_females}}</b></p>
        </div>
        <div class="col-lg-6">
            <p class="text-center"><b>Admission Level Density</b></p>
            <hr>
            <canvas style="width: 100%; " id="level_density"></canvas>
            <hr>
            <p class="text-muted">Summary:</p>
            <p class="text-muted">Total Number of Grade 11s: <b>{{$total_eleven}}</b></p>
            <p class="text-muted">Total Number of Grade 12s: <b>{{$total_twelve}}</b></p>

        </div>
    </div>


     {{--Gender Density Scripts--}}
    <script>
        let genderDensity = new Chart(document.querySelector("#gender_density"), {
            type: 'pie',
            data: {
                labels:['Males', 'Females'],
                datasets:[{
                    data: [{{$total_males}}, {{$total_females}}],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)'
                    ]
                }]
            }
        });
    </script>

    {{-- Admission Level Density Scripts --}}
    <script>
        let levelDensity = new Chart(document.querySelector("#level_density"), {
            type: 'pie',
            data: {
                labels:['Grade Eleven', 'Grade Twelve'],
                datasets:[{
                    data: [{{$total_eleven}}, {{$total_twelve}}],
                    backgroundColor: [
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ]
                }]
            }
        });
    </script>





@endsection