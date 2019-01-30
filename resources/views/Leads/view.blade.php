{{-- Author : Lav ranjan Giri | Date : 29-06-2018  
    ================================================ --}}

{{-- =================================================== Actual code begins from here ===================================================== --}}


@extends('layout.admin-app') {{-- exteding layout here --}}
<style type="text/css">
  
</style>

@section('content')

<!-- Contact Section
================================================== -->

<!-- mainbody content  -->
 
<div class="content">
  <div class="container-fluid">
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{route('admin')}}">Dashboard</a>
         <a class="breadcrumb-item" href="{{route('lead-list')}}">Leads</a>
        <span class="breadcrumb-item active"> Show Lead</span>
      </nav>
      {{-- {{dd($lead->name)}} --}}
    <div class="row">
            <div class="col-sm-12 profile-card">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Lead Details</h4>
                  <p class="card-category">Showing details of <b style="text-transform: capitalize;">{{$lead->name}} - [ {{$lead->email}} ]</b></p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" value="{{$lead->name}}" disabled="true">
                        </div>
                      </div>
                  	</div>
                  	<div class="row">
                      <div class="col-sm-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="text" class="form-control" value="{{$lead->email}}" disabled="true">
                        </div>
                      </div>
                  	</div>

                    <div class="row">
                      <div class="col-sm-8">
                        <div class="form-group">
                          {{-- <label>About Me</label> --}}
                          <div class="form-group">
                            <label class="bmd-label-floating">Message</label>
                            <textarea class="form-control" rows="5" disabled="true" >{{$lead->message}}</textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                      
                    <button type="submit" class="btn btn-primary pull-right">Go Back</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            {{-- <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div> --}}
  </div>
</div>

@endsection

@section('jscode')
   
@endsection