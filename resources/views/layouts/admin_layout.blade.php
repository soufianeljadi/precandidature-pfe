<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.head')
  @yield('styles')
</head>

<body>

  <!-- Main Wrapper -->
  <div class="main-wrapper">

    {{-- Header --}}
    @include('layouts.header')
    {{-- Header --}}

    <!-- Sidebar -->
    @yield('sidebar')
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">

      <div class="content container-fluid">
        @yield('content')

      </div>
    </div>
    <!-- /Page Wrapper -->

  </div>
  <!-- /Main Wrapper -->
  @include('layouts.scripts')
  @yield('scripts')

</body>

</html>
