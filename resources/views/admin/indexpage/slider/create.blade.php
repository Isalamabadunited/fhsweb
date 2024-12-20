<!DOCTYPE html>
<html>
@php
$administrationm = 'menu-open';
$amanagement = $mmeasurable_criteria = 'active';
@endphp
@include('layouts.admin.tableheader')

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.admin.nav')

  <!-- Main Sidebar Container -->
  @include('layouts.admin.aside')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h2>{{ $pageTitle ?? 'Create New Slider' }}</h2>
              <a href="{{ url('slider') }}" class="btn btn-sm btn-secondary float-right">Back to List</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {!! session('error') !!}
                </div>
              @endif
              @if (Session::has('feedback'))
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {!! session('feedback') !!}
                </div>
              @endif

              <!-- Form to create or update a slider -->
              <form 
                action="{{ isset($slider) && $slider->id ? route('slider.update', $slider->id) : route('slider.store') }}" 
                method="POST" 
                enctype="multipart/form-data">
                @csrf
                @if (isset($slider))
                  @method('PUT')
                @endif

                <div class="row">
                  <!-- Name -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        class="form-control" 
                        value="{{ old('name', $slider->name ?? '') }}" 
                        required>
                    </div>
                  </div>

                  <!-- Description -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="description">Description:</label>
                      <textarea 
                        name="description" 
                        id="description" 
                        class="form-control" 
                        rows="3" 
                        required>{{ old('description', $slider->description ?? '') }}</textarea>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <!-- Image -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="image">Image:</label>
                      <input 
                        type="file" 
                        name="image" 
                        id="image" 
                        class="form-control" 
                        {{ isset($slider) ? '' : 'required' }}>
                      <small class="form-text text-muted">Upload an image file (JPG,ccc PNG).</small>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group mt-4">
                      @if(isset($slider) && $slider->image)
                      <p>Current Image: <img src="{{ asset('storage/' . $slider->image) }}" alt="Profile Image" width="100"></p>
                      @endif
                  </div>
              </div>


                <div class="form-group text-right">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-sm btn-secondary">Reset</button>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.admin.foot')
  @include('layouts.admin.tablefooter')
</body>
</html>
