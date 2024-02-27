 @extends('admin.layout')
 @section('content')
      <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
               @include('errors.alerts')
                <div class="card">
                  <div class="card-header">
                    <h4>Create Doctor Profile</h4>
                  </div>
                  <div class="card-body">
                  <form method="POST" id="pageform" action="{{ route('doctors.store')}}" novalidate>
                    @csrf
                    
                    <div class="form-group row  mb-4">
                      <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3">First Name</label>
                      <div class="col-sm-6 col-md-3">
                        <input required type="text" name="first_name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row  mb-4">
                      <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3">Last Name</label>
                      <div class="col-sm-6 col-md-3">
                        <input required type="text" name="last_name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                      <div class="col-sm-12 col-md-7">
                        <input required type="email" name="email" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
                      <div class="col-sm-12 col-md-7">
                        <input required type="tel" name="phone" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Board Certified</label>
                      <div class="col-sm-12 col-md-7">
                        <input required type="text"  name="board_certified" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Medical School</label>
                      <div class="col-sm-12 col-md-7">
                        <input required type="text" name="medical_school" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Residency</label>
                      <div class="col-sm-12 col-md-7">
                        <input required type="text" name="residency" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fellowship</label>
                      <div class="col-sm-12 col-md-7">
                        <input required type="text" name="fellowship" class="form-control">
                      </div>
                    </div>
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Introduction</label>
                      <div class="col-sm-12 col-md-7 mb-5">
                        <div id="editor" class="py-3"> </div>
  
                      </div>
                    </div>
                    <div class="form-group row mb-4 mt-5">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Picture</label>
                      <div class="col-sm-6 col-md-6">
                         
                          <label for="profile_picture" id="image-label">Choose File</label>
                          <input required type="file" name="profile_picture" id="profile_picture">
                        </div>
                    </div>
                    
                     <div class="form-group row mb-4 mt-5">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Resume</label>
                      <div class="col-sm-6 col-md-6">
                         
                          <label for="profile_picture" id="image-label">Choose File</label>
                          <input required type="file" name="profile_picture" id="profile_picture">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Experties:</label>
                      <div class="col-sm-12 col-md-7">
                         
                        <input required type="text" name="categories" class="form-control inputtags" style="display: none;">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                      <div class="col-sm-12 col-md-7">
                          
                      <div class="selectgroup w-50">
                        <label class="selectgroup-item">
                          <input required type="radio" name="status" value="1" class="selectgroup-input-radio" checked="true">
                          <span class="selectgroup-button">Deactive</span>
                        </label>
                        <label class="selectgroup-item">
                          <input required type="radio" name="status" value="2" class="selectgroup-input-radio">
                          <span class="selectgroup-button">Pending</span>
                        </label>
                        <label class="selectgroup-item">
                          <input required type="radio" name="status" value="3" class="selectgroup-input-radio">
                          <span class="selectgroup-button">Active</span>
                        </label> 
                      </div>
                    </div>  
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <input id="submit" type="submit" class="btn btn-primary" value="Create Doctor ">
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
 @endsection
