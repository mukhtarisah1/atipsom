@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Shelter Staff Member</h1>

    <form method="post" action="{{ route('shelterstaff.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="photograph">Photograph:</label>
            <div class="custom-file">
                <input type="file" name="photograph" class="custom-file-input" id="photograph" required>
                <label class="custom-file-label" for="photograph">Choose file</label>
            </div>
        </div>

        <div class="form-group">
            <label for="comments">Comments:</label>
            <textarea name="comments" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="rank">Rank:</label>
            <input type="text" name="rank" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Create Staff Member</button>
    </form>
</div>
@endsection
