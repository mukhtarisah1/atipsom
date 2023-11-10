@extends('layouts.layout')
@section('title', 'Trafficking victims Page')
@section('content')

<div> <a href="/traffic-in-person/create" class="btn btn-secondary mb-3">Create New Record</a></div>

<div class="card card-fluid">
                  <!-- .card-header -->
                  
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form-group -->
                    <form action="{{ route('traffic-in-person.index') }}" method="GET">
                    <div class="form-group">
                      <!-- .input-group -->
                      <div class="input-group input-group-alt">

                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                            </div>
                            
                            <input type="text" class="form-control" placeholder="Search record">
                            
                            </div>
                            <div class="input-group-prepend">
                            <button class="btn btn-secondary">Search</button>
                            </div>    
                      </div>
                     
                    </div><!-- /.form-group -->
                    </form>
                    <!-- .table-responsive -->
                    <!-- <div class="text-muted"> Showing 1 to 10 of 1,000 entries </div> -->
                    <div class="table-responsive">
                      <!-- .table -->
                      <table class="table">
                        <!-- thead -->
                        <thead style="background-color: green; color: #fff;">
                          <tr>
                            <th>SN</th>
                            <th>Full Name</th>
                            <th> Gender </th>
                            <th> Date Of Birth </th>
                            <th> Nationality </th>
                            <th> State </th>
                            
                            <th style="width:100px; min-width:100px;"> &nbsp; Actions </th>
                          </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                          <!-- tr -->
                          @foreach ($trafficPersons as $trafficPerson)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                <a href="{{ route('traffic-in-person.show', $trafficPerson->id) }}" class="tile tile-img mr-1"><img class="img-fluid" src="photographs/{{$trafficPerson->photograph}}" alt="Card image cap"></a> <a href="#">{{ $trafficPerson->surname }} {{ $trafficPerson->given_name }}</a>
                                </td>
                                <td class="align-middle"> {{ $trafficPerson->sex }} </td>
                                <td class="align-middle"> {{ $trafficPerson->date_of_birth }} </td>
                                <td class="align-middle">{{ $trafficPerson->nationality }} </td>
                                <td class="align-middle"> {{ $trafficPerson->state }} </td>
                                <!-- <td class="align-middle text-right">
                                    <a href="{{ route('traffic-in-person.edit', $trafficPerson->id) }}" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                                </td> -->
                                <td class="align-middle text-right">
                                    <a class="btn btn-sm btn-icon btn-secondary" href="{{ route('traffic-in-person.edit', $trafficPerson->id) }}"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a>
                                    
                                    <form action="{{ route('traffic-in-person.destroy', $trafficPerson->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-icon btn-secondary" type="submit"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></button>
                                    </form>
                                </td>
                            </tr>
                          @endforeach
                        </tbody><!-- /tbody -->
                      </table><!-- /.table -->
                    </div><!-- /.table-responsive -->
                    <!-- .pagination -->
                    <!-- <ul class="pagination justify-content-center mt-4">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fa fa-lg fa-angle-left"></i></a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">...</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">13</a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#">14</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">15</a>
                      </li>
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">...</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">24</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#"><i class="fa fa-lg fa-angle-right"></i></a>
                      </li>
                    </ul> -->
                  </div><!-- /.card-body -->
                </div>
@endsection
