@extends('layouts.layout')

@section('content')
    @section('title', 'Add New Trafficking')
    <div class="card">
        <div class="card-body">
            <div class="form-wizard">
                <div class="progress mb-2">
                    <div class="progress-bar bg-success " role="progressbar" style="width: 0;"></div>
                </div>
                <form class="" method="post" action="{{ route('traffic-in-person.store') }}" enctype="multipart/form-data">
                    <div class="form-step">
                        <h4>Personal Information</h4>
                        
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="surname">Surname:</label>
                                <input type="text" name="surname" placeholder="Surname" class="form-control" value="{{ old('surname') }}" required>
                                <p style="color:red">@error('surname') {{$message}} @endError</p>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="given_name">Given Name:</label>
                                <input type="text" name="given_name" placeholder="Given Name" class="form-control" value="{{ old('given_name') }}" required>
                                <p style="color:red">@error('given_name') {{$message}} @endError</p>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="aliases">Aliases:</label>
                                <input type="text" name="aliases" placeholder="Aliases" value="{{ old('aliases') }}" class="form-control">
                                <p style="color:red">@error('aliases') {{$message}} @endError</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date_of_birth">Date of Birth:</label>
                                <input type="date"  placeholder="Date of Birth" name="date_of_birth" value="{{ old('date_of_birth') }}" class="form-control">
                                <p style="color:red">@error('date_of_birth') {{$message}} @endError</p>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="sex">Sex:</label>
                                <div class="form-floating ">
                                <select class="form-select form-control" name="sex" id="floatingSelect" aria-label="Floating label select example">
                                    <option value="0">choose</option>   
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                                <p style="color:red">@error('sex') {{$message}} @endError</p>  
                            </div>
                            </div>
                        
                       

                            <div class="form-group col-md-6">
                                <label for="nin">NIN:</label>
                                <input type="number"  placeholder="NIN" name="nin" class="form-control" value="{{ old('nin') }}">
                                <p style="color:red">@error('nin') {{$message}} @endError</p>
                            </div>
                        </div>
                        
                        <!-- Add more form fields for Step 1 here -->
                        <button class="btn btn-primary next-step">Next</button>
                    </div>
                    <div class="form-step">
                        <h4>Contact Information</h4>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="phone">Phone:</label>
                                <input type="text" name="phone" placeholder="Phone" class="form-control" value="{{ old('phone') }}">
                                <p style="color:red">@error('phone') {{$message}} @endError</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="passport">Passport:</label>
                                <input type="number" name="passport" placeholder="Passport" class="form-control" value="{{ old('passport') }}">
                                <p style="color:red">@error('passport') {{$message}} @endError</p>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="town">Town:</label>
                                <input type="text" name="town" placeholder="Town" class="form-control" value="{{ old('town') }}">
                                <p style="color:red">@error('town') {{$message}} @endError</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="present_address">Present Address:</label>
                                <input type="text"  placeholder="Present Address" name="present_address" class="form-control" value="{{ old('town') }}"> 
                                <p style="color:red">@error('present_address') {{$message}} @endError</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last_address">Last Address:</label>
                                <input type="text" placeholder="Last Address" name="last_address" class="form-control" value="{{ old('last_address') }}">
                                <p style="color:red">@error('last_address'){{$message}} @endError</p>
                            </div>
                        </div>
                        
                        <!-- Add more form fields for Step 2 here -->
                        <button class="btn btn-primary prev-step">Previous</button>
                        <button class="btn btn-primary next-step">Next</button>
                    </div>
                    <div class="form-step">
                        <h4>Location Information</h4>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nationality">Nationality:</label>
                            <input placeholder="Nationality" type="text" name="nationality" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="state">State:</label>
                            <input type="text" name="state" placeholder="State" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lga">LGA:</label>
                            <input type="text" name="lga" class="form-control" placeholder="LGA">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="town">Town:</label>
                            <input type="text" name="town" class="form-control" placeholder="Town">
                        </div>

                        
                        
                    
                        
                        <div class="form-group col-md-6">
                            <label for="origin_or_source">Origin/Source:</label>
                            <input type="text" placeholder="Origin or Source" name="origin_or_source" class="form-control" value="{{ old('origin_or_source') }}">
                            <p style="color:red">@error('origin_or_source') {{$message}} @endError</p>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="transit">Transit:</label>
                            <input type="text" placeholder="Transit" name= "transit" class="form-control" value="{{ old('transit') }}">
                            <p style="color:red">@error('transit') {{$message}} @endError</p>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="entry_point">Entry Point:</label>
                            <input type="text" placeholder="Entry Point" name="entry_point" class="form-control" value="{{ old('entry_point') }}">
                            <p style="color:red">@error('entry_point') {{$message}} @endError</p>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="destination">Destination:</label>
                            <input type="text" placeholder="Destination" name="destination" class="form-control" value="{{ old('destination') }}">
                            <p style="color:red">@error('destination') {{$message}} @endError</p>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exit_point">Exit Point:</label>
                            <input type="text" placeholder="Exit Point" name="exit_point" class="form-control" value="{{ old('exit_point') }}">
                            <p style="color:red">@error('exit_point') {{$message}} @endError</p>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reason_return">Reason for Return:</label>
                            <input type="text" placeholder="Reason for Return" name="reason_return" class="form-control" value="{{ old('reason_return') }}">
                            <p style="color:red">@error('reason_return') {{$message}} @endError</p>
                        </div>
                        </div>
                        
                        <!-- Add more form fields for Step 3 here -->
                        <button class="btn btn-primary prev-step">Previous</button>
                        <button class="btn btn-primary next-step">Next</button>

                    </div>
                    <div class="form-step">
                        <h4>Biometric Information</h4>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="photograph">Photograph:</label>
                                <div class="custom-file">
                                    <input type="file" name="photograph" class=" form-control bg-secondary" id="photograph"  required>
                                    <div display="flex" >
                                        <img id="image-preview"  src="#" alt="Image Preview" style="max-width: 10%; display: none;">
                                    </div>
                                    <p style="color:red"> @error('photograph') {{$message}} @endError</p>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="fingerprint">Fingerprint:</label>
                                <input type="text" placeholder="Fingerprint" name="fingerprint" class="form-control" value="{{ old('fingerprint') }}">
                                <p style="color:red">@error('fingerprint') {{$message}} @endError</p>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="complexion">Complexion:</label>
                                <input type="text" placeholder="Complexion" name="complexion" class="form-control" value="{{ old('complexion') }}">
                                <p style="color:red">@error('complexion') {{$message}} @endError</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="height">Height:</label>
                                <input type="text" placeholder="Height" name="height" class="form-control" value="{{ old('height') }}">
                                <p style="color:red">@error('height') {{$message}} @endError</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="eye_colour">Eye Colour:</label>
                                <input type="text" placeholder="Eye Colour" name="eye_colour" class="form-control" value="{{ old('eye_colour') }}">
                                <p style="color:red">@error('eye_colour') {{$message}} @endError</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tribal_mark">Tribal Mark:</label>
                                <input type="text" placeholder="Tribal Mark" name="tribal_mark" class="form-control" value="{{ old('tribal_mark') }}">
                                <p style="color:red">@error('tribal_mark') {{$message}} @endError</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="languages_spoken">Languages Spoken:</label>
                                <input type="text" placeholder="Languages Spoken" name="languages_spoken" class="form-control" value="{{ old('languages_spoken') }}">
                                <p style="color:red">@error('languages_spoken') {{$message}} @endError</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="current_location">Current Location:</label>
                                <input type="text" placeholder="Current Location" name="current_location" class="form-control" value="{{ old('current_location') }}">
                                <p style="color:red">@error('current_location') {{$message}} @endError</p>
                            </div>
                        </div>
                        

                        

                        
                        
                        <!-- Add more form fields for Step 4 here -->
                        <button class="btn btn-primary prev-step">Previous</button>
                        <button type="submit" class="btn btn-success submit-button">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <script>
            $(document).ready(function () {
                // Listen for changes on the file input field
                $('#photograph').change(function () {
                    var input = this;

                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#image-preview')
                                .attr('src', e.target.result) // Set the src attribute to the data URL
                                .show(); // Show the image preview
                        };

                        reader.readAsDataURL(input.files[0]); // Read and convert the file to a data URL
                    }
                });
            });
        </script>
        
@endsection
