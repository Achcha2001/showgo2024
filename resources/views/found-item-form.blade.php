<!-- resources/views/found-item-form.blade.php -->

@extends('layouts.homeui')

@section('content')
<style>
   

    input {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 15px;
        box-sizing: border-box;
    }

    button {
        background-color: #4caf50;
        width: 150px;
        color: white;
        margin-top: 5px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    } label{
        color: antiquewhite;
    }
    ul li {
        color: white;
    }h2{
        color: gainsboro;
    }

    button:hover {
        background-color: #45a049;
    }

    #lostItemForm {
        margin-top: 20px;
    }
    .sub {
        background-color: #4caf50;
        width: 150px;
        color: white;
        margin-top: 5px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        
    }
</style>

    <div class="welcome-box">
        <h1 class="wel">Report Found Items</h1>

        <!-- Display Already Found Items -->
        <h2>Already Found Items:</h2>
        <ul>
            @foreach($foundItems as $foundItem)
                <li>
                    Name: {{ $foundItem->name }} -
                    Found Object: {{ $foundItem->found_object }} -
                    Contact Number: {{ $foundItem->contact_number }} -
                    Date: {{ $foundItem->date }}
                </li>
            @endforeach
        </ul>

        <!-- Add Found Item Button -->
        <button onclick="showFoundItemForm()">Add Found Item</button>

        <!-- Found Item Form -->
        <div id="foundItemForm" style="display: none;">
            <form method="post" action="{{ route('found-items.submit') }}">
                @csrf
                <label for="name">Name:</label>
                <input type="text" name="name" required>

                <label for="found_object">Found Object:</label>
                <input type="text" name="found_object" required>

                <label for="contact_number">Contact Number:</label>
                <input type="text" name="contact_number" required>

                <label for="date">Date:</label>
                <input type="date" name="date" required>

                <button type="submit">Submit Found Item</button>
            </form>
        </div>
    </div>

    <script>
        function showFoundItemForm() {
            document.getElementById('foundItemForm').style.display = 'block';
        }
    </script>
@endsection
