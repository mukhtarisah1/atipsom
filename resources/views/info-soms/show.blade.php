@extends('layouts.layout')

@section('content')
    <h1>InfoSom Record Details</h1>
    <ul>
        <li><strong>ID:</strong> {{ $infoSom->id }}</li>
        <li><strong>Surname:</strong> {{ $infoSom->surname }}</li>
        <li><strong>Given Name:</strong> {{ $infoSom->given_name }}</li>
        <!-- Add more details for other fields -->
    </ul>
    <a href="{{ route('info-soms.edit', $infoSom->id) }}" class="btn btn-primary">Edit</a>
@endsection
