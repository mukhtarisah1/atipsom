<!-- resources/views/incidents/index.blade.php -->
@extends('layouts.layout')

@section('content')
    <div>
        
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="card">
    <div class="card-body">
    <a href="{{ route('incidents.create') }}"><h6>Create New Incident</h6></a>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <tr>
                <th>No</th>
                <th>Ref Number</th>
                <th>Caller Name</th>
                <th>Category</th>
                <th>Opened</th>
                <th>Priority</th>
                <th>state</th>
                <th>Assigned to</th>
                
                <!-- Add other fields as needed -->
                <th>Actions</th>
            </tr>
            @forelse ($incidents as $incident)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="{{ route('incidents.show', $incident->id) }}">{{ $incident->number }}</a></td>
                    <td>{{ $incident->caller_name }}</td>
                    <td>{{ $incident->category }}</td>
                    <td>{{ $incident->opened }}</td>
                    <td>{{ $incident->priority }}</td>
                    <td>{{ $incident->state }}</td>
                    <td>{{ $incident->assigned_to }}</td>
                    
                    
                    <!-- Add other fields as needed -->
                    <td>
                        <form action="{{ route('incidents.destroy', $incident->id) }}" method="POST">
                            
                            <a href="{{ route('incidents.edit', $incident->id) }}"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-icon btn-secondary" onclick="return confirm('Are you sure you want to delete this record?')" type="submit"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></button>
                        </form>
                    </td>
                </tr>
            @empty
                
                <p>No incidents created yet.</p> 
                
            @endforelse


        </table>
    </div>
    </div>
</div>
   
@endsection
