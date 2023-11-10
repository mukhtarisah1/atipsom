@extends('layouts.layout')

@section('content')


            
    
@section('title', 'Add New Shelter')
        <div class="card">
            <div class="card-body">
                <form class="row g-3" action="{{route('info-soms.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12 form-group">
                        <label for="inputManagerName" class="form-label">Manager Name</label>
                        <input type="text" name="manager_name" class="form-control" id="inputManagerName" value="{{ old('manager_name') }}" placeholder="Manager's Full Name">
                        <p style="color:red">@error('manager_name') {{$message}} @endError</p>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" value="{{ old('email') }}" placeholder="Email">
                        <p style="color:red">@error('email') {{$message}} @endError</p>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="inputPhone" class="form-label">Phone</label>
                        <input type="text" name="phone"  class="form-control" id="inputPhone" value="{{ old('phone') }}" placeholder="Phone">
                    <p style="color:red">@error('phone') {{$message}} @endError</p>
                    </div>
                    
                    <div class="col-12 form-group">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="inputAddress" value="{{ old('address') }}" placeholder="Enter Complete Address Information">
                        <p style="color:red">@error('address') {{$message}} @endError</p>
                    </div>
                    <div class="col-12 form-group">
                        <label for="inputFacilities" class="form-label">Facilities</label>
                        <input type="text" class="form-control" name="facilities" id="inputFacilities" value="{{ old('facilities') }}" placeholder="Facility Name">
                        <p style="color:red">@error('facilities') {{$message}} @endError</p>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="input" class="form-label">Capacity</label>
                        <input type="number" name="capacity" class="form-control custom-number" id="inputCapacity" value="{{ old('capacity') }}" placeholder="Capacity">
                        <p style="color:red">@error('capacity') {{$message}} @endError</p>
                        
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="input" class="form-label">Number Of Seats</label>
                        <input type="number" name="number_of_seats" class="form-control" id="inputSeats" value="{{ old('number_of_seats') }}" placeholder="Seats Number">
                        <p style="color:red">@error('number_of_seats') {{$message}} @endError</p>
                    </div>
                    <div class="col-md-2 form-group">
                        <label for="inputState" class="form-label">vacancies</label>
                        <input id="inputState" name="vacancies" class="form-control" value="{{old('vacancies')}}" placeholder="vacancies">
                        <p style="color:red">@error('vacancies') {{$message}} @endError</p>
                    </div>
                    
                    <div class="col-12 form-group">
                          <label class="d-flex justify-content-between" for="lbl4"><span>Any Other Info</span> </label>
                          <textarea name="any_other_info" class="form-control" id="lbl4"  rows="3" placeholder="Enter Any other Information">{{ old('any_other_info') }}</textarea>
                          
                          <p style="color:red">@error('any_other_info') {{$message}} @endError</p>                          
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="input" class="form-label">Photograph</label>
                        <input type="file" name="photograph" class="form-control" id="inputSeats" value="{{ old('photograph') }}" placeholder="photograph">
                        <p style="color:red">@error('photograph') {{$message}} @endError</p>
                    </div>

                    <div class="col-12 form-group">
                        <button type="submit" class="btn btn-primary">Create New Record</button>
                    </div>
                </form>
        </div>
    </div>
        
@endsection
