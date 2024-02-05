<!-- resources/views/train-details.blade.php -->

@extends('layouts.homeui')

@section('content')
<style>
    .container {
        display: flex;
        justify-content: center;
      margin-top: -20px;
        align-items: center;
        height: 100vh;
    }

  
.cardx {
    width: 50%;
    margin-left: 20%;
    margin-top: -40px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    margin-top: 50px;
}

.card-header {
    background-color: #243524;
    color: white;
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    padding: 15px;
    border-bottom: 1px solid #ddd;
}


    .card-body {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-label {
        font-size: 16px;
        font-weight: bold;
        color: #243524;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ced4da;
        border-radius: 4px;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-control:focus {
        border-color: #243524;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(36, 53, 36, 0.25);
    }

    .btn-primary {
        background-color: #243524;
        color: #fff;
        border: none;
        width: 100%;
        padding: 10px 15px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #1a2d1a;
    }
</style>
<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card3 {
        width: 300px; /* Set a fixed width for all cards */
        border-radius: 8px;
        margin: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
    }

    .card1 {
        background-color: #F5A623; /* Orange */
    }

    .card2 {
        background-color: #4A90E2; /* Blue */
    }

    .card3 {
        background-color: #50E3C2; /* Green */
    }

    .card4 {
        background-color: #E74C3C; /* Red */
    }

    .card-body2 {
        padding: 20px;
        color: #fff; /* Text color, adjust as needed */
    }

    .card3:hover {
        transform: scale(1.05); /* Zoom in on hover */
    }.mn{
        background-color: #ddd;
        
    }
</style>
<div class="container">
    <!-- Display Train Details -->
    @foreach ($trainBoxes as $key => $trainBox)
    <div class="mn">
        <div class="card3 card{{ $key % 4 + 1 }}">
            <div class="card-body2"> 
                <h5 class="card-title">Train Box Details</h5>
                {{-- <p class="card-text">ID: {{ $trainBox->id }}</p> --}}
                <p class="card-text">Name: {{ $trainBox->name }}</p>
                <p class="card-text">Description: {{ $trainBox->description }}</p>
                <!-- Add more details as needed -->
            </div>
        </div>
    </div>
            @endforeach
        </div>
    </div>
   
    <div class="cardx">
        <div class="card-header">
            Make your reservation
        </div>
    
      
<form id="ticketBookingForm" action="{{ route('proceed-to-payment') }}" method="POST">
    @csrf
    
    <div class="form-group">
        <label for="ticketCount">Ticket Count:</label>
        <input type="number" class="form-control" id="ticketCount" name="ticket_count" min="1" value="1">
    </div>

    <div class="form-group">
        <label for="idNumber">ID Number:</label>
        <input type="text" class="form-control" id="idNumber" name="id_number" required>
    </div>

    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" class="form-control" id="date" name="date" required>
    </div>

    <div class="form-group">
        <label for="trainName">Train Name:</label>
        <input type="text" class="form-control" id="trainName" name="train_name" required>
    </div>

    <div class="form-group">
        <label for="from">From:</label>
        <input type="text" class="form-control" id="from" name="from" required>
    </div>

    <div class="form-group">
        <label for="to">To:</label>
        <input type="text" class="form-control" id="to" name="to" required>
    </div>

    <button type="submit" class="btn btn-primary">Proceed to Payment</button>
</form>

    </div>
</div>

<script>
 function proceedToPayment() {
    // Implement the logic to proceed to payment
    // You can use JavaScript to handle the form data and submit the form
    document.getElementById('ticketBookingForm').submit();
}

</script>

@endsection
