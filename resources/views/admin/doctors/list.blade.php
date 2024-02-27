@extends('admin.layout')
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="  col-md-12 col-sm-12 col-lg-12">
                    @include('errors.alerts')
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h4>Doctors List</h4> 
                            <form action="" class="card-header-form">

                                <div class="input-group">
                                    <input type="text" name="keyword" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                            <div class="card-header-action ml-2">
                                <a href="{{ route('doctors.create') }}" class="btn btn-primary"> <i
                                        class="far fa-plus px-1"></i>Create
                                    Doctor</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                     
                        
                        <tr>
                           <th>#</th>
                          <th>Doctor Name</th>
                          <th>Expertise</th>
                          <th>Created At</th>
                          <th>Verified</th>
                          <th>Status</th>
                        </tr>

                          @foreach ($doctors as $key => $doctor)
                        <tr>
                          <td > <div class="d-flex align-items-center justify-content-center pt-2"> {{ $key + 1 }} </div></td>
                           
                          <td> 
                              <div class="linkswrap pt-1">
                              <img alt="image" src="https://i.pravatar.cc/150?u=fake@pravatar.com" class="rounded-circle" width="35" data-bs-toggle="title" title="">
                              <span class="d-inline-block ms-1">{{ $doctor->first_name . ' ' . $doctor->last_name }}</span>
                            
                            <div class="table-links">
                              <a href="#">View</a>
                              <div class="bullet"></div>
                              <a href="#">Edit</a>
                              <div class="bullet"></div>
                              <a href="#" class="text-danger">Trash</a>
                            </div>
                              </div>
                          </td>
                          <td>
                            <a href="#">Science</a>
                          </td>
                          <td>
                            {{ isset($doctor->created_at) ? $doctor->created_at->format('F j, Y') : '-' }}
                          </td>
                         
                          <td>yes/no</td>
                          <td>
                            <div class="badge btn-warning">Pending</div>
                          </td>
                        </tr>
                           @endforeach

                          
                      </tbody></table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


        </div>
    </section>
   
@endsection
