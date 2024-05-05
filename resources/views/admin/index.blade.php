@extends('admin.layouts.admin')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
          </span> Welcome  <b>{{ $auth_user->name }}</b> to your Admin Page 
        </h3>
        <div class="col-lg-5 page-body">
          <img class="img-fluid w-100 rounded-circle shadow-sm" src="{{ asset("storage/$auth_user->profile_pic") }}" alt="">
        </div>
      </div> 
    </div>
  </div>
  

@endsection
