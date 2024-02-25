@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <h3>DashBoard</h3>
    
    <!-- .section-block -->
    <div class="section-block">
    <hr/>
        <!-- metric row -->
        <div class="metric-row">
            <div class="col-lg-9">
                <div class="metric-row metric-flush">
                    <!-- metric column -->
                    <div class="col">
                        <!-- .metric -->
                        <a href="/traffic-in-person" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label"> All Incidents </h2>
                            <p class="metric-value h3">
                                <sub><i class="oi oi-people"></i></sub> <span class="value">{{$cards['allIncidents']}}</span>
                            </p>
                        </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                    <!-- metric column -->
                    <div class="col">
                        <!-- .metric -->
                        <a href="/facilitators" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label"> Resolved Incidents </h2>
                            <p class="metric-value h3">
                                <sub><i class="oi oi-fork"></i></sub> <span class="value">{{$cards['resolved']}}</span>
                            </p>
                        </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                    <!-- metric column -->
                    <div class="col">
                        <!-- .metric -->
                        <a href="/info-soms" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label"> Closed Incidents </h2>
                            <p class="metric-value h3">
                                <sub><i class="fa fa-tasks"></i></sub> <span class="value">{{$cards['closed']}}</span>
                            </p>
                        </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                </div>
            </div><!-- metric column -->
            <div class="col-lg-3">
                <!-- .metric -->
                <a href="#" class="metric metric-bordered align-items-center">
                    <div class="metric-badge">
                        <span class="badge badge-lg badge-success"><span class="oi oi-media-record pulse mr-1"></span> ONGOING TASKS</span>
                    </div>
                    <p class="metric-value h3">
                        <sub><i class="fa fa-tasks"></i></sub> <span class="value">{{$cards['onGoing']}}</span>
                    </p>
                </a>  <!-- /.metric -->
            </div><!-- /metric column -->
        </div><!-- /metric row -->
        
        <div class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-fluid">
                        <div class="card-body">
                            <div style="width: ; margin: auto;">
                                <canvas id="barChart"></canvas>
                            </div>
                        
                            <script>
                                    var ctx = document.getElementById('barChart').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: @json($data['months']),
                                            datasets: [{
                                                label: 'Data',
                                                data: @json($data['monthsCounts']),
                                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                                borderColor: 'rgba(75, 192, 192, 1)',
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                </script>
                        </div>      
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <div class="card card-fluid">
                        <div class="card-body">
                            <div style="width: ; ">
                                <canvas id="areaChart"></canvas>
                            </div>
                            
                            <script>
                                var ctx = document.getElementById('areaChart').getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: @json($data1['locations']),
                                        datasets: [{
                                            label: 'Data',
                                            data: @json($data1['locationCounts']),
                                            fill: true, // Set to true to fill the area under the line
                                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                            borderColor: 'rgba(75, 192, 192, 1)',
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            </script>

                            
                                  
                        </div>      
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!-- section for search and rest code -->
        <div class="card card-fluid">
                <!-- .card-header -->
                
                <!-- .card-body -->
                <div class="card-body">
                    <!-- .form-group -->
                    <form action="" method="GET">
                        <div class="form-group">
                            <!-- .input-group -->
                            <div class="input-group input-group-alt">

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                                        </div>
                                        
                                        <input type="text" class="form-control" placeholder="Search record by caller name,  or priority, or Ref_number" name="name">
                                    
                                    </div>
                                    <div class="input-group-prepend">
                                        <button class="btn btn-secondary">Search</button>
                                    </div>    
                            </div>
                        
                        </div><!-- /.form-group -->
                    </form>  
                    
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
                        @forelse ($incidentSearch as $incident)
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
                    
        </div><!-- /.card-body -->
        </div>
    </div><!-- /.section-block -->
    <!-- grid row -->
@endsection
