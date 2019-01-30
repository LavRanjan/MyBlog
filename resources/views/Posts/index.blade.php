
{{-- Author : Lav ranjan Giri | Date : 27-06-2018  
  ================================================ --}}

  {{-- Actual code begins from here
  ===================================================== --}}
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
          <span class="breadcrumb-item active">Posts</span>
       </nav>
      </div>
       <div class="col-lg-6 ">
         <a href="{{ route('post.create') }}" class="btn btn-outline-secondary btn-sm btn-right">
            <i class="fa fa-plus"></i>&nbsp; Add New</a>
      </div>
    </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="au-card recent-report">
        <div class="au-card-inner">
          <h3 class="title-2">Posts Stats</h3>
          <div class="chart-info__left">
            <div class="chart-note">
              <span class="dot dot--blue"></span>
              <span>New Post added on <b>{{Carbon\Carbon::parse($latestPost->created_at)->toDayDateTimeString()}}</b></span>
            </div>
          </div>
        </div>
          <table class="table table-borderless table-striped table-earning" id="post-table">
            <thead class="text-warning dt_header">
              <th>ID</th>
              <th>Question</th>
              <th>No of views </th>
              <th>Action</th>
            </thead>
            <tbody>
              @forelse($posts as $post)
                <tr>
                  <td>{{$post->id}}</td>
                  <td>{{$post->question}}td>
                  <td>{{$post->no_of_views}}</td>
                  <td>
                    <a href="{{route('post.edit',$post->id)}}"><i class="fas fa-edit"></i></a>
                    {{-- <a href="#"><i class="material-icons">edit</i></a> --}} 
                    <a href="#"><i class="fas fa-trash"></i></a>
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
  $('#post-table').DataTable({
        "bLengthChange": false,// "paging":   false,
        "ordering": false,
        "info":     false,
        "pageLength": 6
      });
});
</script>

@endsection





