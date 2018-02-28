@extends('layouts.master')

@section('content')
<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->

<!--_________________Formulaire annonce___________________-->
<div class="content ">
   <div class="row ">
   <div class="col s12 m4 3"></div>
   <div class="col s12 m4 6">
    <!--_________________Form and method store___________________-->
<form  action="{{ route('login') }}" method="POST">
      {{ csrf_field() }}

   <h6 class="">Login</h6>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email" value="{{old('email')}}">
          @if ($errors->has('email'))
          <div class="col s12 m5">
            <div class="card-panel teal">
              <span class="white-text">{{ $errors->first('email') }}</span>
            </div>
          @endif
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password"  name="password" class="validate">
           @if ($errors->has('password'))
            <div class="col s12 m5">
              <div class="card-panel teal">
                <span class="white-text">{{ $errors->first('password') }}</span>
              </div>
            @endif
          <label for="password">Password</label>
        </div>
      </div>
        <p>
        <input class="input-field col s6" type="checkbox" id="test5" name="remember" value="{{ old('remember') ? 'checked' : '' }}" />
        <label for="test5">Remember me !</label>
        </p>
        <a class="input-field col s6 " href="{{ route('password.request') }}">
             Forgot Your Password? </a>
      <div class="row">
        <div class="col s12 right-align">
           <button type="submit" class="waves-effect waves-light btn">
            login
           </button>
        </div>  
       </div>
    </form>
    <div class="col s12 m4 3"></div>
  </div>
  @endsection
</form> 

