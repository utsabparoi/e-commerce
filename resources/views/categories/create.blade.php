@extends('layouts.master')
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Categories</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Category Create</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="card card-primary card-outline">
            <div class="card-body">
              <h5 class="card-title">Create Category</h5><br>

              <!-- form start -->
              <form role="form" action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name <span class="text-danger">*</span></label>
                    <input name="name" type="text" class="form-control" placeholder="Enter category name">
                    @if($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif

                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image </label>
                    <input name="image" type="file" class="form-control">
                    @if($errors->has('image'))
                      <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                  </div>
                  <div>
                    <label for="exampleInputEmail1">Details</label>
                    <input name="details" type="text" class="form-control" placeholder="Write product description">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Submit</button>
                </div>
              </form>
            </div>
          </div><!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection
