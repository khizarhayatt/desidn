@extends('admin.layout')
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-lg-4">
                    @include('errors.alerts')
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Category: {{ $category->name }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('categories.update', $category->id) }}" method="post">
                                @csrf
                                @method('PUT') <!-- Use the appropriate HTTP method for updating -->
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Category Title</label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Enter Category Title" value="{{ $category->name }}">
                                    </div> 
                                     
                                    <div class="form-group col-md-12">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-lg-8"></div>
            </div>
        </div>
    </section>
@endsection
