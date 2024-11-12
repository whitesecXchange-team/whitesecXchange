<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <link rel="stylesheet" href="{{ asset('css/reports.css') }}">
    <title>Reports</title>
</head>
<body>
    @include('nav')
    <div class="reports-container">
        <div class="reports-list">
        @if($reports->isEmpty())
            <p>No reports available.</p>
        @else
            <table class="reports-table">
                <thead>
                    <tr>
                        <th>Report Title</th>
                        <th>Bounty</th>
                        <th>Submitted By</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reports as $report)
                    <tr>
                        <td>{{ $report->title }}</td>
                        <td>{{ $report->bounty->title }}</td>
                        <td>{{ $report->user->name ?? 'N/A' }}</td>
                        <td>{{ $report->created_at->format('Y-m-d') }}</td>
                        <td>
                            <a href="{{ route('reports.show', ['id' => $report->id]) }}" class="view-link">View Details</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
    @include('footer')
</body>
</html>
