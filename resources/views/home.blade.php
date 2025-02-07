@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to the Student Management System!</h1>
        <p class="lead">Easily manage students, teachers, courses, and more using the navigation menu.</p>
        <hr class="my-4">
        <p>Get started by selecting an option from the menu on the left or explore the system features below.</p>
        <a class="btn btn-primary btn-lg" href="{{ url('/students') }}" role="button">View Students</a>
    </div>

    <!-- Chart Section: Bar Chart for Students and Teachers -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3 class="text-center mb-4">Student and Teacher Overview</h3>
            <canvas id="overviewChart" width="400" height="200"></canvas>
        </div>
    </div>

    <!-- Chart Section: Pie Chart for Students and Teachers -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3 class="text-center mb-4">Distribution Between Students and Teachers</h3>
            <canvas id="distributionChart" width="400" height="200"></canvas>
        </div>
    </div>

    <!-- Chart Section: Line Chart for Trend (Students & Teachers Over Time) -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3 class="text-center mb-4">Growth Trend of Students and Teachers</h3>
            <canvas id="growthTrendChart" width="400" height="200"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Bar Chart: Student and Teacher Overview
    var ctx = document.getElementById('overviewChart').getContext('2d');
    var overviewChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Students', 'Teachers'],
            datasets: [{
                label: 'Count',
                data: [{{ $studentsCount }}, {{ $teachersCount }}],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Pie Chart: Distribution Between Students and Teachers
    var ctx2 = document.getElementById('distributionChart').getContext('2d');
    var distributionChart = new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: ['Students', 'Teachers'],
            datasets: [{
                data: [{{ $studentsCount }}, {{ $teachersCount }}],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(255, 99, 132, 0.6)'
                ]
            }]
        }
    });

    // Line Chart: Growth Trend of Students and Teachers (Example)
    // var ctx3 = document.getElementById('growthTrendChart').getContext('2d');
    // var growthTrendChart = new Chart(ctx3, {
    //     type: 'line',
    //     data: {
    //         labels: ['January', 'February', 'March', 'April', 'May'], // Example months
    //         datasets: [{
    //             label: 'Students Growth',
    //             data: [{{ $studentsCountJanuary }}, {{ $studentsCountFebruary }}, {{ $studentsCountMarch }}, {{ $studentsCountApril }}, {{ $studentsCountMay }}], // Data for students growth
    //             borderColor: 'rgba(75, 192, 192, 1)',
    //             backgroundColor: 'rgba(75, 192, 192, 0.2)',
    //             fill: true
    //         }, {
    //             label: 'Teachers Growth',
    //             data: [{{ $teachersCountJanuary }}, {{ $teachersCountFebruary }}, {{ $teachersCountMarch }}, {{ $teachersCountApril }}, {{ $teachersCountMay }}], // Data for teachers growth
    //             borderColor: 'rgba(255, 99, 132, 1)',
    //             backgroundColor: 'rgba(255, 99, 132, 0.2)',
    //             fill: true
    //         }]
    //     }
    // });
</script>

@endsection
