<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <li class="nav-item">
            <a class="nav-link active" href="{{ url('/admin') }}">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="admin/menu">
              <span class="menu-title"  style="color: #3E4B5B !important; font-weight: 100 !important;">Menu</span>
              <i class="mdi mdi-table-large menu-icon" style="color: #3E4B5B !important; font-weight: 100 !important;"></i>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/review') }}">
              <span class="menu-title" style="color: #3E4B5B !important; font-weight: 100 !important;">Review</span>
              <i class="mdi mdi-table-large menu-icon" style="color: #3E4B5B !important; font-weight: 100 !important;"></i>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/team') }}">
              <span class="menu-title" style="color: #3E4B5B !important; font-weight: 100 !important;">Team</span>
              <i class="mdi mdi-table-large menu-icon" style="color: #3E4B5B !important; font-weight: 100 !important;"></i>
            </a>
          </li>
                   
          

        </ul>
      </nav>
      {{-- sidebar end --}}

      <!-- Main Content Section -->
      <div class="main-panel">
        <div class="content-wrapper">

          <!-- Page Header -->
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
              </span>
              Dashboard
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview
                  <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
          @if (session('success'))
          <div class="alert alert-success" role="alert" id="login-alert">{{ Auth::user()->name }} successfully login</div>
          @endif

          <!-- Dashboard Cards -->
          <div class="row">
            <!-- Menu Card -->
            <div class="col-md-4 stretch-card grid-margin" onclick="window.location.href='/admin/menu'" style="cursor: pointer;">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{ asset('backend/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                        
                        <h2 class="mb-5">Menu</h2>
                        <h2 class="font-weight-normal mb-3">
                            {{ $menusCount}}
                            <i class="mdi mdi-chart-line mdi-24px float-end"></i>
                        </h2>
                    </div>
                </div>
            </div>
        
            <!-- Weekly Orders Card -->
            <div class="col-md-4 stretch-card grid-margin" onclick="window.location.href='admin/review'" style="cursor: pointer;">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{ asset('backend/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                        <h2 class="mb-5">Review</h2>
                        <h2 class="font-weight-normal mb-3">
                            {{ $reviewsCount}}
                            <i class="mdi mdi-chart-line mdi-24px float-end"></i>
                        </h2>
                    </div>
                </div>
            </div>
        
            <!-- Weekly Orders Card (Duplicate) -->
            <div class="col-md-4 stretch-card grid-margin" onclick="window.location.href='admin/team'" style="cursor: pointer;">
                <div class="card bg-gradient-success   card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{ asset('backend/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                        <h2 class="mb-5">Team</h2>
                        <h2 class="font-weight-normal mb-3">
                            {{ $teamsCount}}
                            <i class="mdi mdi-chart-line mdi-24px float-end"></i>
                        </h2>
                    </div>
                </div>
            </div>
        
        
        </div>

        </div>
      {{-- Main Content End --}}

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

  <script>
  
    setTimeout(function() {
        let alert = document.getElementById('login-alert');
        if (alert) {
            alert.style.display = 'none';
        }
    }, 5000); 
  </script>

</body>

</html>
