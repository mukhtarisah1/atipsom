@extends('layouts.layout')
@section('content')
    <!-- resources/views/reports/generated.blade.php -->

    <h3>Generated Report</h3>

    <p>Total Incidents: {{ $totalIncidents }}</p>

    <h4>Incident Categories</h4>
    <ul>
        @foreach ($incidentCategories as $category => $count)
            <li>{{ $category }}: {{ $count }}</li>
        @endforeach
    </ul>

    <p>Average Resolution Time: {{ $averageResolutionTime }} hours</p>

    <h4>Priority Distribution</h4>
    <ul>
        @foreach ($priorityDistribution as $priority => $count)
            <li>{{ $priority }}: {{ $count }}</li>
        @endforeach
    </ul>

    <!-- Add more displays for other metrics as needed... -->

    <h4>Top Callers</h4>
    <ul>
        @foreach ($topCallers as $caller => $count)
            <li>{{ $caller }}: {{ $count }}</li>
        @endforeach
    </ul>

    <h4>Top Assigned Users</h4>
    <ul>
        @foreach ($topAssignedUsers as $user => $count)
            <li>{{ $user }}: {{ $count }}</li>
        @endforeach
    </ul>

@endsection