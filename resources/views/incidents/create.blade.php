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
            <h3 class="card-title">Create New Incident</h3>
            
            <form action="{{ route('incidents.store') }}" class="row g-3" method="POST">
                @csrf
                
                <div class="col-md-6 mb-3">
                    <label for="number" class="form-label">Number</label>
                    <i title="Required">*</i>
                    <input type="number" class="form-control" name="number" id="inputEmail4" value="{{ old('number') }}">
                    <p style="color:red">@error('number') {{$message}} @endError</p>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="caller_name" class="form-label">Caller Name</label>
                    <i title="Required">*</i>
                    <input type="text" class="form-control" name="caller_name" id="inputPassword4" value="{{old('caller_name')}}">
                    <p style="color:red">@error('caller_name') {{$message}} @endError</p>
                </div>
                
                <div class="col-md-6 mb-3">
                
                    <label for="Opened" class="form-label">Opened</label>
                    <i title="Required">*</i>
                    <input type="date" class="form-control" name="opened" id="inputPassword4">
                </div>
                <div class="col-md-6 mb-3">
                
                    <label for="Closed" class="form-label">Closed</label>
                    <i title="Required">*</i>
                    <input type="date" class="form-control" name="closed" id="inputEmail4" value="{{ old('closed') }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="category" class="form-label">Category</label>
                    <i title="Required">*</i>
                    <select class="custom-select" id="sel1" name="category" required>
                        <option value=""> Choose... </option>
                        <option value="Software"> Software </option>
                        <option value="Hardware"> Hardware </option>
                        <option value="Network"> Network </option>
                        <option value="Database"> Database </option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="category" class="form-label">Priority</label>
                    <i title="Required">*</i>
                    <select class="custom-select" id="sel1" name="priority" required>
                        <option value=""> Choose... </option>
                        <option value="High"> 1-High </option>
                        <option value="Medium"> 2-Moderate </option>
                        <option value="Low"> 3-low </option>
                        <option value="4"> 4-Planning </option>
                    </select>
                </div>
               
                <div class="col-md-6 mb-3">
                    <label for="category" class="form-label" name="state">State</label>
                    <i title="Required">*</i>
                    <select class="custom-select" id="sel1" name="state" required="">
                        <option value="New"> New </option>
                        <option value="In progress"> In Progress </option>
                        <option value="On Hold"> On Hold </option>
                        <option value="Resolved"> Resolved </option>
                        <option value="Closed"> Closed </option>
                        <option value="Canceled"> Canceled </option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="caller_name" class="form-label">Assiged to</label>
                    <i title="Required">*</i>
                    <select class="custom-select" id="sel1" name="assigned_to" required="">
                        <option value="New"> Choose.. </option>
                        @foreach($users as $user)
                            <option value="{{$user->email}}">{{$user->surname}} &nbsp {{$user->given_name}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="number" class="form-label">Location</label>
                    <i title="Required">*</i>
                    <input type="text" class="form-control" name="location" id="inputEmail4" value="{{ old('location') }}">
                </div>
               
                <div class="col-12 mb-3">
                    <label for="inputAddress" class="form-label">Description</label>
                    <i title="Required">*</i>
                    <textarea class="form-control" id="lbl3" rows="3" name="description" placeholder="Optional label"> </textarea>
                </div>

                <div class="col-12 mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            
            </form>
        </div>
        
    </div>  
@endsection
