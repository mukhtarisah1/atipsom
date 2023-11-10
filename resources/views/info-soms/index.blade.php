@extends('layouts.layout')
@section('title', 'Shelter Information')
@section('content')
    
    

        
        <div> <a href="/info-soms/create" class="btn btn-secondary mb-3">Create New Record</a></div>

        <div class="card card-fluid">
                  <!-- .card-header -->
                  
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form-group -->
                    <form action="{{ route('info-soms.index') }}" method="GET">
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
                    <div class="table table-responsive">
                      <!-- .table -->
                      <table class="table">
                        <!-- thead -->
                        <thead style="background-color: green; color: #fff;">
                          <tr>
                            <th>SN</th>
                            <th style="width: 150px;">Manager Name</th>
                            <th>Email</th>
                            <th> Facility </th>
                            <th> Address </th>
                            <th> capacity </th>
                            <th> Vacancies</th>
                            
                            <th style="width:100px; min-width:100px;"> &nbsp; Actions </th>
                          </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                          <!-- tr -->
                          @foreach ($infoSoms as $infoSom)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                <a href="#" >{{ $infoSom->manager_name }}</a>
                                </td>
                                <td class="align-middle"> {{ $infoSom->email }} </td>
                                <td class="align-middle"> {{ $infoSom->facilities }} </td>
                                <td class="align-middle"> {{ $infoSom->address }} </td>
                                <td class="align-middle">{{ $infoSom->capacity }} </td>
                                <td class="align-middle"> {{ $infoSom->vacancies }} </td>
                               
                                <td class="align-middle text-right">
                                    <a class="btn btn-sm btn-icon btn-secondary" href="{{ route('info-soms.edit', $infoSom->id) }}"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a>
                                    
                                    <form action="{{ route('info-soms.destroy', $infoSom->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="return confirm('Are you sure you want to delete this record?')" type="submit"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></button>
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
