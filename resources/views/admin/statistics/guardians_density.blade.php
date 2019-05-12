@extends('layouts.statistics')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <p class="text-center"><b>All Guardians from all Levels</b></p>
            <canvas  id="guardians_density"></canvas>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-6">
            <p class="text-center"><b>Guardians from Grade 11</b></p>
            <canvas  id="guardians_eleven_density"></canvas>
        </div>
        <div class="col-lg-6">
            <p class="text-center"><b>Guardians from Grade 12</b></p>
            <canvas  id="guardians_twelve_density"></canvas>
        </div>
    </div>

    <script>
        var guardiansDensity = new Chart(document.querySelector('#guardians_density'), {
            type: 'bar',
            data: {
                labels:['Fathers', 'Mothers', 'Guardians'],
                datasets: [{
                    data: [{{$total_distinct_fathers}}, {{$total_distinct_mothers}}, {{$total_distinct_guardians}}],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 159, 64, 1)'
                    ]
                }]
            },
            options: {
                legend:{
                    display: false
                }
            }
        });
    </script>
    <script>
        var guardiansFromEleven = new Chart(document.querySelector('#guardians_eleven_density'), {
            type: 'bar',
            data: {
                labels:['Fathers', 'Mothers', 'Guardians'],
                datasets: [{
                    data: [{{$grade_eleven_total_distinct_fathers}}, {{$grade_eleven_total_distinct_mothers}}, {{$grade_eleven_total_distinct_guardians}}],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 159, 64, 1)'
                    ]
                }]
            },
            options: {
                legend:{
                    display: false
                }
            }
        });
    </script>
    <script>
        var guardiansFromTwelve = new Chart(document.querySelector('#guardians_twelve_density'), {
            type: 'bar',
            data: {
                labels:['Fathers', 'Mothers', 'Guardians'],
                datasets: [{
                    data: [{{$grade_twelve_total_distinct_fathers}}, {{$grade_twelve_total_distinct_mothers}}, {{$grade_twelve_total_distinct_guardians}}],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 159, 64, 1)'
                    ]
                }]
            },
            options: {
                legend:{
                    display: false
                }
            }
        });
    </script>
@endsection