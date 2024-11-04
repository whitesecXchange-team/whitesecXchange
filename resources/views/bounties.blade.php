<!DOCTYPE html>
<html lang="en">
    <head> @include('header')
        <link rel="stylesheet" href="{{ asset('css/bounty.css') }}">
        <title>White Hat</title>
    </head>
    @include('nav')
    <body> 
        <!-- should be looping and just get rest from db -->
        <a href="{{ route('bounty.details') }}" class="button"> <!-- need add auth bounty id -->
            <div class="bounty">
                <h2 class="bounty-title">Test our Health Application</h2>
                <p class="company">MayFit+</p>
                <p class="money">$200-$3000</p>
                <hr>
                <p class="bounty-description">Android Health Application user Database Security Testing.</p>
            </div>
        </a>
        
        <a href="bounties" class="button">
            <div class="bounty">
                <h2 class="bounty-title">My calculator is looping infinitely!</h2>
                <p class="company">Script Kiddie</p>
                <p class="money">$$$</p>
                <hr>
                <p class="bounty-description">Hey man, uhh I just started coding recently, and it isn't going well... Can you fix this issue I sent? For some reason the calculations don't add up, for example 2 + 2 = 8, and 3 + 3 = 18. I'm sure I followed the youtube tutorial properly, I even asked my classmate to review it for me, and he didn't find any abnormalities!</p>
            </div>
        </a>
        <a href="bounties" class="button">
            <div class="bounty">
                <h2 class="bounty-title">Giveaway!!! [No Bug Bounty Required!!!]</h2>
                <p class="company">Trustworthy Man</p>
                <p class="money">$$$</p>
                <hr>
                <p class="bounty-description">Last one to visit this page receives 100 simoleons!</p>
            </div>
        </a>
        <a href="bounties" class="button">
                <div class="bounty">
                <h2 class="bounty-title">Test Post</h2>
                <p class="company">OwO</p>
                <p class="money">$$$</p>
                <hr>
                <p class="bounty-description">Ayy lmao ( ͡° ͜ʖ ͡°)</p>
            </div>
        </a>
    </body>
    @include('footer')
</html>
