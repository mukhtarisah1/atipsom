<!-- resources/views/incidents/create.blade.php -->
@extends('layouts.layout')

@section('content')
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .seperation{
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap:1em ;
    }
    .lab{
        display: inline-block;
    }
    .len{
        display: inline-block;
        width: 150px;
    }
</style>

@if(session('errors'))
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    

    <div id="base-style" class="card p-3">
        <div class="card-body">
            <h3 class="card-title">Edit Incident</h3>
            
            <form action="{{ route('incidents.update', $incident->id) }}" class="row g-3" method="POST" onsubmit="return confirm('Are you sure you want to resolve?');">
                @method('PUT')
                @csrf
                
                <div class="col-md-6 mb-3">
                    <label for="number" class="form-label">Number</label>
                    <i title="Required">*</i>
                    <input type="number" class="form-control" name="number" id="inputEmail4" value="{{ old('number', $incident->number) }}">
                    <p style="color:red">@error('number') {{$message}} @endError</p>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="caller_name" class="form-label">Caller Name</label>
                    <i title="Required">*</i>
                    <input type="text" class="form-control" name="caller_name" id="inputPassword4" value="{{old('caller_name', $incident->caller_name)}}">
                    <p style="color:red">@error('caller_name') {{$message}} @endError</p>
                </div>
                
                <div class="col-md-6 mb-3">
                
                    <label for="Opened" class="form-label">Opened</label>
                    <i title="Required">*</i>
                    <input type="date" class="form-control" name="opened" id="inputPassword4" value="{{old('opened', $incident->opened)}}" required>
                </div>
                <div class="col-md-6 mb-3">
                
                    <label for="Closed" class="form-label">Closed</label>
                    
                    <input type="date" class="form-control" name="closed" id="inputEmail4" value="{{ old('closed', $incident->closed)}}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="category" class="form-label">Category</label>
                    <i title="Required">*</i>
                    <select class="custom-select" id="sel1" name="category" required>
                        <option value=""> Choose... </option>
                        <option value="Software" {{ old('category', $incident->category) == 'Software' ? 'selected' : '' }}> Software </option>
                        <option value="Hardware" {{ old('category', $incident->category) == 'Hardware' ? 'selected' : '' }}> Hardware </option>
                        <option value="Network" {{ old('category', $incident->category) == 'Network' ? 'selected' : '' }}> Network </option>
                        <option value="Database" {{ old('category', $incident->category) == 'Database' ? 'selected' : '' }}> Database </option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="category" class="form-label">Priority</label>
                    <i title="Required">*</i>
                    <select class="custom-select" id="sel1" name="priority" required>
                        <option value=""> Choose... </option>
                        <option value="High" {{old('priority', $incident->priority == 'High'? 'Selected' : '')}}> 1-High </option>
                        <option value="Medium" {{old('priority', $incident->priority == 'Medium'? 'Selected' : '')}}> 2-Moderate </option>
                        <option value="Low" {{old('priority', $incident->priority == 'Low'? 'Selected' : '')}}> 3-low </option>
                        <option value="Planning" {{old('priority', $incident->priority == 'Planning'? 'Selected' : '')}}> 4-Planning </option>
                    </select>
                </div>
               
                <div class="col-md-6 mb-3">
                    <label for="category" class="form-label" name="state">State</label>
                    <i title="Required">*</i>
                    <select class="custom-select" id="sel1" name="state" required="">
                        <option value="New"> New </option>
                        <option value="In progress" {{old('state', $incident->state == 'In progress'? 'Selected' : '')}}> In Progress </option>
                        <option value="on hold" {{old('state', $incident->state == 'on hold'? 'Selected' : '')}}> On Hold </option>
                        <option value="resolved" {{old('state', $incident->state == 'resolved'? 'Selected' : '')}}> Resolved </option>
                        <option value="closed" {{old('state', $incident->state == 'closed' ? Selected : '' )}}> Closed </option>
                        <option value="canceled" {{old('state', $incident->state == 'canceled' ? 'Selected' : '' )}}> Canceled </option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="caller_name" class="form-label">Assiged to</label>
                    <i title="Required">*</i>
                    <select class="custom-select" id="sel1" name="assigned_to" required="">
                        <option value="New"> Choose.. </option>
                        @foreach($users as $user)
                            <option value="{{ $user->email }}" {{ old('assigned_to', optional($incident)->assigned_to) == $user->email ? 'selected' : '' }}>
                                {{ $user->surname }} &nbsp; {{ $user->given_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="number" class="form-label">Location</label>
                    <i title="Required">*</i>
                    <input type="text" class="form-control" name="location" id="inputEmail4" value="{{ old('location', $incident->location) }}">
                </div>
               
                <div class="col-12 mb-3">
                    <label for="inputAddress" class="form-label">Description</label>
                    <i title="Required">*</i>
                    <textarea class="form-control" id="lbl3" rows="3" name="description" placeholder="Optional label" required>
                    {{ old('description', optional($incident)->description) }} 
                    </textarea>
                </div>

                <div class="col-12 mb-3">
                    <button type="submit" class="btn btn-primary">Resolve</button>
                </div>
            
            </form>
        </div>
        
    </div>  
@endsection
