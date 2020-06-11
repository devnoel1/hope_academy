@extends('layout.stafflayout')

@section('title')
    Staff-dashboard
@endsection

@section('content')
<div class="alert alert-info alert-with-icon alert-dismissible fade show" data-notify="container">
    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
      <i class="nc-icon nc-simple-remove"></i>
    </button>
    <span data-notify="icon" class="nc-icon nc-bell-55"></span>
    <span data-notify="message">Welcome to  school dashboard</span>
  </div>

{{-- //checng operaton --}}
<div class="alert alert-success alert-with-icon alert-dismissible fade show" data-notify="container">
    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
      <i class="nc-icon nc-simple-remove"></i>
    </button>
    <span data-notify="icon" class="nc-icon nc-bell-55"></span>
    <span data-notify="message">Registration is on going</span>
  </div>
<div class="alert alert-danger alert-with-icon alert-dismissible fade show" data-notify="container">
    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
      <i class="nc-icon nc-simple-remove"></i>
    </button>
    <span data-notify="icon" class="nc-icon nc-bell-55"></span>
    <span data-notify="message">Registration is Closed!</span>
  </div>
<div class="row">
{{-- check form master--}}
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="card card-stats">
<div class="card-body ">
<div class="row">
<div class="col-5 col-md-4">
<div class="icon-big text-center icon-warning">
<i class="nc-icon nc-single-02 text-warning"></i>
</div>
</div>
<div class="col-7 col-md-8">
<div class="numbers">
<p class="card-category">Students</p>
<p class="card-title">
  <p>
</div>
</div>
</div>
</div>
<div class="card-footer ">
<hr>
<div class="stats">
<a href="staff-dashboard.php?std">view</a>
</div>
</div>
</div>
</div>
{{--  --}}
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="card card-stats">
<div class="card-body ">
<div class="row">
<div class="col-5 col-md-4">
<div class="icon-big text-center icon-warning">
<i class="nc-icon nc-single-copy-04 text-danger"></i>
</div>
</div>
<div class="col-7 col-md-8">
<div class="numbers">
<p class="card-category">Assignment</p>
<p class="card-title">
  <p>
</div>
</div>
</div>
</div>
<div class="card-footer ">
<hr>
<div class="stats">
<a href="staff-dashboard.php?as">view</a>
</div>
</div>
</div>
</div>
{{-- check --}}
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="card card-stats">
<div class="card-body ">
<div class="row">
<div class="col-5 col-md-4">
<div class="icon-big text-center icon-warning">
<i class="nc-icon nc-bookmark-2 text-danger"></i>
</div>
</div>
<div class="col-7 col-md-8">
<div class="numbers">
<p class="card-category">Subject</p>
<p class="card-title">
  <p>
</div>
</div>
</div>
</div>
<div class="card-footer ">
<hr>
<div class="stats">
<a href="staff-dashboard.php?ass">view</a>
</div>
</div>
</div>
</div>
{{-- else --}}
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="card card-stats">
<div class="card-body ">
<div class="row">
<div class="col-5 col-md-4">
<div class="icon-big text-center icon-warning">
<i class="nc-icon nc-hat-3 text-danger"></i>
</div>
</div>
<div class="col-7 col-md-8">
<div class="numbers">
<p class="card-category">Class</p>
<p class="card-title">
  <p>
</div>
</div>
</div>
</div>
<div class="card-footer ">
<hr>
<div class="stats">
<a >view</a>
</div>
</div>
</div>
</div>
{{--  --}}

</div>

@endsection
