@extends('layouts.master')

@section('content')
<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
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
   <div class="col s12 m4 l2"></div>
   <div class="col s12 m4 l8">
    <!--_________________Form and method store___________________-->
<form  action="{{ route('register') }}" method="POST">
        {{ csrf_field() }}
        
        @if (count($errors) >0)
          @foreach ($errors->all() as $error)
          <p>{{$error}}</p>
          @endforeach
        @endif

          <h6>Votre entreprise</h6>
          <div class="row ">
            <div class="input-field col s6">
              <input  id="nomEntreprise" type="text" class="validate" name="nomEntreprise" value="{{old('nomEntreprise')}}">
              <label for="nomEntreprise">Nom de l'entreprise</label>
            </div>
            <div class="input-field col s6">
              <input id="ville" type="text" class="validate" name="ville" value="{{old('ville')}}">
              <label for="ville">Ville</label>
            </div>
          </div>
          <div class="row ">
            <div class="input-field col s6">
              <input  id="adresse" type="text" class="validate" name="adresse" value="{{old('adresse')}}">
              <label for="adresse">Adresse</label>
            </div>
            <div class="input-field col s6">
              <input id="codePostal" type="text" class="validate" name="codePostal" value="{{old('codePostal')}}">
              <label for="codePostal">Code postal</label>
            </div>
          </div>
           <div class="row">
            <div class="input-field col s6">
              <input id="siteWeb" type="text" class="validate" name="siteWeb">
              <label for="siteWeb">Site web</label>
            </div>
            {{ Form::select('pays', [
                'Maroc' => 'Maroc',
                'Algerie' => 'Algerie',
                'Tunisie' => 'Tunisie',
                'France' => 'France',
                ]) }}
             <label>Pays </label><br>
               <select  class="browser-default col s12 m6" name="pays">
                 <option value="" disabled selected>Choose your option</option>
                 <option value="Maroc">Maroc </option>
                 <option value="Algerie">Algerie</option>
                 <option value="Tunisie">Tunisie</option>
                 <option value="France">France</option>
               </select>
          </div>

          <h6>Description de l'entreprise </h6>
          <!--
          {{ Form::checkbox('AMEUBLEMENT_DÉCORATION', '1') }}
          {{ Form::checkbox('CENTRES_APPEL', '2') }}
          {{ Form::checkbox('ÉDITION_IMPRIMERIE', '3') }}
          {{ Form::checkbox('HÔTELLERIE_RESTAURATION', '4') }}
          {{ Form::checkbox('INDUSTRIE_PRODUCTION', '5') }}
          {{ Form::checkbox('INGÉNIERIE_ÉTUDES_DÉVELOPPEMENT', '6') }}
          {{ Form::checkbox('MÉTALLURGIE_SIDÉRURGIE', '7') }}
          {{ Form::checkbox('PAPIER_BOIS_PLASTIQUE', '8') }}
          {{ Form::checkbox('QUALITÉ_MÉTHODES', '9') }}
          {{ Form::checkbox('SANTÉ_PHARMACIE_HÔPITAUX', '10') }}
          {{ Form::checkbox('SERVICES_AÉROPORTUAIRES_MARITIMES', '11') }}
          {{ Form::checkbox('SERVICES_COLLECTIFS_SOCIAUX', '12') }}
          {{ Form::checkbox('TÉLÉCOM', '13') }}
          {{ Form::checkbox('AUTOMOBILE_TRANSPORT', '14') }}
          {{ Form::checkbox('DISTRIBUTION_VENTE_COMMERCE', '15') }}
          {{ Form::checkbox('ÉDUCATION_FORMATION', '16') }}
          {{ Form::checkbox('IMMOBILIER_ARCHITECTURE', '17') }}
          {{ Form::checkbox('INFORMATIQUE_SSII_INTERNET', '18') }}
          {{ Form::checkbox('MARKETING_COMMUNICATION_MÉDIAS', '19') }}
          {{ Form::checkbox('NETTOYAGE_SÉCURITÉ_SURVEILLANCE', '20') }}
          {{ Form::checkbox('PRODUITS_GRANDE_CONSOMMATION', '21') }}
          {{ Form::checkbox('RECHERCHE_DÉVELOPPEMENT', '22') }}
          {{ Form::checkbox('SECRÉTARIAT', '23') }}
          {{ Form::checkbox('TOURISME_LOISIRS', '24') }}
          {{ Form::checkbox('SPORT_ACTION_CULTURELLE_SOCIALE', '25') }}
          {{ Form::checkbox('SERVICES_AUTRES', '26') }}
         <div class="row col s12">
            <div class="row col s6">
                <p>
                  <input type="checkbox" id="d1" name="AMEUBLEMENT_DÉCORATION" value="1" />
                  <label for="d1">AMEUBLEMENT_DÉCORATION</label>
                </p>
                <p>
                  <input type="checkbox" id="d2" name="CENTRES_APPEL" value="2"  />
                  <label for="d2">CENTRES_APPEL</label>
                </p>
                <p>
                  <input type="checkbox" id="d3" name="ÉDITION_IMPRIMERIE" value="3" />
                  <label for="d3">ÉDITION_IMPRIMERIE</label>
                </p>
            </div>
               <div class="row col s6">
                    <p>
                      <input type="checkbox" id="d13" name="TÉLÉCOM" value="13" />
                      <label for="d13">TÉLÉCOM</label>
                    </p>
                    <p>
                      <input type="checkbox" id="d14" name="AUTOMOBILE_TRANSPORT" value="14" />
                      <label for="d14">AUTOMOBILE_TRANSPORT</label>
                    </p>
                    <p>
                      <input type="checkbox" id="d15" name="DISTRIBUTION_VENTE_COMMERCE" value="15" />
                      <label for="d15">DISTRIBUTION_VENTE_COMMERCE</label>
                    </p>
             </div>
          </div>  
           -->
          <div class="row">
            <div class="input-field col s12">
              <textarea id="descriptionE" name="descriptionE" class="materialize-textarea" value="{{old('descriptionE')}}" ></textarea>
              <label for="textarea1">Description de l'entreprise </label>
            </div>
          </div>

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
          {{ Form::radio('civilite', 'Mr') }}<br>
          {{ Form::radio('civilite', 'Mme') }}<br>
          {{ Form::radio('civilite', 'Mlle') }}
        <div class="col s2">
           <p>
             <input name="civilite" type="radio" id="test1" value="Mr" />
             <label for="test1">Mr</label>
           </p>
        </div>
        <div class="col s2">
           <p>
             <input name="civilite" type="radio" id="test2" value="Mme" />
             <label for="test2">Mme</label>
           </p>
        </div>
        <div class="col s2">
           <p>
             <input name="civilite" type="radio" id="test3"  value="Mlle"/>
             <label for="test3">Mlle</label>
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
   
      <div class="row">
        <div class="col s12 center-align">
           <button type="submit" class="waves-effect waves-light btn">
            je m'inscris
           </button>
        </div>  
       </div>
    </form>
    <div class="col s12 m4 l2"></div>
  </div>
@endsection
</form>