<!-- resources/views/incidents/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div>
        <h2>View Incident</h2>
    </div>

    <div>
        <strong>User ID:</strong>
        {{ $incident->user_id }}
    </div>
    <div>
        <strong>Number:</strong>
        {{ $incident->number }}
    </div>
    <div>
        <strong>Caller Name:</strong>
        {{ $incident->caller_name }}
    </div>
    <!-- Display other fields as needed -->
    <div>
        <strong>Category:</strong>
        {{ $incident->category }}
    </div>
    <div>
        <strong>Opened:</strong>
        {{ $incident->opened }}
    </div>
    <div>
        <strong>Closed:</strong>
        {{ $incident->closed }}
    </div>
    <div>
        <strong>Priority:</strong>
        {{ $incident->priority }}
    </div>
    <div>
        <strong>State:</strong>
        {{ $incident->state }}
    </div>
    <div>
        <strong>Description:</strong>
        {{ $incident->description }}
    </div>
    <div>
        <strong>Assigned To:</strong>
        {{ $incident->assigned_to }}
    </div>
    <div>
        <strong>Location:</strong>
        {{ $incident->location }}
    </div>

    <div>
        <a href="{{ route('incidents.index') }}">Back to List</a>
    </div>
@endsection
