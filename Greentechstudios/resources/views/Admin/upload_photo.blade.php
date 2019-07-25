@extends('layouts.superlayout')
@section('content')
@include('flash::message')

         <!-- page content -->
        
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Image Upload</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  
                  <div class="row">
                  
                    <form class="form-horizontal" role="form" action="{{ URL::to('Admin/upload_photo')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label class="control-label col-lg-2">Select Your Image</label>
                        <div class="col-lg-8">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                  <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span>
                                  <span class="fileupload-exists">Change</span>
                                  <input type="file" name="image_name" required value="{{ old('image_name') }}"/>
                                  @if ($errors->has('image_name'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('image_name') }}</strong>
                                    </span>
                                @endif
                                </span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                             
                        </div>
                    </div>
          

                    <div class="form-group">
                    <label for="text2" class="control-label col-lg-2"> Picture Caption</label>

                    <div class="col-lg-8">
                    <select id="text2" name="caption" class="form-control">
                            <option>Architecture</option>
                            <option>Exterior</option>
                            <option>Landscaping</option>
                            <option>Interior</option>
                          </select>
                    </div>
                </div>

                    <div class="form-group">
                    <label for="autosize" class="control-label col-lg-2"> Short Description</label>

                    <div class="col-lg-8">
                      <textarea  class="form-control"  name="description" id="description" rows="5" cols="10" placeholder="Short descriptionmax of 60 characters"></textarea>
                           @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                        <br>
                    </div>
                      </div>

                            <?php
              function createRandomTransactionum() {
              $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
              srand((double)microtime()*1000000);
              $i = 0;
              $pass = '' ;
              while ($i <= 7) {
                $num = rand() % 33;
                $tmp = substr($chars, $num, 1);
                $pass = $pass . $tmp;
                $i++;
              }
              return $pass;
            }
            $randomno = createRandomTransactionum();
          ?>
            <input  name="randomno" type="hidden" id="randomno"  value="<?php echo $randomno; ?>" />

            <div class="form-group">
                  <div class="control-label col-lg-4">
                  <button type="submit" class="btn btn-warning btn-round" >Upload</button>
                  <button type="reset" name="reset" class="btn btn-info btn-round">Refresh</button>
                  </div>
                </div>

        </div>
                </form>
                </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection()