<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Home | whitesecXchange</title>
</head>
@include('nav')
<body>
    <div class="bg">
        <div class="radial-gradient">
            <div class="container">
                <div class="text-container">
                    <p class="title">Find Vulnerabilities,</p>
                    <p class="title">Earn Rewards:</p>
                    <p class="desc">The Ultimate Bounty Marketplace.</p>
                </div>
                <div class="get-started-button">
                    <a href="register-choice">get started here. </a>
                </div>
            </div>
        </div>
    </div>
</body>
@include('footer')
</html>
