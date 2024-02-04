@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')
    
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
                    <sub><i class="oi oi-people"></i></sub> <span class="value">8</span>
                </p>
                </a> <!-- /.metric -->
            </div><!-- /metric column -->
            <!-- metric column -->
            <div class="col">
                <!-- .metric -->
                <a href="/facilitators" class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Resolved Incidents </h2>
                <p class="metric-value h3">
                    <sub><i class="oi oi-fork"></i></sub> <span class="value">12</span>
                </p>
                </a> <!-- /.metric -->
            </div><!-- /metric column -->
            <!-- metric column -->
            <div class="col">
                <!-- .metric -->
                <a href="/info-soms" class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Closed Incidents </h2>
                <p class="metric-value h3">
                    <sub><i class="fa fa-tasks"></i></sub> <span class="value">64</span>
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
                    <sub><i class="fa fa-tasks"></i></sub> <span class="value">24</span>
                </p>
                </a>  <!-- /.metric -->
        </div><!-- /metric column -->
        </div><!-- /metric row -->

    </div><!-- /.section-block -->
    <!-- grid row -->
    
    
    
    
           
          
@endsection
