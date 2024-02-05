@extends('layouts.homeui') 

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Payment Confirmation</div>

                    <div class="card-body">
                        <h3>Booking Successful!</h3>

                        {{-- <!-- Display details about the booking -->
                        <p>Ticket Count: {{ $ticketCount }}</p>
                        <p>ID Number: {{ $idNumber }}</p>
                        <p>Date: {{ $date }}</p>
                        <p>Train Name: {{ $trainName }}</p>
                        <p>From: {{ $from }}</p>
                        <p>To: {{ $to }}</p> --}}

                        

                        <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
