<!-- resources/views/analysis.blade.php -->

@extends('layouts.admin')

@section('title', 'Analysis')

@section('content')
<style>.port{
    background-color: white;
    width: 50%;
    margin: 20px auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
} </style>
    <div class="port">
        <h1>Analysis for most booked trains</h1>
        <div class="dashboard-buttons">
           

            <div style="width: 400px; height: 400px;">
                <canvas id="trainBookingsChart"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const fetchData = async () => {
            try {
                const response = await fetch('{{ route('api.getMostBookedTrains') }}');
                const data = await response.json();

                const trainNames = data.map(entry => entry.train_name);
                const bookingCounts = data.map(entry => entry.booking_count);

                const ctx = document.getElementById('trainBookingsChart').getContext('2d');
                new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: trainNames,
                        datasets: [{
                            data: bookingCounts,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.7)',
                                'rgba(54, 162, 235, 0.7)',
                                'rgba(255, 206, 86, 0.7)',
                              
                            ],
                        }],
                    },
                    options: {
                        legend: {
                            display: true,
                            position: 'right',
                        },
                        tooltips: {
                            enabled: true,
                        },
                    },
                });
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        };

        document.addEventListener('DOMContentLoaded', fetchData);
    </script>
@endsection
