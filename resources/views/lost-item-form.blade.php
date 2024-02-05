

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
        <h1 class="wel">Report Lost Items</h1>

        
        <h2>Already Lost Items:</h2>
        <ul>
            @foreach($lostItems as $lostItem)
                <li>{{ $lostItem->name }} - {{ $lostItem->lost_object }} - {{ $lostItem->date }}</li>
            @endforeach
        </ul>

       
        <button onclick="showLostItemForm()">Add a Lost Item</button>

        <!-- Lost Item Form -->
        <div id="lostItemForm" style="display: none;">
            <form method="post" action="{{ route('lost-items.submit') }}">
                @csrf
                <label for="name">Name:</label>
                <input type="text" name="name" required>

                <label for="contact_number">Contact Number:</label>
                <input type="text" name="contact_number" required>

                <label for="lost_object">Lost Object:</label>
                <input type="text" name="lost_object" required>

                <label for="date">Date:</label>
                <input type="date" name="date" required>

                <label for="train">Train:</label>
                <input type="text" name="train" required>

                <button class="sub" type="submit">Submit Lost Item</button>
            </form>
        </div>
    </div>

    <script>
        function showLostItemForm() {
            document.getElementById('lostItemForm').style.display = 'block';
        }
    </script>
@endsection
