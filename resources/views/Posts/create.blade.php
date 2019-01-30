{{-- Author : Lav ranjan Giri | Date : 29-06-2018  
    ================================================ --}}

{{-- =================================================== Actual code begins from here ===================================================== --}}


@extends('layout.admin-app') {{-- exteding layout here --}}
<style type="text/css">
  .error{
    color:red;
  }
</style>

@section('content')

<!-- Contact Section
================================================== -->

<!-- mainbody content  -->
 
<div class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-6">
        <nav class="breadcrumb C_breadcrumb">
          <a class="breadcrumb-item" href="{{route('admin')}}">Dashboard</a>
           <a class="breadcrumb-item" href="{{route('post.index')}}">Posts</a>
          <span class="breadcrumb-item active"> Create Post</span>
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
          <h3 class="title-2">Posts Stats</h3>
          <div class="chart-info__left">
            <div class="chart-note">
              <span class="dot dot--blue"></span>
              <span>Create a question and answer with question tag.</span>
            </div>
          <div class="formclearfix"></div>

          </div>


          <form id="post-form" method="POST" action="{{route('post.store')}}">
             {{ csrf_field() }}
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <select name="tag_id" id="kind" class="form-control" >
                      <option class="text-muted" selected value="">Select Question tag</option>
                      @forelse ($tags as $key => $tag)
                          <option value={{ $tag->id }}>{{ $tag->display_name }}</option>
                      @empty
                          <option value="">Question tag not found</option>
                      @endforelse
                  </select>
                  @if ($errors->has('tag_id'))
                    <span class="error">{{ $errors->first('tag_id') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Question</label>
                  <textarea class="form-control post-question" rows="2" id="id_question" >{{old('question')}}</textarea>
                  <span id="question_error" class="error" style="display: none">Please type your question</span>
                </div>
              </div>
          	</div>
            
          	<div class="row">
              <div class="col-sm-12">
                 <label class="bmd-label-floating">Please type or paste your answer here.</label>
                <div class="form-group">
                  <textarea class="form-control" rows="5" id="id_PostAnswer" >{{old('answer')}}</textarea>
                  <span id="answer_error" class="error" style="display: none">Please type your answer</span>
                  @if ($errors->has('answer'))
                    <span class="error">{{ $errors->first('answer') }}</span>
                  @endif
                </div>
              </div>
          	</div>
            
            <button type="submit" class="btn btn-success pull-left">Create Post</button>
            <button type="button" class="btn btn-outline-secondary pull-left">Cancel </button>
            <div class="clearfix"></div>

            {{-- Hidden element --}}
            <input type="Hidden" name="question" id="id_question_val">
            <input type="Hidden" name="answer" id="id_answer">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('jscode')
<script type="text/javascript">
  
  $(document).ready(function(){
    /*All codes here ....
    ---------------------------*/


    var codeMirror_textarea = $('#id_PostAnswer')[0];

    var editor = CodeMirror.fromTextArea(codeMirror_textarea,{
      lineNumbers: true,
      gutter: true,
      lineWrapping: true
    });

    /*after submittiinng the form */
    $("#post-form").submit(function(e){

      var question = $.trim($("#id_question").val());
      // alert(question);
      var value = editor.getValue();

      if(question =='')
      {
        toastr.error("Please fill the qustion.").attr('style', 'width: 111%; !important;font-size: 15px;');;
        $('#question_error').show();
        return false;
      }
      else if(value.length == 0){
        toastr.error("Please fill the answer.").attr('style', 'width: 111%; !important;font-size: 15px;');;
        $('#answer_error').show();
        return false;
      }
      else
      {
        $('#question_error').hide();
        $('#answer_error').hide();

        $('#id_question_val').val(question);
        $('#id_answer').val(value);
        return true;
      }

    });


  });
</script>
   
@endsection