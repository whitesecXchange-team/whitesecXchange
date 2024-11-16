<!DOCTYPE html>
<html lang="en">
    <head>
        @include('header')
        <link rel="stylesheet" href="{{ asset('css/bounty.css') }}">
        <title>White Hat</title>
    </head>
    @include('nav')
    <body>
        <div class="container">
            <div class="available-status">
                @if($bounties->isEmpty())
                    <p>No bounties available.</p>
                @endif
            </div>
            
            @auth('company')
            <div class="create-bounty-container">
                <a href="{{ route('bounty.create') }}" class="create-bounty-button">create bounty</a>
            </div>
            @endauth

            @foreach($bounties as $bounty)
            <a href="{{ route('bounty.details', ['id' => $bounty->id]) }}" class="button">
                <div class="bounty">
                    <h2 class="bounty-title">{{ $bounty->title }}</h2>
                    <p class="company">{{ $bounty->company->company_name }}</p> <!-- Assuming 'company' is a relationship -->
                    <p class="money">${{ $bounty->reward }}</p>
                    <hr>
                    <p class="bounty-description">{{ $bounty->description }}</p>
                </div>
            </a>
            @endforeach
        </div>

    </body>
    @include('footer')
</html>
