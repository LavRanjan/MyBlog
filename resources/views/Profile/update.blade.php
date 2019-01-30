{{-- Author : Lav ranjan Giri | Date : 27-06-2018  
    ================================================ --}}

{{-- =================================================== Actual code begins from here ===================================================== --}}


@extends('layout.admin-app') {{-- exteding layout here --}}
<style type="text/css">
  
</style>

@section('content')

<!-- Contact Section
================================================== -->

<!-- mainbody content  -->
 
{{-- <div class="content">
  <div class="container-fluid">
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{route('admin')}}">Dashboard</a>
        <span class="breadcrumb-item active">Profile</span>
      </nav>
 --}}

<div class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-6">
        <nav class="breadcrumb C_breadcrumb">
          <a class="breadcrumb-item" href="{{route('admin')}}">Dashboard</a>
          <span class="breadcrumb-item active"> Profile</span>
        </nav>
      </div>
       <div class="col-lg-6 ">
          <a href="{{ URL::previous() }}" class="btn btn-outline-secondary btn-sm btn-right">
            <i class="fa fa-arrow-left"></i>&nbsp; Go Back</a>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="au-card recent-report">
          <div class="au-card-inner">
            <h3 class="title-2">Edit Profile</h3>
            <div class="chart-info__left">
              <div class="chart-note">
                <span class="dot dot--blue"></span>
                <span>Update your profile</span>
              </div>
            <div class="formclearfix"></div>

            </div>
          <form>
            <div class="row">
              <div class="col-sm-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Company (disabled)</label>
                  <input type="text" class="form-control" disabled>
                </div>
              </div>
          	</div>
          	<div class="row">
              <div class="col-sm-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Email</label>
                  <input type="text" class="form-control">
                </div>
              </div>
          	</div>

            <div class="row">
              <div class="col-sm-8">
                <div class="form-group">
                  <label>About Me</label>
                  <div class="form-group">
                    <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                    <textarea class="form-control" rows="5"></textarea>
                  </div>
                </div>
              </div>
            </div>
              
            <button type="submit" class="btn btn-success pull-left">Update Profile</button>&nbsp;&nbsp;
            <button type="button" class="btn btn-outline-secondary pull-left">Cancel </button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('jscode')
   
@endsection