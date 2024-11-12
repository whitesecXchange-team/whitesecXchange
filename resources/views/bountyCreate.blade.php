<!DOCTYPE html>
<html lang="en">
    <head>
        @include('header')
        <link rel="stylesheet" href="{{ asset('css/bountyCreate.css') }}">
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
                    <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Bounty Title" required>
                </div>

                <!-- Description Input -->
                <div class="form-group">
                    <textarea id="description" name="description" rows="4" placeholder="Description" required>{{ old('description') }}</textarea>
                </div>

                <!-- Reward Input -->
                <div class="form-group">
                    <input type="text" id="reward" name="reward" value="{{ old('reward') }}" placeholder="Reward" required>
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit" class="btn">create bounty</button>
                </div>
            </form>
        </div>
    </body>
    @include('footer')
</html>
