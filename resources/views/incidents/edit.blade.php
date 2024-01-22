<!-- resources/views/incidents/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div>
        <h2>Edit Incident</h2>
    </div>

    @if ($errors->any())
        <div>
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('incidents.update', $incident->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>User ID:</label>
            <input type="text" name="user_id" value="{{ $incident->user_id }}" placeholder="User ID">
        </div>
        <div>
            <label>Number:</label>
            <input type="text" name="number" value="{{ $incident->number }}" placeholder="Number">
        </div>
        <div>
            <label>Caller Name:</label>
            <input type="text" name="caller_name" value="{{ $incident->caller_name }}" placeholder="Caller Name">
        </div>
        <!-- Add other fields -->
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
