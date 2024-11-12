<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <link rel="stylesheet" href="{{ asset('css/report-details.css') }}">
    <title>{{ $report->title }}</title>
</head>
<body>
    @include('nav')
    <div class="report-details-container">
        <h1>{{ $report->title }}</h1>
        <p><strong>Bounty:</strong> {{ $report->bounty->title }}</p>
        <p><strong>Submitted By:</strong> {{ $report->user->name ?? 'N/A' }}</p>
        <p><strong>Created At:</strong> {{ $report->created_at->format('Y-m-d') }}</p>
        <p><strong>Description:</strong> {{ $report->description }}</p>

        @if($report->file_path)
            <p><strong>Attached File:</strong> <a href="{{ Storage::url($report->file_path) }}" target="_blank" class="download">Download</a></p>
        @endif

        <a href="{{ route('reports.page') }}" class="back-link">back to reports list</a>
    </div>
    @include('footer')
</body>
</html>
