<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/registerHacker.css') }}">

    <title>whitesecXchange - Register as a Hacker</title>
    @include('header')
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
    <div class="content">
        <div class="hackerDesc" >
            <div id="descLine1">
                Welcome Hackers!
            </div>
            <br>
            <div id="descLine2">
                Ready to hunt for Rewards?
            </div>
        </div>

        <div class="mainForm" style="float:right;">
            <form action="{{ route('user.register') }}" method="POST">
                    @csrf
                    <div class="nameField">
                        <label for="firstName">first name</label>
                        <input id="firstName" name="first_name" type="text" placeholder="" class="firstName">


                        <label for="lastName">last name</label>
                        <input id="lastName" name="last_name" type="text" placeholder="" class="lastName">
                    </div>

                    <br>
                    <input id="email" name="email" type="email" placeholder="E-mail" class="email">
                    <br>

                    <input id="username" name="name" type="text" placeholder="Username" class="username">
                    <br>

                    <div class="loginInfo">
                        <input id="password" name="password" type="password" placeholder="Password" class="password">
                        <input id="confirmPassword" name="password_confirmation" type="password" placeholder="Confirm Password" class="confirmPassword">
                    </div>
                    
                <br>
                <div>
                    <button class="btn" name="register" value="Submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
