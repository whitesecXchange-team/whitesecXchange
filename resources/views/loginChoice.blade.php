<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000000"/>
    <title>White Hat</title>

    <link rel="stylesheet" href="{{ asset('css/loginChoice.css') }}">
</head>
<body>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="asking">
        <p>Which One are You?</p>
    </div>

    <div class="registerChoices">
        <a href="{{ route('login.hacker') }}"><button class="optionHack">
            <div class="hookHack">
                <p>Become a Bug Hunter:<br>
                Secure, Solve, Succeed
                </p>
            </div>

            <div class="sinHack">
                <h2>Sign-up as Hacker</h2>
            </div>
        </button></a>


        <a href="{{ route('login.company') }}"><button class="optionCompany">
            <div class="hookComp">
                <p>Looking for Cyber Defense?<br>
                Post a Bounty Now!
                </p>
            </div>

            <div class="sinComp">
                <h2>Sign up as Company</h2>
            </div>
        </button></a>
    </div>
</body>
</html>
