<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/registerCompany.css') }}">
    <title>whitesecXchange - Register as a Company</title>
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
        <div class="mainForm">
	    	<form action="{{ route('company.register') }}" method="POST">
                @csrf
                    <div class="companyNameField">
				        <label for="companyName">Company</label>
				        <input id="companyName" name="company_name" type="text" placeholder="" class="companyName">
                    </div>
                    <br>
	    			<input id="email" name="company_email" type="email" placeholder="E-mail" class="email">
    				<br>
                    <div class="loginInfo">
		    		    <input id="password" name="password" type="password" placeholder="Password" class="password">
                    </div>

                    <br>
				    <input id="confirmPassword" name="password_confirmation" type="password" placeholder="Confirm Password" class="confirmPassword">
                    <br>
		    		<input id="companyWebsite" name="company_url" type="text" placeholder="Company Website" class="companyWebsite">
                    <br>

                    <div class="checkRead">
                        <input type="checkbox" id="terms" name="terms" value="terms">
                        <label for="terms"> I have read and agreed to the <a href="https://www.youtube.com/embed/lproX4lLdqA?fs=1&autoplay=1">terms & conditions</a></label><br>
                    </div>

                <br>
    			<div>
			    	<button class="btn" name="register" value="Submit">Submit</button>
		    	</div>
	    	</form>
    	</div>


        <div class="compDesc" style="float:right;">
            <div id="descLine1">
                Fortify your Defenses:
            </div>
            <br>
            <div id="descLine2">
                Post Bounties and <br>
                Reward the Best!
            </div>
        </div>
    </div>
</body>
</html>
