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
  
  <!-- Responsive Table CSS -->
  <style>
    @media (max-width: 767px) {
      .table-responsive-custom {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }
      
      .table-responsive-stack {
        display: block;
      }
      
      .table-responsive-stack thead {
        display: none;
      }
      
      .table-responsive-stack tbody tr {
        display: block;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 15px;
        padding: 10px;
      }
      
      .table-responsive-stack td {
        display: block;
        text-align: left;
        padding: 8px;
        border: none;
        position: relative;
        padding-left: 40%;
      }
      
      .table-responsive-stack td:before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 35%;
        font-weight: bold;
      }
      
      .table-responsive-stack td.td-actions {
        padding-left: 0;
        text-align: center;
      }
      
      .table-responsive-stack td.td-actions:before {
        content: none;  /* Hapus label "Action" */
      }
      
      .table-responsive-stack td.td-actions .btn {
        margin: 3px;
        display: inline-block;
        width: 45%;
      }
      
      .table-responsive-stack td.td-actions form {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 5px;
      }
    }
    
    /* Sembunyikan scrollbar tetapi tetap berfungsi */
    .hide-scrollbar::-webkit-scrollbar {
      display: none;
    }
    .hide-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
    
    /* Style tambahan untuk action form */
    @media (max-width: 767px) {
      form.action-form {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 5px;
        width: 100%;
      }
      
      form.action-form .btn {
        flex: 1;
        min-width: 80px;
        margin: 0;
      }
      
      /* Hapus padding yang tidak perlu pada action */
      td.td-actions {
        padding: 8px 0 !important;
      }
    }
  </style>

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
                        <h4 class="card-title m-0">Message</h4>
               
                      </div>
                      <div class="col-auto">
                        <a href="/admin/message/create" class="btn btn-sm btn-primary">Add Item</a>
                      </div>
                    </div>
                    
                    <!-- Responsive Table -->
                    <div class="table-responsive-custom hide-scrollbar">
                      <table class="table table-responsive-stack">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Created At</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($messages as $message)
                          <tr>
                            <td data-label="Name">{{ $message->name }}</td>
                            <td data-label="Email" style="max-width: 250px; white-space:normal; word-wrap:break-word">{{ $message->email }}</td>
                            <td data-label="Message" style="max-width: 250px; white-space:normal; word-wrap:break-word">{{ $message->messageContent }}</td>
                            <td data-label="Created_at" style="max-width: 250px; white-space:normal; word-wrap:break-word">{{ $message->created_at }}</td>
                          
                    
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
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