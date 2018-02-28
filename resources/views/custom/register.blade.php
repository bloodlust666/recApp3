@extends('layouts.master')

@section('content')

<!--_________________Formulaire recruteur ___________________-->
<div class="content ">

	 <div class="row ">
   <div class="col s12 m4 l2"></div>
   <div class="col s12 m4 l8">
    <!-- _____________________________cart begin____________________________ --> 
   <br>
   <div class="col s12 ">
            <div class="card white darken-1">
              <div class="card-content ">
                <span class="card-title center-align grey-text">Register</span>
  	<!--_________________Form and method store___________________-->
    {!! Form::open() !!}
<form  action="{{ route('custom.register') }}" method="POST">
    	{{ csrf_field() }}
    	
    	@if (count($errors) >0)
    	  @foreach ($errors->all() as $error)
    	  <p>{{$error}}</p>
    	  @endforeach
    	@endif

   <h6>Vos cordonéés de contact</h6>
    <div class="row ">
        <div class="input-field col s6">
          <input  id="name" type="text" class="validate" name="name" value="{{old('name')}}">
          <label for="name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="lastname" type="text" class="validate" name="lastname" value="{{old('lastname')}}">
          <label for="lastname">Last Name</label>
        </div>
      </div>
      <div class="row ">
        <div class="input-field col s6">
          <input  id="tel1" type="text" class="validate" name="tel1" value="{{old('tel1')}}">
          <label for="tel1">Télephone 1</label>
        </div>
        <div class="input-field col s6">
          <input id="tel2" type="text" class="validate" name="tel2" value="{{old('tel2')}}">
          <label for="tel2">Télephone 2</label>
        </div>
      </div>
      <div class="row">
     	<div class="col s6">
          <label>Civilité</label>
          
        <div class="col s2">
           <p>
             <input name="civilite" type="radio" id="Mr" value="Mr" />
             <label for="Mr">Mr</label>
           </p>
        </div>
        <div class="col s2">
           <p>
             <input name="civilite" type="radio" id="Mme" value="Mme" />
             <label for="Mme">Mme</label>
           </p>
        </div>
        <div class="col s2">
           <p>
             <input name="civilite" type="radio" id="Mlle"  value="Mlle"/>
             <label for="Mlle">Mlle</label>
           </p>
        </div>
       </div>
         <div class="input-field col s6">
          <input id="fax" type="text" name="fax" class="validate">
          <label for="fax">Fax</label>
         </div>
       </div>
         <h6 class="">Vos identifiants</h6>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email" value="{{old('email')}}">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password"  name="password" class="validate">
          <label for="password">Password</label>
        </div>
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password_confirmation">
          <label for="password">Password confirmation</label>
        </div>
      </div>
      <div>
        <!--
      <div class="col s6 ">
          <label>Vous êtes</label>
          {!! Form::radio('candidatType', '1', (old('candidatType') == '1'), ['id' => 'Candidat']) !!}
          {!! Form::radio('candidatType', '0', (old('candidatType') == '2'), ['id'=>'Recruteur']) !!}
        <div class="col s3">
           <p>
             <input name="candidatType" type="radio" id="1" value="1" {{ (old('candidatType') == 1) ? 'checked' : '' }} />
             <label for="1">Candidat</label>
           </p>
        </div>
        <div class="col s3">
           <p>
             <input name="candidatType" type="radio" id="0" value="0" {{ (old('candidatType') == 0) ? 'checked' : '' }} />
             <label for="0">Recruteur</label>
           </p>
        </div>
      </div> 
    -->
       <div class="col s6 ">
          <label>Vous êtes</label>
          {!! Form::radio('candidatType', '1', (old('candidatType') == '1'), ['id' => 'Candidat']) !!}
          {!! Form::radio('recruteurType', '2', (old('recruteurType') == '1'), ['id'=>'Recruteur']) !!}
        <div class="col s3">
           <p>
             <input name="candidatType" type="radio" id="1" value="1"  {{ (old('candidatType') == 1) ? 'checked' : '' }} />
             <label for="1">Candidat</label>
           </p>
        </div>
        <div class="col s3">
           <p>
             <input name="recruteurType" type="radio" id="2" value="1" {{ (old('recruteurType') == 1) ? 'checked' : '' }} />
             <label for="2">Recruteur</label>
           </p>
        </div>
      </div> 
      <div class="row">
        <div class="col s12 center-align">
           <button type="submit" class="waves-effect waves-light btn orange lighten-1">
            je m'inscris
           </button>
        </div>  
       </div>
    <div class="col s12 m4 l2"></div>
  </div></div></div>
</form>
   {!! Form::close() !!}
  @endsection


	