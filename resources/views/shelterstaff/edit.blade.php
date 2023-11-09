@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Shelter Staff Member</h1>

    <form method="post" action="{{ route('shelterstaff.update', $staff->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" class="form-control" value="{{ $staff->firstname }}" required>
        </div>

        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" class="form-control" value="{{ $staff->lastname }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $staff->email }}" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" class="form-control" value="{{ $staff->phone }}" required>
        </div>

        <div class="form-group">
            <label for="photograph">Photograph:</label>
            <div class="custom-file">
                <input type="file" name="photograph" class="custom-file-input" id="photograph">
                <label class="custom-file-label" for="photograph">Choose file</label>
            </div>
        </div>

        <div class="form-group">
            <label for="comments">Comments:</label>
            <textarea name="comments" class="form-control">{{ $staff->comments }}</textarea>
        </div>

        <div class="form-group">
            <label for="rank">Rank:</label>
            <input type="text" name="rank" class="form-control" value="{{ $staff->rank }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Staff Member</button>
    </form>
</div>
@endsection
