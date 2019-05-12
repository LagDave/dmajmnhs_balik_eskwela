@extends('layouts.statistics')
@section('content')

    <canvas  id="guardians_density"></canvas>
    <script>
        var myBarChart = new Chart(document.querySelector('#guardians_density'), {
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
@endsection