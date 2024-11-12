<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <link rel="stylesheet" href="{{ asset('css/report-create.css') }}">
    <title>Submit Report</title>
</head>
<body>
    @include('nav')
    <div class="report-form-container">
        <h1>Report Submission for <span class="bounty-title">{{ $bounty->title }}</span></h1>
        <p>{{ $bounty->company->company_name }}</p>
        <p>${{ $bounty->reward }}</p>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="creation-form" action="{{ route('report.store', ['id' => $bounty->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Report Title" required>
            </div>

            <div class="form-group">
                <textarea id="description" name="description" rows="4" placeholder="Report Description" required>{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="file">Attach File (optional)</label>
                <input type="file" id="file_path" name="file_path" accept=".pdf,.doc,.docx">
            </div>

            <button type="submit" class="submit-button">Submit Report</button>
        </form>
    </div>
    @include('footer')
</body>
</html>
