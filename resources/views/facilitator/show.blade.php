@extends('layouts.layout')

@section('content')
    <div class="container">
        <h2>Traffic In Person Facilitator  Details</h2>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Surname</th>
                            <td>{{ $facilitator->surname }}</td>
                        </tr>
                        <tr>
                            <th>Given Name</th>
                            <td>{{ $facilitator->given_name }}</td>
                        </tr>
                        <tr>
                            <th>Aliases</th>
                            <td>{{ $facilitator->aliases }}</td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td>{{ $facilitator->date_of_birth }}</td>
                        </tr>
                        <tr>
                            <th>Sex</th>
                            <td>{{ $facilitator->sex }}</td>
                        </tr>
                        <tr>
                            <th>NIN</th>
                            <td>{{ $facilitator->nin }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $facilitator->phone }}</td>
                        </tr>
                        
                        <tr>
                            <th>Nationality</th>
                            <td>{{ $facilitator->nationality }}</td>
                        </tr>
                        <tr>
                            <th>State</th>
                            <td>{{ $facilitator->state }}</td>
                        </tr>
                        <tr>
                            <th>LGA</th>
                            <td>{{ $facilitator->lga }}</td>
                        </tr>
                        <tr>
                            <th>Town</th>
                            <td>{{ $facilitator->town }}</td>
                        </tr>
                        <tr>
                            <th>Present Address</th>
                            <td>{{ $facilitator->present_address }}</td>
                        </tr>
                        <tr>
                            <th>Last Address</th>
                            <td>{{ $facilitator->last_address }}</td>
                        </tr>
                    
                        <tr>
                            <th>Type Offence</th>
                            <td>{{ $facilitator->type_offence }}</td>
                        </tr>
                        <tr>
                            <th>Type Conviction</th>
                            <td>{{ $facilitator->type_conviction }}</td>
                        </tr>
                        <tr>
                            <th>Term Conviction</th>
                            <td>{{ $facilitator->term_conviction }}</td>
                        </tr>
                       
                        <tr>
                            <th>Victim Passport</th>
                            <td>{{ $facilitator->victim_passport }}</td>
                        </tr>
                        
                        <tr>
                            <th>Place Of Arrest</th>
                            <td>{{ $facilitator->place_of_arrest }}</td>
                        </tr>
                        <tr>
                            <th>Complexion</th>
                            <td>{{ $facilitator->complexion }}</td>
                        </tr>
                        <tr>
                            <th>Height</th>
                            <td>{{ $facilitator->height }}</td>
                        </tr>
                        <tr>
                            <th>Eye Colour</th>
                            <td>{{ $facilitator->eye_colour }}</td>
                        </tr>
                        <tr>
                            <th>Tribal Mark</th>
                            <td>{{ $facilitator->tribal_mark }}</td>
                        </tr>
                        <tr>
                            <th>Languages Spoken</th>
                            <td>{{ $facilitator->language_spoken }}</td>
                        </tr>
                        <tr>
                            <th>Current Location</th>
                            <td>{{ $facilitator->current_location }}</td>
                        </tr>
                        <tr>
                            <th>Photograph</th>
                            <td>{{ $facilitator->photograph }}</td>
                        </tr>
                        <tr>
                            <th>Fingerprint</th>
                            <td>{{ $facilitator->fingerprint }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
