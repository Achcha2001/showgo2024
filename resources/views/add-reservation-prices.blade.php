<!-- resources/views/add-reservation-prices.blade.php -->

@extends('layouts.admin')


@section('content')

<style>
    .container1 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .fo {
       
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        margin-top: 50px;
        padding: 20px;
    }

    .form-group1 {
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

    .btn-primary1 {
        background-color: #243524;
        color: #fff;
        border: none;
        width: 100%;
        padding: 10px 15px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary1:hover {
        background-color: #1a2d1a;
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
.card2 {
    width: 400px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    margin-top: 50px;
}
.alert-success{
color: red;
}
</style>
<style>
    /* Add some spacing and styling to the table */
    .table {
        width: 100%;
        margin-bottom: 1rem;
        background-color: white;
        opacity: 0.7;
        color: #212529;
        border-collapse: collapse;
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    /* Style the table header */
    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }

    /* Style alternating rows for better readability */
    .table tbody tr:nth-of-type(odd) {
        background-color: #f8f9fa;
    }

    /* Style the actions buttons in the last column */
    .table tbody td:last-child {
        white-space: nowrap;
    }

    .table tbody td:last-child button {
        margin-left: 5px;
    }

    /* Style the edit button */
    .btn-warning {
        color: #fff;
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }

    /* Style the delete button */
    .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
</style>




<div class="container1">
    <div class="card2">
        <div class="card-header">
            Add Main Reservation Packages
        </div>

        <!-- Display success alert -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Display added data -->
        @if(session('addedTrainBox'))
            <div>
                <h5>Added Train Package:</h5>
                <p>Train ID: {{ session('addedTrainBox')->train_id }}</p>
                <p>Name: {{ session('addedTrainBox')->name }}</p>
                <p>Description: {{ session('addedTrainBox')->description }}</p>
                <!-- Add more details as needed -->
            </div>
        @endif

        <!-- Form for adding reservation packages -->
        <form class="fo" method="post" action="{{ route('train-boxes.store') }}">
            @csrf
            <div class="form-group1">
                <label for="trainId">Train ID:</label>
                <input type="number" class="form-control" id="trainId" name="train_id" required>
            </div>

            <div class="form-group1">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group1">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary1">Add Package</button>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                
                <th>Train ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trainBoxes as $trainBox)
                <tr>
                   
                    <td>{{ $trainBox->train_id }}</td>
                    <td>{{ $trainBox->name }}</td>
                    <td>{{ $trainBox->description }}</td>
                    <td>
                        <a href="{{ route('train-boxes.edit', $trainBox->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('train-boxes.destroy', $trainBox->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
