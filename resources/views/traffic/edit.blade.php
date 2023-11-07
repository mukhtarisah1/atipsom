@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>Edit Traffic In Person</h1>
        <form method="post" action="{{ route('traffic-in-person.update', $trafficPerson->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="text" name="surname" class="form-control" value="{{ $trafficPerson->surname }}" required>
            </div>
            <div class="form-group">
                <label for="given_name">Given Name:</label>
                <input type="text" name="given_name" class="form-control" value="{{ $trafficPerson->given_name }}" required>
            </div>
            <div class="form-group">
                <label for="aliases">Aliases:</label>
                <input type="text" name="aliases" class="form-control" value="{{ $trafficPerson->aliases }}">
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="text" name="date_of_birth" class="form-control" value="{{ $trafficPerson->date_of_birth }}">
            </div>
            <div class="form-group">
                <label for="sex">Sex:</label>
                <input type="text" name="sex" class="form-control" value="{{ $trafficPerson->sex }}">
            </div>
            <div class="form-group">
                <label for="nin">NIN:</label>
                <input type="text" name="nin" class="form-control" value="{{ $trafficPerson->nin }}">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" class="form-control" value="{{ $trafficPerson->phone }}">
            </div>
            <div class="form-group">
                <label for="passport">Passport:</label>
                <input type="text" name="passport" class="form-control" value="{{ $trafficPerson->passport }}">
            </div>
            <div class="form-group">
                <label for="nationality">Nationality:</label>
                <input type="text" name="nationality" class="form-control" value="{{ $trafficPerson->nationality }}">
            </div>
            <div class="form-group">
                <label for="state">State:</label>
                <input type="text" name="state" class="form-control" value="{{ $trafficPerson->state }}">
            </div>
            <div class="form-group">
                <label for="lga">LGA:</label>
                <input type="text" name="lga" class="form-control" value="{{ $trafficPerson->lga }}">
            </div>
            <div class="form-group">
                <label for="town">Town:</label>
                <input type="text" name="town" class="form-control" value="{{ $trafficPerson->town }}">
            </div>
            <div class="form-group">
                <label for="present_address">Present Address:</label>
                <input type="text" name="present_address" class="form-control" value="{{ $trafficPerson->present_address }}">
            </div>
            <div class="form-group">
                <label for="last_address">Last Address:</label>
                <input type="text" name="last_address" class="form-control" value="{{ $trafficPerson->last_address }}">
            </div>
            <div class="form-group">
                <label for="origin_or_source">Origin/Source:</label>
                <input type="text" name="origin_or_source" class="form-control" value="{{ $trafficPerson->origin_or_source }}">
            </div>
            <div class="form-group">
                <label for="transit">Transit:</label>
                <input type="text" name="transit" class="form-control" value="{{ $trafficPerson->transit }}">
            </div>
            <div class="form-group">
                <label for="entry_point">Entry Point:</label>
                <input type="text" name="entry_point" class="form-control" value="{{ $trafficPerson->entry_point }}">
            </div>
            <div class="form-group">
                <label for="destination">Destination:</label>
                <input type="text" name="destination" class="form-control" value="{{ $trafficPerson->destination }}">
            </div>
            <div class="form-group">
                <label for="exit_point">Exit Point:</label>
                <input type="text" name="exit_point" class="form-control" value="{{ $trafficPerson->exit_point }}">
            </div>
            <div class="form-group">
                <label for="reason_return">Reason for Return:</label>
                <input type="text" name="reason_return" class="form-control" value="{{ $trafficPerson->reason_return }}">
            </div>
            <div class="form-group">
                <label for="complexion">Complexion:</label>
                <input type="text" name="complexion" class="form-control" value="{{ $trafficPerson->complexion }}">
            </div>
            <div class="form-group">
                <label for="height">Height:</label>
                <input type="text" name="height" class="form-control" value="{{ $trafficPerson->height }}">
            </div>
            <div class="form-group">
                <label for="eye_colour">Eye Colour:</label>
                <input type="text" name="eye_colour" class="form-control" value="{{ $trafficPerson->eye_colour }}">
            </div>
            <div class="form-group">
                <label for="tribal_mark">Tribal Mark:</label>
                <input type="text" name="tribal_mark" class="form-control" value="{{ $trafficPerson->tribal_mark }}">
            </div>
            <div class="form-group">
                <label for="languages_spoken">Languages Spoken:</label>
                <input type="text" name="languages_spoken" class="form-control" value="{{ $trafficPerson->languages_spoken }}">
            </div>
            <div class="form-group">
                <label for="current_location">Current Location:</label>
                <input type="text" name="current_location" class="form-control" value="{{ $trafficPerson->current_location }}">
            </div>
            <div class="form-group">
                <label for="photograpgh">Photograph:</label>
                <input type="text" name="photograpgh" class="form-control" value="{{ $trafficPerson->photograpgh }}">
            </div>
            <div class="form-group">
                <label for="fingerprint">Fingerprint:</label>
                <input type="text" name="fingerprint" class="form-control" value="{{ $trafficPerson->fingerprint }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
