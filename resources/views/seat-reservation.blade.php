
@extends('layouts.homeui')

@section('title', 'Seat Reservation')

@section('content')
<style>
    
    .container {
        margin-top: 50px;
        background: rgba(0, 0, 0, 0.699);
        color: white;
        margin-left: 50px;
        margin-right: 100px;
        border-radius: 20px;
        margin-bottom: 10px;
    }

    h2 {
        margin-bottom: 20px;
    }
    .search-grid{
    
        margin-left: 100px;
        margin-right: 105px;
        width:750px;
        background: #424242a0;
        border-radius: 20px;
        padding-left: 20px;
        height: 110px;
    }



    
    .row {
    display: flex;
    margin-right: 50px;
   color: black;
    padding-left: 40px;
}

.col-md-4 {
    width: 20%; 
    background: rgb(149, 149, 149);
    width: 600px;
    height: 40px;
    margin-top: 18px;
}


label {
    margin-bottom: 0; 
}

.form-group {
    margin-bottom: 0; 

    .card {
        margin-bottom: 20px;
    }


    .card-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 14px;
        margin-bottom: 15px;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
    .btn-primary1 {
    background-color: #262727;
margin-left: 20px;
    color: #fff;
padding: 10px;

margin-top: -40px;
border-radius: 10px;
    width: 100px;
}

.btn-primary1:hover {
    background-color: #020202;
}

.row1 {
    display: flex;
    flex-wrap: wrap;
    margin-left: 120px;
    width: 800px;
   
}

.col-md-3 {
    flex: 0 0 48%; 
    margin: 1%; 
    
    border-radius: 20px;
    background: orangered;
    
    
}

.card {
    margin-bottom: 20px;
    margin-left: 50px;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
}

.btn-primary:hover {
    background-color: #0056b3;
}
.main{
    font-size: 30px;
    font-weight: bold;
    margin-left: 30px;
    margin-top: 50px;
}
</style>
<style>
    .row1 {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .service-box {
        margin-bottom: 20px;
        padding: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    .service-box .card {
        height: 100%;
    }

    .service-box .card-body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .service-box .card-title {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .service-box .card-text {
        margin-bottom: 15px;
    }

    .service-box .btn {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .service-box .btn:hover {
        background-color: #0056b3;
    }
</style>


<div class="container mt-5">
    <div class="container mt-5">
        <div class="search-grid">
            <h2>Seat Reservation</h2>
    
            <!-- Search Grid -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="from">From:</label>
                    <select class="form-control" id="from">
                        <option value="colombo_fort">Colombo Fort</option>
                        <option value="maradana">Maradana</option>
                        <option value="kandy">Kandy</option>
                        <option value="gampaha">Gampaha</option>
                        <option value="negombo">Negombo</option>
                        <option value="badulla">Badulla</option>
                        <option value="Nanu Oye">Nanu Oye</option>
                        <option value="galle">Galle</option>
                        <option value="Matara">Matara</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="to">To:</label>
                    <select class="form-control" id="to">
                        <option value="colombo_fort">Colombo Fort</option>
                        <option value="maradana">Maradana</option>
                        <option value="kandy">Kandy</option>
                        <option value="gampaha">Gampaha</option>
                        <option value="negombo">Negombo</option>
                        <option value="badulla">Badulla</option>
                        <option value="Nanu Oye">Nanu Oye</option>
                        <option value="galle">Galle</option>
                        <option value="Matara">Matara</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="date" class="form-control" id="date">
                </div>
                <div class="col-md-2">
                    <label>&nbsp;</label> 
                    <button class="btn btn-primary1 form-control" id="searchButton">Search</button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        document.getElementById('searchButton').addEventListener('click', function() {
            // Get selected values
            var from = document.getElementById('from').value;
            var to = document.getElementById('to').value;
            var date = document.getElementById('date').value;
    
            
            var url = "{{ route('reservation.form') }}?from=" + encodeURIComponent(from) + "&to=" + encodeURIComponent(to) + "&date=" + encodeURIComponent(date);

    
            // Redirect to the reservation page
            window.location.href = url;
        });
    </script>
   <div class="main">
    <h1>Our Mains</h1>
</div>
<!-- Train Services -->
<div class="row1">

    <!-- Train Service 1 -->
    <div class="col-md-6">
        <div class="service-box" style="background-color: #FFD700;">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Udarata Manike</h5>
                    <p class="card-text">Fort to Badulla express train</p>
                    <a href="/train-details" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Train Service 2 -->
    <div class="col-md-6">
        <div class="service-box" style="background-color: #87CEFA;">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Podi Manike</h5>
                    <p class="card-text">Fort to Badulla express train</p>
                    <a href="/train-details" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Train Service 3 -->
    <div class="col-md-6">
        <div class="service-box" style="background-color: #98FB98;">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ella Odyssey</h5>
                    <p class="card-text">Fort to Badulla express train</p>
                    <a href="/train-details" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Train Service 4 -->
    <div class="col-md-6">
        <div class="service-box" style="background-color: #FFA07A;">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ruhunu Kumari</h5>
                    <p class="card-text">Maradana to Beliatta express train</p>
                    <a href="/train-details" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

    
</div>
@endsection
