@extends('layouts.master')

@section('content')
<!--_________________Formulaire annonce___________________-->
<div class="content ">
   <div class="row ">
   <div class="col s12 m4 3"></div>
   <div class="col s12 m4 6">
    <!-- _____________________________cart begin____________________________ --> 
   <br>
   <div class="col s12 ">
            <div class="card white darken-1">
              <div class="card-content ">
                <span class="card-title center-align grey-text">Login</span>
    <!--_________________Form and method store___________________-->
<form  action="{{ route('custom.login') }}" method="POST">
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
        <div class="col s12 right-align ">
           <button type="submit" class="waves-effect waves-light btn orange lighten-1">
            login
           </button>
        </div>  
       </div>
    </form>
    <div class="col s12 m4 3"></div>
  </div></div></div>
  @endsection
</form> 