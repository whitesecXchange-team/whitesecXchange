<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
</head>
<body>
    <div class="nav">
        <div class="above-line">
            <p class="blank"></p>
            <a href="" id="title">whitesec <span class="vert-line">|</span>xchange</a>
            <div class="right-side">
                <div class="right-upper-side">
                    <div class="with-border">
                        <a href="">login</a>
                    </div>
                    <div class="reg-button">
                        <a href="" id="reg-button">register</a>
                    </div>
                </div>
                <div class="right-bottom-side">
                    <a href="">contact us</a>
                </div>
            </div>
        </div>
        <div class="below-line">
            <ul class="nav-selection">
                <li id="bounties">BOUNTIES</li>
                <li id="about-us">ABOUT US</li>
                <li id="leaderboard">LEADERBOARD</li>
                <li id="report">REPORT</li>
            </ul>
        </div>
    </div>
</body>
</html>