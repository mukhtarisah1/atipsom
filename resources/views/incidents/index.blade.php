<!-- resources/views/incidents/index.blade.php -->
@extends('layouts.layout')

@section('content')
    <div>
        
    </div>

    @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="card">
    <div class="card-body">
    <a href="{{ route('incidents.create') }}"><h6>Create New Incident</h6></a>
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>No</th>
            <th>Number</th>
            <th>Caller Name</th>
            <th>Category</th>
            <th>Opened</th>
            <th>Priority</th>
            <th>state</th>
            <th>Assigned to</th>
            <th>Description</th>
            <!-- Add other fields as needed -->
            <th>Actions</th>
        </tr>
        @forelse ($incidents as $incident)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $incident->number }}</td>
                <td>{{ $incident->caller_name }}</td>
                <td>{{ $incident->category }}</td>
                <td>{{ $incident->opened }}</td>
                <td>{{ $incident->priority }}</td>
                <td>{{ $incident->state }}</td>
                <td>{{ $incident->assigned_to }}</td>
                <td>{{ $incident->description }}</td>
                
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
            
               <p>No incidents created yet.</p> 
            
        @endforelse


    </table>
    </div>
</div>
   
@endsection
