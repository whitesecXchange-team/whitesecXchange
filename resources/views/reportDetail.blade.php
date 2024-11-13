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
            @php
            $isUploader = auth()->id() === $report->user_id;
            $isCompany = auth('company')->check() && auth('company')->id() === $report->bounty->company_id;
            @endphp

            @if($isUploader || $isCompany)
                <p><strong>Attached File:</strong> <a href="{{ route('report.download', ['id' => $report->id]) }}" class="download">Download</a></p>
            @else
                <p><em>File download is restricted to the report uploader and the assigning company.</em></p>
            @endif
        @endif

        <a href="{{ route('reports.page') }}" class="back-link">back to reports list</a>
    </div>
    @include('footer')
</body>
</html>
