<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type = "text/css"href="{{ asset('css/login.css') }}"/>
    @include('header')
    <title>Login | whitesecXchange</title>
</head>
<body>
    <div class="login-2">
        <div class ="columnloginintoyo container-xs">
            <p class= "logintoyour ui text size-titile">Login to Your Account</p>
            <div class ="columnusername">
                <label class ="username ui input white a_700 size -sm underline square">
                <input name="userName" placehholder="Username" type="text"/>
                </label>
                    <label class="password ui input white a_700 size -sm underline square">
                        <input name="password" placehholder="Placeholder" type="password"/>

                    </label>
                    <a href="#" class="forgotpassword-link">
                        <p class="forgotpassword ui text size-texts">forgot password</p>


                    </a>

            </div>
        </div>

    </div>
</body>
</html>
