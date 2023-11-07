@extends('layouts.layout')

@section('content')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    
    <h1>Traffic In Persons Facilitators</h1>
    <a class="btn btn-success" href="{{ route('traffic-in-person.create') }}">Create New</a>
    

    <table class="table table-bordered mt-2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Surname</th>
                <th>Given Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($facilitators as $facilitator)
                <tr>
                    <td>{{ $facilitator->id }}</td>
                    <td>{{ $facilitator->surname }}</td>
                    <td>{{ $facilitator->given_name }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('facilitator.show', $facilitator->id) }}">View</a>
                        <a class="btn btn-warning" href="{{ route('facilitator.edit', $facilitator->id) }}">Edit</a>
                        <form action="{{ route('traffic-in-person.destroy', $facilitator->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
