@extends('admin.layout')
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="  col-md-4 col-sm-12 col-lg-4">
                    @include('errors.alerts')
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h4>Categories  </h4> 
                                
                        </div>
                        <div class="card-body">
                            <form action="{{ route('categories.store') }}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Category Title</label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Enter Category Title">
                                    </div>

                                     
                                    <div class="form-group col-md-12">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>


                </div>
                <div class="  col-md-8 col-sm-12 col-lg-8">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h4>Categories List</h4>
                            <form action="{{ route('categories.index') }}" class="card-header-form">
                                <div class="input-group">
                                    <input type="text" name="keyword" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tbody>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                             
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($categories as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td class="w-25">{{ $item->name }}</td>
                                                 
                                                <td> {{ $item->created_at->format('F j, Y') }} </td>

                                                <td class="">

                                                    <div class="buttons">

                                                        <a href="{{ route('categories.edit', $item->id) }}"
                                                            class="btn btn-sm btn-icon btn-primary"><i
                                                                class="far fa-edit"></i></a>

                                                        <form method="post" class="d-inline-block"
                                                            action="{{ route('categories.destroy', $item->id) }}">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit"
                                                                class="deletePermission d-inline-block btn btn-icon btn-sm btn-danger">
                                                                <i class="far fa-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">

                                @if ($categories->hasPages())
                                    {{ $categories->links() }}
                                @endif

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    @include('admin.categories.partials.permissionstoggle')
@endsection
