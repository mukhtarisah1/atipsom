@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>Traffic In Person Details</h1>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Surname</th>
                            <td>{{ $trafficPerson->surname }}</td>
                        </tr>
                        <tr>
                            <th>Given Name</th>
                            <td>{{ $trafficPerson->given_name }}</td>
                        </tr>
                        <tr>
                            <th>Aliases</th>
                            <td>{{ $trafficPerson->aliases }}</td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td>{{ $trafficPerson->date_of_birth }}</td>
                        </tr>
                        <tr>
                            <th>Sex</th>
                            <td>{{ $trafficPerson->sex }}</td>
                        </tr>
                        <tr>
                            <th>NIN</th>
                            <td>{{ $trafficPerson->nin }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $trafficPerson->phone }}</td>
                        </tr>
                        <tr>
                            <th>Passport</th>
                            <td>{{ $trafficPerson->passport }}</td>
                        </tr>
                        <tr>
                            <th>Nationality</th>
                            <td>{{ $trafficPerson->nationality }}</td>
                        </tr>
                        <tr>
                            <th>State</th>
                            <td>{{ $trafficPerson->state }}</td>
                        </tr>
                        <tr>
                            <th>LGA</th>
                            <td>{{ $trafficPerson->lga }}</td>
                        </tr>
                        <tr>
                            <th>Town</th>
                            <td>{{ $trafficPerson->town }}</td>
                        </tr>
                        <tr>
                            <th>Present Address</th>
                            <td>{{ $trafficPerson->present_address }}</td>
                        </tr>
                        <tr>
                            <th>Last Address</th>
                            <td>{{ $trafficPerson->last_address }}</td>
                        </tr>
                        <tr>
                            <th>Origin or Source</th>
                            <td>{{ $trafficPerson->origin_or_source }}</td>
                        </tr>
                        <tr>
                            <th>Transit</th>
                            <td>{{ $trafficPerson->transit }}</td>
                        </tr>
                        <tr>
                            <th>Entry Point</th>
                            <td>{{ $trafficPerson->entry_point }}</td>
                        </tr>
                        <tr>
                            <th>Destination</th>
                            <td>{{ $trafficPerson->destination }}</td>
                        </tr>
                        <tr>
                            <th>Exit Point</th>
                            <td>{{ $trafficPerson->exit_point }}</td>
                        </tr>
                        <tr>
                            <th>Reason for Return</th>
                            <td>{{ $trafficPerson->reason_return }}</td>
                        </tr>
                        <tr>
                            <th>Complexion</th>
                            <td>{{ $trafficPerson->complexion }}</td>
                        </tr>
                        <tr>
                            <th>Height</th>
                            <td>{{ $trafficPerson->height }}</td>
                        </tr>
                        <tr>
                            <th>Eye Colour</th>
                            <td>{{ $trafficPerson->eye_colour }}</td>
                        </tr>
                        <tr>
                            <th>Tribal Mark</th>
                            <td>{{ $trafficPerson->tribal_mark }}</td>
                        </tr>
                        <tr>
                            <th>Languages Spoken</th>
                            <td>{{ $trafficPerson->languages_spoken }}</td>
                        </tr>
                        <tr>
                            <th>Current Location</th>
                            <td>{{ $trafficPerson->current_location }}</td>
                        </tr>
                        <tr>
                            <th>Photograph</th>
                            <td>{{ $trafficPerson->photograph }}</td>
                        </tr>
                        <tr>
                            <th>Fingerprint</th>
                            <td>{{ $trafficPerson->fingerprint }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
