{{-- Author : Lav ranjan Giri | Date : 27-06-2018
================================================ --}}

{{--Actual code begins from here
===================================================== --}}

{{--  @if(!empty($successMsg))
  <div class="alert alert-success"> {{ $successMsg }}</div>
@endif --}}

@extends('layout.admin-app') {{-- exteding layout here --}}
<style type="text/css">

</style>

@section('content')

    <!-- mainbody content
   ================================================== -->
    <div class="container-fluid">
        <div class="row m-t-25">
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c1">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                            <div class="text">
                                <h2>10368</h2>
                                <span>members online</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c2">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>
                            <div class="text">
                                <h2>388,688</h2>
                                <span>items solid</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c3">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-calendar-note"></i>
                            </div>
                            <div class="text">
                                <h2>1,0865222</h2>
                                <span>this week</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart3"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c4">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-money"></i>
                            </div>
                            <div class="text">
                                <h2>$1,060,386</h2>
                                <span>total earnings</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart4"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--   <div class="row">
              <div class="col-lg-12">
                  <h2 class="title-1 m-b-25">Top Active leads <a href="" title="view all list"><i class="fa fa-ellipsis-h"></i></a></h2>
                  <div class="table-responsive table--no-card m-b-40">
       --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="au-card recent-report">
                    <h3 class="title-2"><a href="{{route('lead-list')}}" title="view all list">Top Active leads </a></h3>
                    <div class="formclearfix"></div>
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($leads as $lead)

                            <tr>
                                <td>{{$lead->name}}</td>
                                <td>{{$lead->email}}</td>
                                <td>{{$lead->message}}</td>
                                <td class="td-actions text-right">
                                    <div class="content">
                                        <a href="{{route('view-leads',$lead->id)}}"><i class="fas fa-edit"></i></a>
                                        {{-- <a href="#"><i class="material-icons">edit</i></a> --}}
                                        <a href="#"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="au-card recent-report">
                    <h3 class="title-2"><a href="{{route('post.index')}}" title="view all list">Your lates posts </a></h3>
                    <div class="formclearfix"></div>
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                        <th>ID</th>
                        <th>Question</th>
                        <th>No of views </th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @forelse($questions as $post)
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

@endsection