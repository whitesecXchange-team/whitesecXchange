<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <link rel="stylesheet" type = "text/css"href="{{ asset('css/loginHacker.css') }}"/>
    <title>Login | whitesecXchange</title>
</head>
<body>
    <div class="bg">
        <div class="title-desc-container">
            <div class="title">
                <p>Welcome, Hacker!</p>
            </div>
        </div>
        <div class="form-container">
            <form action="{{ route('user.login') }}" method="POST" class="form">
                @csrf
                <div class="username">
                    <input id="username" name="name" type="text" placeholder="Username">
                    <hr>
                </div>
                <div class="password">
                    <input id="password" name="password" type="password" placeholder="Password">
                    <hr>
                    <a href="">forgot password?</a>
                </div>
                <div class="login-button">
                    <button class="btn" name="login" value="Submit">login</button>
                    <p class="dont-have-acc">don't have an account? create one <a href="{{ route('register.choice') }}">here</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
