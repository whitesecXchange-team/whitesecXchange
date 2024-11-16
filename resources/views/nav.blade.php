<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
<body>
    <div class="nav">
        <div class="above-line">
            <p class="blank"></p>
            <div class="title-container">
                <a href="/" id="title">whitesec <span class="vert-line">|</span>xchange</a>
            </div>
            <div class="right-side">
                @if (Auth::guard('company')->check())
                    <div class="welcome-container">
                        <p>Welcome, <a href="{{ route('company.profile', ['id' => Auth::guard('company')->user()->id]) }}" class="company-name">{{ Auth::guard('company')->user()->company_name }}</a></p>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @elseif (Auth::check())
                    <div class="welcome-container">
                        <p>Welcome, <a href="{{ route('user.profile', ['id' => Auth::user()->id]) }}" class="hacker-name">{{ Auth::user()->name }}</a></p>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @else
                    <div class="right-upper-side">
                        <div class="with-border">
                            <a href="{{ route('login.choice') }}">login</a>
                        </div>
                        <div class="reg-button">
                            <a href="{{ route('register.choice') }}" id="reg-button">register</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="below-line">
            <ul class="nav-selection">
                <li id="bounties"><a href="{{ route('bounties') }}">BOUNTIES</a></li>
                <li id="about-us"><a href="{{ route('about-us') }}">ABOUT US</a></li>
                <li id="leaderboard"><a href="{{ route('leaderboard') }}">LEADERBOARD</a></li>
                <li id="reports"><a href="{{ route('reports.page') }}">REPORTS</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
