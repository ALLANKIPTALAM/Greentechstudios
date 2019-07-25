@extends('layouts.superlayout')
@section('content')
@include('flash::message')
<!-- page content -->
        

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Messages </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Message</th>
                          <th>Date</th>
                          <th>Read</th><th>Delete</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($messages as $message)
                      
                        <tr>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td><?php $out = strlen( $message->message ) > 50 ? substr( $message->message ,0,50)."..." : $message->message; echo $out; ?> </td>
                                <td>{{ date('d M, Y', strtotime( $message->created_at )) }}</td>
                                <td>
                                  <a href="{{ url('Admin/read_message/'.$message->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-send"></i>&nbsp;Read </a>
                                </td>
                                <td>                                  
                                  <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" onclick="return confirmDelete('{{ $message->id }}')" data-toggle="modal" data-url="{!! URL::to('Admin/messages/delete', $message->id) !!}" data-id="{{$message->id}}" data-target="#confirmDelete"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                                </td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

      <!-- Delete confirm modal -->
<form action="{{ URL::to('Admin/messages/delete/') }}" method="POST" class="remove-record-model">
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
                    <H4 class="text-center">Are you sure you want to delete this message?</H4>
                    <input type="hidden" name="id" id="id">
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


            
            </div>
          </div>
        </div>
        <script type="text/javascript">
    function confirmDelete(id){
    $("input[name='id']").val(id);
  }
</script>
        <!-- /page content --> 
@endsection()