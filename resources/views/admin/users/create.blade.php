 @extends('admin.layout')
 @section('content')
     <section class="section">
         <div class="section-body">


             <div class="row justify-content-center align-item-center">
                 <div class="  col-sm-12 col-md-8 col-lg-8">
                     @include('errors.alerts')
                     <div class="card">

                         <form action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}"
                             method="POST" enctype="multipart/form-data">
                             @csrf
                             @if (isset($user))
                                 @method('PUT') <!-- For edit mode -->
                             @endif
                             <div class="card-header">
                                 <h4>Create Post</h4>
                             </div>
                             <div class="card-body">

                                 <div class="row">
                                     <div class="col-md-8">
                                         <h6>Details</h6>
                                         <div class="form-group  ">
                                             <label for="title">Post Title</label>
                                             <input id="title" type="text" class="form-control" name="title"
                                                 autofocus value="{{ old('title') }}" />
                                         </div> 
                                          

                                         <div class="form-group  ">
                                              <div id="editor" class="py-3"> </div>
                                         </div>

                                         <div class="form-group"> 
                                             <div class="section-title">File Browser</div> 

                                             <img id="selectedImage" name="profile_photo"
                                                 src="{{ asset('assets/img/users/av.jpeg') }}"
                                                 class="img-fluid float-right mb-2 rounded w-25 h-25 object-fit-cover"
                                                 alt="">


                                             <div class="custom-file">
                                                 <input type="file" class="custom-file-input" id="imageInput">
                                                 <label class="custom-file-label" for="customFile">Choose file</label>
                                             </div>

                                         </div>
                                     </div>

                                     
                                 </div>



                             </div>
                             <div class="card-footer text-right">
                                 <button class="btn btn-primary">Submit</button>
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
