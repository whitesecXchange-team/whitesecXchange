<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <link rel="stylesheet" href="{{ asset('css/bounty-details.css') }}">
    <title>{{ $bounty->title }}</title>
</head>
<body>
    @include('nav')
    <div class="bounty-details-container">
        <h1 class="title">{{ $bounty->title }}</h1>
        <p class="company">{{ $bounty->company->company_name }}</p>
        <p class="reward">${{ $bounty->reward }}</p>
        <div class="description-container">
            <p class="description">{{ $bounty->description }}</p>
        </div>

        @auth
            @if (Auth::guard('web')->check())
                <form action="{{ route('report.create', ['id' => $bounty->id]) }}" method="GET">
                    @csrf
                    <button type="submit" class="submit-report-button">submit a report</button>
                </form>
            @endif
        @endauth
    </div>
    @include('footer')
</body>
</html>
