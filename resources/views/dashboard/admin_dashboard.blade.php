@extends('layout.adminlayout')

@section('content')
<div class="alert alert-info alert-with-icon alert-dismissible fade show" data-notify="container">
    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
      <i class="nc-icon nc-simple-remove"></i>
    </button>
    <span data-notify="icon" class="nc-icon nc-bell-55"></span>
    <span data-notify="message">Welcome to school dashboard </span>
  </div>

<div class="row">
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
<a href="admin-dashboard.php?std">view</a>
</div>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="card card-stats">
<div class="card-body ">
<div class="row">
<div class="col-5 col-md-4">
<div class="icon-big text-center icon-warning">
<i class="nc-icon nc-single-02 text-success"></i>
</div>
</div>
<div class="col-7 col-md-8">
<div class="numbers">
<p class="card-category">Teachers</p>
<p class="card-title">
</div>
</div>
</div>
</div>
<div class="card-footer ">
<hr>
<div class="stats">
<a href="admin-dashboard.php?tch">view</a>
</div>
</div>
</div>
</div>
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
<p class="card-category">Subjects</p>
<p class="card-title">
  <p>
</div>
</div>
</div>
</div>
<div class="card-footer ">
<hr>
<div class="stats">
<a href="admin-dashboard.php?sb">view</a>
</div>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="card card-stats">
<div class="card-body ">
<div class="row">
<div class="col-5 col-md-4">
<div class="icon-big text-center icon-warning">
<i class="nc-icon nc-hat-3 text-primary"></i>
</div>
</div>
<div class="col-7 col-md-8">
<div class="numbers">
<p class="card-category">Classes</p>
<p class="card-title">
  <p>
</div>
</div>
</div>
</div>
<div class="card-footer ">
<hr>
<div class="stats">
<a href="admin-dashboard.php?cl">view</a>
</div>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="card card-stats">
<div class="card-body ">
<div class="row">
<div class="col-5 col-md-4">
<div class="icon-big text-center icon-warning">
<i class="nc-icon nc-trophy text-danger"></i>
</div>
</div>
<div class="col-7 col-md-8">
<div class="numbers">
<p class="card-category">Result</p>
<p class="card-title">0
  <p>
</div>
</div>
</div>
</div>
<div class="card-footer ">
<hr>
<div class="stats">
<a href="admin-dashboard.php?re">view</a>
</div>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="card card-stats">
<div class="card-body ">
<div class="row">
<div class="col-5 col-md-4">
<div class="icon-big text-center icon-warning">
<i class="nc-icon nc-money-coins text-primary"></i>
</div>
</div>
<div class="col-7 col-md-8">
<div class="numbers">
<p class="card-category">Fees</p>
<p class="card-title">
  <p>
</div>
</div>
</div>
</div>
<div class="card-footer ">
<hr>
<div class="stats">
<a href="admin-dashboard.php?fe">view</a>
</div>
</div>
</div>
</div>
</div>
@endsection
