@extends('../../layouts.loginlayout')
@section('content')


<div class="login-content">
            <!-- Login -->
            <div class="lc-block toggled" id="l-login">
            <div>
                
             </div>
             <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                <div class="lcb-form">
                    @include('flash::message')
                    <span><img src="../images/logo/login.png" class="img-responsive" alt=""></span>
                    <h4>Forgot Password</h4>
                    
                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="fg-line{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
                                </button>
                            </div>
                        </div>

                </div>
                </form>
                <div class="lcb-navigation">
                    <a href="{{ url('/') }}" data-ma-block="#l-forget-password"><i class="zmdi zmdi-home"></i> <span>Back</span></a>
                    <a href="{{ url('/login') }}"  data-ma-block="#l-forget-password"><i class="zmdi zmdi-home"></i> <span> Login</span></a>
                </div>
            </div>

            <!-- Register -->

        </div>
        
	
@endsection()
