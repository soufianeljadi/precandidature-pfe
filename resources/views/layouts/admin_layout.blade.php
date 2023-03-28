<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.head')
  @yield('styles')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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
