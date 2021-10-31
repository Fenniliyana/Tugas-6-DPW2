<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.section.assets')
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      @include('admin.section.sidebar')
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      @include('admin.section.header')
      <!-- End Navbar -->
      <div class="content" style="padding-top: 100px">
      @include('admin.utils.notif')
        <div class="card">
          @yield('content')
        </div>
      </div>
      <footer class="footer">
       @include('admin.section.footer') 
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
@include('admin.section.js')
</body>

</html>