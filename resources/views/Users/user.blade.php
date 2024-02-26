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
    <a href="/register"><h6>Create New Incident</h6></a>
    <table class="table table-striped table-hover table-responsive">
        <tr>
            <th>No</th>
            
            <th>Name</th>
            <th>Given Name</th>
            <th>Email</th>
            
            
            <!-- Add other fields as needed -->
            <th>Actions</th>
        </tr>
        @forelse ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                
                <td>{{ $user->surname }}</td>
                <td>{{ $user->given_name }}</td>
                <td>{{ $user->email }}</td>
                
                
                <!-- Add other fields as needed -->
                <td>
                    <form action="" method="POST">
                        
                        <a href=""><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a>
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
   
@endsection
