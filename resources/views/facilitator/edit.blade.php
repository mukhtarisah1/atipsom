@extends('layouts.layout')

@section('content')


            
    
        @section('title', 'Edit Trafficking Facilitator')
        <div class="form-wizard">
            <div class="progress mb-2">
                <div class="progress-bar bg-success " role="progressbar" style="width: 0;"></div>
            </div>
            <form method="post" action="{{ route('facilitator.update', $facilitator->id) }}" enctype="multipart/form-data">
                <div class="form-step">
                    <h4>Personal Information</h4>
                    
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="surname">Surname:</label>
                        <input type="text" name="surname" placeholder="Surname" class="form-control" value="{{ old('surname', $facilitator->surname ) }}" required>
                        <p style="color:red">@error('surname') {{$message}} @endError</p>
                    </div>
                    
                    <div class="form-group">
                        <label for="given_name">Given Name:</label>
                        <input type="text" name="given_name" placeholder="Given Name" class="form-control" value="{{ old('given_name', $facilitator->given_name) }}" required>
                        <p style="color:red">@error('given_name') {{$message}} @endError</p>
                    </div>

                    <div class="form-group">
                        <label for="aliases">Aliases:</label>
                        <input type="text" name="aliases" placeholder="Aliases" value="{{ old('aliases', $facilitator->aliases) }}" class="form-control">
                        <p style="color:red">@error('aliases') {{$message}} @endError</p>
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Date of Birth:</label>
                        <input type="date" name="date_of_birth" value="{{ old('date_of_birth', $facilitator->date_of_birth) }}" class="form-control">
                        <p style="color:red">@error('date_of_birth') {{$message}} @endError</p>
                    </div>

                    <label for="sex">Sex:</label>
                       
                    <div class="form-floating">
                    <select class="form-select form-control" name="sex" id="floatingSelect" aria-label="Floating label select example">
                        <option value="">choose</option>
                        <option value="Male" {{ old('sex', $facilitator->sex) === 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('sex', $facilitator->sex) === 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                        <p style="color:red">@error('sex') {{$message}} @endError</p>  
                    </div>

                    <div class="form-group">
                        <label for="nin">NIN:</label>
                        <input type="text" name="nin" class="form-control" value="{{old('nin', $facilitator->nin )}}">
                        <p style="color:red">@error('nin') {{$message}} @endError</p>
                    </div>
                    


                    
                    <!-- Add more form fields for Step 1 here -->
                    <button class="btn btn-primary next-step">Next</button>
                </div>



                <div class="form-step">
                    <h4>Contact Information</h4>
                    
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" name="phone" class="form-control" value="{{ old('phone', $facilitator->phone) }}">
                        <p style="color:red">@error('phone') {{$message}} @endError</p>
                    </div>
                    

                    <div class="form-group">
                        <label for="town">Town:</label>
                        <input type="text" name="town" class="form-control" value="{{ old('town', $facilitator->town) }}">
                        <p style="color:red">@error('town') {{$message}} @endError</p>
                    </div>
                    <div class="form-group">
                        <label for="present_address">Present Address:</label>
                        <input type="text" name="present_address" class="form-control" value="{{ old('present_address', $facilitator->present_address) }}"> 
                        <p style="color:red">@error('present_address') {{$message}} @endError</p>
                    </div>
                    <div class="form-group">
                        <label for="last_address">Last Address:</label>
                        <input type="text" name="last_address" class="form-control" value="{{ old('last_address', $facilitator->last_address) }}">
                        <p style="color:red">@error('last_address'){{$message}} @endError</p>
                    </div>
                    <!-- Add more form fields for Step 2 here -->
                    <button class="btn btn-primary prev-step">Previous</button>
                    <button class="btn btn-primary next-step">Next</button>
                </div>
                <div class="form-step">
                    <h4>Location Information</h4>
                    <div class="form-group">
                        <label for="nationality">Nationality:</label>
                        <input type="text" name="nationality" value="{{ old('nanationality', $facilitator->nationality) }}" class="form-control">
                        <p style="color:red">@error('nationality') {{$message}} @endError</p>
                    </div>
                    <div class="form-group">
                        <label for="state">State:</label>
                        <input type="text" name="state" class="form-control" value="{{ old('state', $facilitator->state) }}">
                        <p style="color:red">@error('state') {{$message}} @endError</p>
                    </div>
                    <div class="form-group">
                        <label for="lga">LGA:</label>
                        <input type="text" name="lga" class="form-control" value="{{ old('lga', $facilitator->lga) }}">
                        <p style="color:red">@error('lga') {{$message}} @endError</p>
                    </div>
                    <div class="form-group">
                        <label for="town">Town:</label>
                        <input type="text" name="town" class="form-control" value="{{ old('town', $facilitator->town) }}">
                        <p style="color:red">@error('town') {{$message}} @endError</p>
                    </div>

                    
                   
                    

                   <!-- Add more form fields for Step 3 here -->
                    <button class="btn btn-primary prev-step">Previous</button>
                    <button class="btn btn-primary next-step">Next</button>
                </div>
                <div class="form-step">
                    <h4>Offence Information</h4>

                    <div class="form-group">
                        <label for="origin_or_source">Type Offence:</label>
                        <input type="text" name="type_offence" class="form-control" value="{{ old('type_offence',$facilitator->type_offence) }}">
                        <p style="color:red">@error('type_offence') {{$message}} @endError</p>
                    </div>
                    <div class="form-group">
                        <label for="transit">Type Conviction:</label>
                        <input type="text" name= "type_conviction" class="form-control" value="{{ old('type_conviction',$facilitator->type_conviction) }}">
                        <p style="color:red">@error('type_conviction') {{$message}} @endError</p>
                    </div>
                    <div class="form-group">
                        <label for="entry_point">Term Conviction:</label>
                        <input type="text" name="term_conviction" class="form-control" value="{{ old('term_conviction' ,$facilitator->term_conviction) }}">
                        <p style="color:red">@error('term_conviction') {{$message}} @endError</p>
                    </div>
                    <div class="form-group">
                        <label for="destination">Place Of Arrest:</label>
                        <input type="text" name="place_of_arrest" class="form-control" value="{{ old('place_of_arrest',$facilitator->place_of_arrest) }}">
                        <p style="color:red">@error('place_of_arrestt') {{$message}} @endError</p>
                    </div>
                    <div class="form-group">
                        <label for="destination">Victim Passport:</label>
                        <input type="text" name="victim_passport" class="form-control" value="{{ old('victim_passport' ,$facilitator->victim_passport) }}">
                        <p style="color:red">@error('victim_passport') {{$message}} @endError</p>
                    </div>
                    
                     
                    <!-- Add more form fields for Step 3 here -->
                    <button class="btn btn-primary prev-step">Previous</button>
                    <button class="btn btn-primary next-step">Next</button>

                </div>
                <div class="form-step">
                    <h4>Biometric Information</h4>
                    <div class="form-group">
                        <label for="photograph">Photograph:</label>
                        <div class="custom-file">
                            <input type="file" name="photograph" class=" form-control bg-secondary" id="photograph"  required>
                            <div display="flex" >
                                <img id="image-preview"  src="/public/photographs/{{$facilitator->photograph}}" alt="Image Preview" style="max-width: 10%; display: none;">
                            </div>
                            <p style="color:red"> @error('photograph') {{$message}} @endError</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fingerprint">Fingerprint:</label>
                        <input type="text" name="fingerprint" class="form-control" value="{{ old('fingerprint',$facilitator->fingerprint) }}">
                        <p style="color:red">@error('fingerprint') {{$message}} @endError</p>
                    </div>

                    <div class="form-group">
                        <label for="complexion">Complexion:</label>
                        <input type="text" name="complexion" class="form-control" value="{{ old('complexion',$facilitator->complexion) }}">
                        <p style="color:red">@error('complexion') {{$message}} @endError</p>
                    </div>
                    <div class="form-group">
                        <label for="height">Height:</label>
                        <input type="text" name="height" class="form-control" value="{{ old('height',$facilitator->height) }}">
                        <p style="color:red">@error('height') {{$message}} @endError</p>
                    </div>
                    <div class="form-group">
                        <label for="eye_colour">Eye Colour:</label>
                        <input type="text" name="eye_colour" class="form-control" value="{{ old('eye_colour',$facilitator->eye_colour) }}">
                        <p style="color:red">@error('eye_colour') {{$message}} @endError</p>
                    </div>
                    <div class="form-group">
                        <label for="tribal_mark">Tribal Mark:</label>
                        <input type="text" name="tribal_mark" class="form-control" value="{{ old('tribal_mark',$facilitator->tribal_mark) }}">
                        <p style="color:red">@error('tribal_mark') {{$message}} @endError</p>
                    </div>
                    <div class="form-group">
                        <label for="languages_spoken">Languages Spoken:</label>
                        <input type="text" name="language_spoken" class="form-control" value="{{ old('languages_spoken',$facilitator->language_spoken) }}">
                        <p style="color:red">@error('languages_spoken') {{$message}} @endError</p>
                    </div>
                    <div class="form-group">
                        <label for="current_location">Current Location:</label>
                        <input type="text" name="current_location" class="form-control" value="{{ old('current_location',$facilitator->current_location) }}">
                        <p style="color:red">@error('current_location') {{$message}} @endError</p>
                    </div>

                    

                    
                    
                    <!-- Add more form fields for Step 4 here -->
                    <button class="btn btn-primary prev-step">Previous</button>
                    <button type="submit" class="btn btn-success submit-button">Submit</button>
                </div>
            </form>
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
