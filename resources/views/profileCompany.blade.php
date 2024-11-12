<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <link rel="stylesheet" href="{{ asset('css/profileCompany.css') }}">
    <title>Document</title>
</head>
@include('nav')
<body>
    <div class="content-container">
        <div class="radial-gradient">
            <div class="container">
                <div class="text-container">
                    <p class="title">Greetings, {{ Auth::guard('company')->user()->company_name }}</p>
                    <p class="description">Strengthen your cyber defense by posting a bounty!</p>
                    <div class="bounties-posted-container">
                        <p>Bounties Posted</p>
                        <!-- pake php nanti for loop ambil smua bounties posted by this company -->
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
