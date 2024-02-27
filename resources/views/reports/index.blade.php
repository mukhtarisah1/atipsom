@extends('layouts.layout')

@section('content')

    <div id="base-style" class="card">
                  
                  <div class="card-body">
                    
                    <form action="{{ route('incidents.reports.generate') }}" method="post">
                        @csrf
                      
                      <fieldset>
                        <legend class="border-bottom">Report generation Page</legend> 
                        <div class="form-group col-md-6">
                          <label for="start_date">Start Date:</label>
                          <input type="date" class="form-control" name="start_date" > <small id="tf1Help" class="form-text text-muted">Select a date to start the report from</small>
                          @error('start_date')
                            <p style="color: red;">{{ $message }}</p>
                          @enderror
                        </div>
                        <div class="form-group col-md-6">
                          <label for="end_date">End Date:</label> 
                          <input type="date" class="form-control" name="end_date"  > <small id="tf1Help" class="form-text text-muted">Select a date to end the report to</small>
                          @error('end_date')
                            <p style="color: red;">{{ $message }}</p>
                          @enderror
                        </div>
                       
                        <div class="form-actions">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                        
                      </fieldset>
                      
                    </form>
                  </div>
                  
                  
                </div>
@endsection