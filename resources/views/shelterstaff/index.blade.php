@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Shelter Staff Members</h3>

    <table class="table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Photograph</th>
                <th>Comments</th>
                <th>Rank</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($staffMembers as $staff)
            <tr>
                <td>{{ $staff->firstname }}</td>
                <td>{{ $staff->lastname }}</td>
                <td>{{ $staff->email }}</td>
                <td>{{ $staff->phone }}</td>
                <td>
                    <img src="{{ asset('storage/' . $staff->photograph) }}" alt="Photograph" class="img-thumbnail" width="50">
                </td>
                <td>{{ $staff->comments }}</td>
                <td>{{ $staff->rank }}</td>
                <td>
                    <a href="{{ route('shelterstaff.edit', $staff->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('shelterstaff.destroy', $staff->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
