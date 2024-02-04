

@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<style>
   

.dashboard-buttons {
    display: flex;
    gap: 10px;
    margin-top: 20px;
}
.port{
    margin-bottom: 300px;
    margin-left: 150px;
    margin-right: 150px;
    border-radius: 20px;
    margin-top: 150px;
    background: #ffffffc5;
    padding: 30px;
}

.add-schedule,
.add-prices,
.add-seat-reservations,
.analysis {
    background-color: #3498db;
    color: #fff;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.add-schedule:hover,
.add-prices:hover,
.add-seat-reservations:hover,
.analysis:hover {
    background-color: #2980b9;
}

</style>
<div class="port">
    <h1>Welcome to the Admin Portal</h1>
    <div class="dashboard-buttons">
    <button class="add-schedule" onclick="navigateTo('{{ route('add.train.schedule') }}')">Add Train Schedule</button>
    <button class="add-prices" onclick="navigateTo('{{ route('add.ticket.prices') }}')">Add Ticket Prices</button>
    <button class="add-seat-reservations" onclick="navigateTo('{{ route('add.reservation.prices') }}')">Add Main Reservation Packages</button>
    <button class="analysis" onclick="navigateTo('{{ route('analysis') }}')">Analysis</button>
    </div>
</div>

   
    <script>
        function navigateTo(url) {
            // Redirect to the specified URL
            window.location.href = url;
        }
    </script>
@endsection