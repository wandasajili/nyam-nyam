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
      <div class="main-panel">


        <div class="content-wrapper">
          <!-- Table Section -->
          @session("success")
          <div class="alert alert-success">{{ $value }}</div>
          @endsession
          <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row align-items-center mb-3">
                      <div class="col">
                        <h4 class="card-title m-0">Team</h4>
               
                      </div>
                      <div class="col-auto">
                        <a href="/admin/team/create" class="btn btn-sm btn-primary">Add Item</a>
                      </div>
                    </div>
                    
                  
            
                    <!-- Table -->
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Social Media</th>
                         
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        @foreach ($teams as $team)
                        <tr>
                          <td>
                            <img src="{{ asset('img/' . $team->image) }}" alt="{{ $team->name }}" width="60" height="60" style="border-radius: 0;">
                          </td>
                          <td>{{ $team->name }}</td>
                          <td>{{ $team->socialmedia }}</td>
                 
                 
                        
                       
                          <td>
                            <form action="{{ route('team.destroy', $team->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <a href="{{ route('team.edit', $team->id) }}" class="btn btn-sm btn-primary">Update</a>

                              <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        
                          </td>
                        </tr>
                        @endforeach
                    
            
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        <!-- Content Wrapper Ends -->

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