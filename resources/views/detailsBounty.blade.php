<!DOCTYPE html>
<html lang="en">
<head> @include('header')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/detailsBounty.css') }}">
    <title>Test our Health Application</title>
</head>
@include('nav')
<body>
    <div class="bountyHeader">
        <div class="titleBounty">
            <h1>Test our Health Application</h1>
        </div>

        <div class="companyName">
            <h2>MayFit+</h2>
        </div>
    </div>

    <div class="bountyDescription">
        <div class="shortDesc">
            <h3>Android Health Application user Database Security Testing.</h3>
        </div>
        <div class="detailedDesc">
            <p>We are looking for individuals to test our brand new Health Application for Android. Any bug testing or vulnerabilities appreciated but we are mainly seeking to secure our user database integrity. 
                You may choose between a white box method or a black box method. If you choose to whitebox, you may immediately test our app by downloading through the play store. 
                If you would like to analyze our source code, please contact us through the methods in our profile so we may discuss the agreements.</p>
        </div>

        <div class="price">
            <h3>$200-$3000</h3>
        </div>
    </div>

    <div class="reportSubmission">
        <div class="reportCriteria">
            <p>Must be a zip file which must be titled "YourName - MayFit+ Health App Bounty Report". Must contain:<br>
            - A pdf file reporting the vulnerabilities<br>
            - Screenshot of the vulnerabilities reported within our app and/or code<br>
            - Steps on how to recreate it with documentation (images with clear pointers and/or descriptions or videos)<br>
            - How said vulnerabilities can impact our customers and our profits<br>
            - Potential fixes to said vulnerabilities</p>
        </div>

        <div class="reportField">
            <label for="reportFile">Upload the report</label>
            <input type="file" id="reportFile" name="reportZip" accept="zip,application/octet-stream,application/zip,application/x-zip,application/x-zip-compressed">
            <button>Submit</button> 
            <!-- need made so can receive said file -->
        </div>
    </div>

</body>
@include('footer')
</html>