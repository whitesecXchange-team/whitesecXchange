<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <link rel="stylesheet" href="{{ asset('css/leaderboard.css') }}">
    <title>Leaderboard | whitesecXchange</title>
</head>
@include('nav')
<body>
<div class="bg">
        <div class="text-container">
            <p class="title">Leaderboard</p>
            <p class="desc">Check out the most prestigious hackers!</p>
            <hr>
            <div class="leaderboard-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Username</th>
                            <th>Earnings</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $index => $user)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>${{ number_format($user->balance, 2) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
@include('footer')
</html>
