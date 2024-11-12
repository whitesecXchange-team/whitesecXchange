<!DOCTYPE html>
<html lang="en">
    <head>
        @include('header')
        <link rel="stylesheet" href="{{ asset('css/createBounty.css') }}">
        <title>Create Bounty</title>
    </head>
    @include('nav')
    <body>
        <div class="form-container">
            <h2>Create a New Bounty</h2>

            <!-- Display validation errors -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('bounty.store') }}" method="POST" class="form">
                @csrf

                <!-- Title Input -->
                <div class="form-group">
                    <label for="title">Bounty Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" required>
                </div>

                <!-- Description Input -->
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
                </div>

                <!-- Reward Input -->
                <div class="form-group">
                    <label for="reward">Reward</label>
                    <input type="text" id="reward" name="reward" value="{{ old('reward') }}" required>
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit" class="btn">Create Bounty</button>
                </div>
            </form>
        </div>
    </body>
    @include('footer')
</html>
