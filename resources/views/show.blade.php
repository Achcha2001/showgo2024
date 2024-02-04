@extends('layouts.homeui')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Lanka Railway Map</title>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Lanka Railway Map</title>
    <style>
        /* Define styles for the route messages */
        .route-message {
            margin-bottom: 10px;
        }

        .main-route { color: green; }
        .coastal-route { color: blue; }
        .jaffna-route { color: brown; }
        .batticaloa-route { color: orange; }

        .bunch{
            background-color: white;
           padding-left: 15%;
           margin-left: 20%;
           margin-right: 20%;
           opacity: 0.8;
           border-radius: 10px;
           margin-top: 10px;
        }
        .bunch2{
            font-weight: bold;
            padding-left: 18%;
        }
        .railway{
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="bunch">
    <h1 class="railway">You are witnessing the Sri Lankan Railway Map</h1>
<div class="bunch2">
    <!-- Route messages -->
    <div class="route-message main-route">Main Route: Green Line</div>
    <div class="route-message coastal-route">Coastal Route: Blue Line</div>
    <div class="route-message jaffna-route">Jaffna Route: Brown Line</div>
    <div class="route-message batticaloa-route">Batticaloa Route: Orange Line</div>
</div>
    </div>
    <!-- Map container -->
    <div id="map" style="height: 100%; width: 100%;"></div>

    <!-- Embedded Google Maps iframe -->
    <iframe src="https://www.google.com/maps/d/embed?mid=1MWgzBW7Lpk_TT8gNhq1qCmYzeBg&hl=en_US&ehbc=2E312F" width="100%" height="480"></iframe>

    
    <script>
        // You can remove the button and related JavaScript if it's not needed for the iframe
        // document.getElementById('showMapButton').addEventListener('click', function() {
        //     initMap();
        // });

        // function initMap() {
        //     // This is just a placeholder function, you don't need to include anything here.
        //     // Since you're using the iframe, there's no need for the Google Maps JavaScript API.
        // }
    </script>
</body>
</html>
@endsection