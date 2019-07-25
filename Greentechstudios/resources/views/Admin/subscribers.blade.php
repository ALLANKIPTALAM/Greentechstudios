@extends('layouts.superlayout')
@section('content')
@include('flash::message')
<!-- page content -->
        

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Subscribers</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Email</th>
                          <th>Date</th>
                          <th>Actions</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($subscribers as $subscriber)
                      
                        <tr>
                          <td>{{ $subscriber->id }}</td>
                                <td>{{ $subscriber->email }}</td>
                                
                                <td>{{ date('d M, Y', strtotime( $subscriber->created_at )) }}</td>
                                <td>
                                  
                                  <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" onclick="return confirmDelete('{{ $subscriber->id }}')" data-toggle="modal" data-url="{!! URL::to('Admin/subscriber/delete', $subscriber->id) !!}" data-id="{{$subscriber->id}}" data-target="#confirmDelete"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                                </td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

      <!-- Delete confirm modal -->
<form action="{{ URL::to('Admin/subscribers/delete/') }}" method="POST" class="remove-record-model">
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
                    <H4 class="text-center">Are you sure you want to delete this subscriber?</H4>
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