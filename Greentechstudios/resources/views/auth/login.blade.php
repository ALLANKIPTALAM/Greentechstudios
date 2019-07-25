@extends('layouts.loginlayout')
@section('content')


<div class="login-content">
            <!-- Login -->
            <div class="lc-block toggled" id="l-login">
            <div>
                
             </div>
             <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                <div class="lcb-form">
                    
                    <span><img src="./images/login-logo.png" class="img-responsive" alt=""></span>
                    <!-- <h4>Login</h4> -->
                    
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


                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                        <div class="fg-line{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember">
                            <i class="input-helper"></i>
                            Keep me signed in
                        </label>
                    </div>

                    <button class="btn btn-login btn-success btn-float" type="submit" ><i class="zmdi zmdi-arrow-forward"></i>
                    </button>
                </div>
                </form>
                <div class="lcb-navigation">
                    <a href="{{ url('/') }}" data-ma-block="#l-forget-password"><i class="zmdi zmdi-globe-alt"></i> <span>Back To Site</span></a>
                    <a href="{{ url('/password/reset') }}"  data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
                </div>
            </div>

          
        </div>
    
@endsection()