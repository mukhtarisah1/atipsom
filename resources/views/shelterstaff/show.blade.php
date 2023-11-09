@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Shelter Staff Member Details</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>First Name:</strong> {{ $staff->firstname }}</p>
            <p><strong>Last Name:</strong> {{ $staff->lastname }}</p>
            <p><strong>Email:</strong> {{ $staff->email }}</p>
            <p><strong>Phone:</strong> {{ $staff->phone }}</p>
            <p><strong>Photograph:</strong></p>
            <img src="{{ asset('storage/' . $staff->photograph) }}" alt="Photograph" class="img-thumbnail" width="200">
            <p><strong>Comments:</strong> {{ $staff->comments }}</p>
            <p><strong>Rank:</strong> {{ $staff->rank }}</p>
        </div>
    </div>
</div>
@endsection
