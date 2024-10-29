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
                    <div class="reports-submitted-container">
                        <p>Reports Submitted</p>
                        <!-- pake php nanti for loop ambil smua reports submitted by this user -->
                        <div class="reports-card">
                            <div class="report-title">
                                <p>Title</p>
                            </div>
                            <div class="bounty-assigned">
                                <p>This bounty</p>
                            </div>
                            <div class="status">
                                <p>approved/not approved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('footer')
</html>
