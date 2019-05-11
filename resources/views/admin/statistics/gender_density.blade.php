@extends('layouts.statistics')
@section('content')

    <div class="row">
        <div class="col-lg-6">
            <p class="text-center"><b>Grade 11 Gender Density</b></p>
            <hr>
            <canvas style="width: 100%; " id="gender_density_eleven"></canvas>
            <hr>
            <p class="text-muted">Summary:</p>
            <p class="text-muted">Total Number of Grade 11 Males: <b>{{$total_males_eleven}}</b></p>
            <p class="text-muted">Total Number of Grade 11 Females: <b>{{$total_females_eleven}}</b></p>
        </div>
        <div class="col-lg-6">
            <p class="text-center"><b>Grade 12 Gender Density</b></p>
            <hr>
            <canvas style="width: 100%; " id="gender_density_twelve"></canvas>
            <hr>
            <p class="text-muted">Summary:</p>
            <p class="text-muted">Total Number of Grade 12 Males: <b>{{$total_males_twelve}}</b></p>
            <p class="text-muted">Total Number of Grade 12 Females: <b>{{$total_females_twelve}}</b></p>

        </div>
    </div>


    {{--Gender Density Scripts--}}
    <script>
        let elevenGenderDensity = new Chart(document.querySelector("#gender_density_eleven"), {
            type: 'pie',
            data: {
                labels:['Males', 'Females'],
                datasets:[{
                    data: [{{$total_males_eleven}}, {{$total_females_eleven}}],
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
        let twelveGenderDensity = new Chart(document.querySelector("#gender_density_twelve"), {
            type: 'pie',
            data: {
                labels:['Males', 'Females'],
                datasets:[{
                    data: [{{$total_males_twelve}}, {{$total_females_twelve}}],
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





@endsection