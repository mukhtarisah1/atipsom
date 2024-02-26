<!-- resources/views/incidents/show.blade.php -->
@extends('layouts.layout')

@section('content')
    <div class="incident-container">
        <h2>View Incident</h2>

        <div class="incident-details">
            <div class="incident-info">
                <strong>User ID:</strong>
                {{ $incident->user_id }}
            </div>
            <div class="incident-info">
                <strong>Number:</strong>
                {{ $incident->number }}
            </div>
            <div class="incident-info">
                <strong>Caller Name:</strong>
                {{ $incident->caller_name }}
            </div>
            <!-- Add styling for other fields as needed -->
            <div class="incident-info">
                <strong>Category:</strong>
                {{ $incident->category }}
            </div>
            <div class="incident-info">
                <strong>Opened:</strong>
                {{ $incident->opened }}
            </div>
            <div class="incident-info">
                <strong>Closed:</strong>
                {{ $incident->closed }}
            </div>
            <div class="incident-info">
                <strong>Priority:</strong>
                {{ $incident->priority }}
            </div>
            <div class="incident-info">
                <strong>State:</strong>
                {{ $incident->state }}
            </div>
            <div class="incident-info">
                <strong>Description:</strong>
                {{ $incident->description }}
            </div>
            <div class="incident-info">
                <strong>Assigned To:</strong>
                {{ $incident->assigned_to }}
            </div>
            <div class="incident-info">
                <strong>Location:</strong>
                {{ $incident->location }}
            </div>
        </div>

        <div class="back-to-list">
            <a href="{{ route('incidents.index') }}">Back to List</a>
        </div>
    </div>
@endsection
