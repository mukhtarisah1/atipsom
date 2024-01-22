<!-- resources/views/incidents/index.blade.php -->
@extends('layouts.layout')

@section('content')
    <div>
        <a href="{{ route('incidents.create') }}">Create New Incident</a>
    </div>

    @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
    @endif

    <table>
        <tr>
            <th>No</th>
            <th>Number</th>
            <th>Caller Name</th>
            <!-- Add other fields as needed -->
            <th>Actions</th>
        </tr>
        @forelse ($incidents as $incident)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $incident->number }}</td>
                <td>{{ $incident->caller_name }}</td>
                <!-- Add other fields as needed -->
                <td>
                    <form action="{{ route('incidents.destroy', $incident->id) }}" method="POST">
                        <a href="{{ route('incidents.show', $incident->id) }}">Show</a>
                        <a href="{{ route('incidents.edit', $incident->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No incidents created yet.</td>
            </tr>
        @endforelse
    </table>
@endsection
