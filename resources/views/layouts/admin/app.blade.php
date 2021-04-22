<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('/assets/css/simple-sidebar.css')}}" rel="stylesheet">
  <script src="{{ asset('/assets/js/jquery.min.js')}}"></script>
  <link href="{{ asset('/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Booking Management </div>
      <div class="list-group list-group-flush">
        <a href="{{ route('admin') }}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="{{ route('admin.departments') }}" class="list-group-item list-group-item-action bg-light">Departments</a>
        <a href="{{ route('admin.roles') }}" class="list-group-item list-group-item-action bg-light">Roles</a>
        <a href="{{ route('admin.employees') }}" class="list-group-item list-group-item-action bg-light">Employees</a>
        <a href="{{ route('admin.holidays') }}" class="list-group-item list-group-item-action bg-light">Holidays</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <!-- <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button> -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('admin.logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <!-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> -->
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        @if(session()->get('success'))
          <div class="alert alert-success alert-sm m-2">
            <button type="button" class="ml-lg close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ session()->get('success') }}
          </div>
        @endif
        @if(session()->get('error'))
          <div class="alert alert-danger alert-sm m-2">
            <button type="button" class="ml-lg close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ session()->get('error') }}
          </div>
        @endif

        @yield('content')
        </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('/js/dataTables.bootstrap.min.js') }}"></script>

  <!-- Menu Toggle Script -->
  <script>
    // $("#menu-toggle").click(function(e) {
    //   e.preventDefault();
    //   $("#wrapper").toggleClass("toggled");
    // });
  </script>

</body>

</html>
