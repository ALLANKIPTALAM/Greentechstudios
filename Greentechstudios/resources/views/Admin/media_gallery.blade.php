@extends('layouts.superlayout')
@section('content')
<!-- page content -->
        <!-- /top navigation -->

        <!-- page content -->
      
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Media Gallery <small> gallery design</small> </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Media Gallery <small> gallery design </small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="row">

                      @foreach($photos as $photo)
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="../{{ $photo->location }}" alt="image" />
                            <div class="mask">
                              <p>{{ $photo->caption }}</p>
                              <div class="tools tools-bottom">
                                <a href="../{{ $photo->location }}" class="fancybox" title="view"><i class="fa fa-link"></i></a> 
                                <a href="#"><i class="fa fa-pencil" title="edit"></i></a>
                                <a onclick="return confirmDelete('{{ $photo->id }}','{{ $photo->location }}')" data-toggle="modal" data-url="{!! URL::to('Admin/media_gallery/delete', $photo->id) !!}" data-id="{{$photo->id}}" data-target="#confirmDelete"><i class="fa fa-times" title="delete"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>{{ $photo->description }}</p>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



              <!-- Delete confirm modal -->
<form action="{{ URL::to('Admin/media_gallery/delete/') }}" method="POST" class="remove-record-model">
{{csrf_field()}}
{{method_field('delete')}}
    <div id="confirmDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title text-center">Delete Confirmation</h4>
                </div>
                <div class="modal-body">
                    <H4 class="text-center">Are you sure you want to delete this photo?</H4>
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="file_path" id="file_path">
                </div>
                <div class="modal-footer">
                
                    <div class="col-md-6 col-md-offset-4">
                  <button type="button"  data-dismiss="modal" class="btn btn-success">
                    <i class="glyphicon glyphicon-remove"></i>No, Cancel
                  </button>
                  <button type="submit" class="btn btn-warning">
                      <i class="glyphicon glyphicon-ok-circle"></i> Yes, Delete
                  </button>
                                 
                            
                </div>

                </div>
            </div>
        </div>
    </div>
</form>
 <!-- /Delete Confirm modals -->
<script type="text/javascript">
    function confirmDelete(id,file_path){
    $("input[name='id']").val(id);
    $("input[name='file_path']").val(file_path);
  }
</script>
        <!-- /page content -->

        <!-- footer content -->
        @endsection()