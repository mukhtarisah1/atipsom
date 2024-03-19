@extends('layouts.layout')
@section('content')
    <!-- resources/views/reports/generated.blade.php -->
    <div id="base-style" class="card">
                  
        <div class="card-body">
            <h3 class="text-success">Generated Report</h3>

            <p>Total Incidents: {{ $totalIncidents }}</p>

            <h5>Incident Categories</h5>
            <ul>
                @foreach ($incidentCategories as $category => $count)
                    <li>{{ $category }}: {{ $count }}</li>
                @endforeach
            </ul>

            <p>Average Resolution Time: {{ $averageResolutionTime }} hours</p>

            <h5>Priority Distribution</h5>
            <ul>
                @foreach ($priorityDistribution as $priority => $count)
                    <li>{{ $priority }}: {{ $count }}</li>
                @endforeach
            </ul>

            <!-- Add more displays for other metrics as needed... -->

            <h5>Top Callers</h5>
            <ul>
                @foreach ($topCallers as $caller => $count)
                    <li>{{ $caller }}: {{ $count }}</li>
                @endforeach
            </ul>

            <h5>Top Assigned Users</h5>
            <ul>
                @foreach ($topAssignedUsers as $user => $count)
                    <li>{{ $user }}: {{ $count }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    

@endsection