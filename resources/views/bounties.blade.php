<!DOCTYPE html>
<html lang="en">
    <head>
        @include('header')
        <link rel="stylesheet" href="{{ asset('css/bounty.css') }}">
        <title>White Hat</title>
    </head>
    @include('nav')
    <body>

        <!-- Conditionally show 'Create Bounty' button for company guard -->
        @auth('company')
        <div class="create-bounty-container">
            <a href="{{ route('bounty.create') }}" class="create-bounty-button">Create Bounty</a>
        </div>
        @endauth

        <!-- Display bounties from the database -->
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

    </body>
    @include('footer')
</html>
