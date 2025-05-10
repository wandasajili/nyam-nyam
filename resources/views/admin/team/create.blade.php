<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>Nyam Nyam Admin</title>

  <!-- CSS Plugins -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">

  <!-- Custom Style -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}">

</head>

<body>
    <div class="container-scroller">

        <!-- Navbar Section -->
        @include('layouts.backend.navbar')
      
        <div class="container-fluid page-body-wrapper">
      
          <!-- Sidebar Section -->
          @include('layouts.backend.sidebar')
      
          <!-- Main Content Section -->
          <div class="main-panel w-100">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card w-100">
                    <div class="card-body">
                      <h4 class="card-title">Add Team</h4>
                      <p class="card-description"> 
                        Add a team by filling out the form below  </p>
      
                        <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                        
                            <div class="form-group">
                                <label>Social Media</label>
                                <input type="text" name="socialmedia" class="form-control @error('socialmedia') is-invalid @enderror" value="{{ old('socialmedia') }}">
                                @error('socialmedia')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        
     
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ url('team') }}" class="btn btn-light">Cancel</a>
                        </form>
                        
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
            <!-- Footer Section -->
            @include('layouts.backend.footer')
      
          </div>
          <!-- Main Panel Ends -->
      
        </div>
        <!-- Page Body Wrapper Ends -->
      
      </div>
      
  <!-- Container Scroller Ends -->

  <!-- JS Plugins -->
  <script src="{{ asset('backend/assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('backend/assets/vendors/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('backend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>

  <!-- Custom JS -->
  <script src="{{ asset('backend/assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('backend/assets/js/misc.js') }}"></script>
  <script src="{{ asset('backend/assets/js/settings.js') }}"></script>
  <script src="{{ asset('backend/assets/js/todolist.js') }}"></script>
  <script src="{{ asset('backend/assets/js/jquery.cookie.js') }}"></script>

  <!-- Dashboard Custom JS -->
  <script src="{{ asset('backend/assets/js/dashboard.js') }}"></script>

</body>

</html>
