{{-- Author : Lav ranjan Giri | Date : 27-06-2018  
  ================================================ --}}

  {{-- =================================================== Actual code begins from here ===================================================== --}}


@extends('layout.admin-app') {{-- exteding layout here --}}

@section('content')

<!-- Contact Section
 ================================================== -->


 <!-- mainbody content  -->


<div class="container-fluid">
  <div class="row">
      <div class="col-lg-6">
         <nav class="breadcrumb C_breadcrumb">
          <a class="breadcrumb-item" href="{{route('admin')}}"><i class="fa fa-home"></i>&nbsp;&nbsp;Dashboard</a>
          <span class="breadcrumb-item active">Lead List</span>
       </nav>
      </div>
       <div class="col-lg-6">
        <a href="{{ URL::previous() }}" class="btn btn-outline-secondary btn-sm btn-right">
            <i class="fa fa-backward"></i>&nbsp; Go Back</a>
        {{-- <button class="btn btn-outline-secondary btn-sm"><i class="fas fa-edit"></i>Add New</button> --}}
      </div>
      
    </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="au-card recent-report">
        <div class="au-card-inner">
          <h3 class="title-2">Leads Stats</h3>
          <div class="chart-info__left">
            <div class="chart-note">
              <span class="dot dot--blue"></span>
              <span>New Lead contacted on  <b>{{Carbon\Carbon::parse($newLead->created_at)->toDayDateTimeString()}}</b></span>
            </div>
          </div>

          <table class="table table-borderless table-striped table-earning" id="lead-table">
            <thead class="text-warning">
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
            </thead>
            <tbody>
              @forelse($Leads as $lead)
              <tr>
                <td>{{$lead->id}}</td>
                <td>{{$lead->name}}</td>
                <td>{{$lead->email}}</td>
                <td>
                  <a href="{{route('view-leads',$lead->id)}}"><i class="fas fa-edit" title="View Detail"></i></a>
                  {{-- <a href="#"><i class="material-icons">edit</i></a> --}}
                  <a href="#"><i  class="fas fa-trash" rel="tooltip" title="Remove"></i></a>
                </td>
              </tr>
              @empty
              @endforelse

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


  @endsection

  @section('jscode')
  <script type="text/javascript">
   $(document).ready( function () {
    $('#lead-table').DataTable({
      "bLengthChange": false,// "paging":   false,
      "ordering": false,
      "info":     false,
      "pageLength": 6
    });
  });
</script>
  
  @endsection