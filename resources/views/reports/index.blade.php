extends('layouts.layout')
@section('content')
    <form action="{{ route('incidents.reports.generate') }}" method="post">
        @csrf
        <!-- Add form elements for selecting report criteria -->
        <button type="submit">Generate Report</button>
    </form>
@endsection