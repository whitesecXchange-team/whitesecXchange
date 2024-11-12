<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <link rel="stylesheet" href="{{ asset('css/profileHacker.css') }}">
    <title>{{ Auth::user()->name }}</title>
</head>
@include('nav')
<body>
    <div class="content-container">
        <div class="radial-gradient">
            <div class="container">
                <div class="text-container">
                    <p class="title">Greetings, # {{ Auth::user()->name }}</p> <!-- nanti # itu rankingnya, trus Hackernya diubah jadi nama user -->
                    <p class="earnings">Your Current Earnings: $$$</p>
                </div>
            </div>
        </div>
    </div>
</body>
@include('footer')
</html>
