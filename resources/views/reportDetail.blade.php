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

            
            @if($isCompany && $report->status===0)
                <div class="company-buttons">
                    <!-- make when press button approve: add bal, change status to 1; if reject: change status to 2; while none: 0 -->
                    <form action="{{ route('report.approval', ['id' => $report->id]) }}" method="POST">
                        @csrf
                        <button name="btn" value ="1" class="approve-butt">Approve</button></form>
                    <form action="{{ route('report.approval', ['id' => $report->id]) }}" method="POST">
                        @csrf
                        <button name="btn" value="2" class="reject-butt">Reject</button></form>
                </div>

                <!-- thanks griff -->
                <!-- <div class="test-button">
                    <form action="{{ route('report.acceptReport', ['reportId' => $report->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">Accept</button>
                    </form>
                </div> -->

            @elseif($report->status===1)
                <div class="words">
                    <p>This report has been approved</p>
                </div>


            @elseif($report->status===2)
                <div class="words">
                    <p>This report has been rejected</p>
                </div>            
            @endif

            @if($isUploader)
                <div class ="approval-status">
                    <p>Your report
                        @if( $report->status === 0)
                            is awaiting approval
                        @elseif( $report->status === 1)
                            has been approved
                        @else
                            has been rejected
                        @endif
                         <!-- depend on status: 1= is accepted, 2=has been rejected, 0=is awaiting approval -->
                        </p>
                </div>
            @endif

        @else
            <p>No files have been attached.</p>

        @endif

        <a href="{{ route('reports.page') }}" class="back-link">back to reports list</a>
        
    </div>
    @include('footer')
</body>
</html>
