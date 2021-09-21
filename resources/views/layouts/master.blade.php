<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.partials.header')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.partials.navebare')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
   @include('layouts.partials.sidebare')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('flash::message')
    <!-- Content Header (Page header) -->
    @yield('content')
    <!-- Main content -->
    
    <!-- /.content -->
  </div>
   @include('layouts.partials.footer')