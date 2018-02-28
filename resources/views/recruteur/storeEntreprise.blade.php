@extends('layouts.recruteur')

@section('content')

<!--_________________Formulaire recruteur ___________________-->
<div class="content ">

   <!-- _____________________________cart begin____________________________ --> 
    <div class="col s12 ">
            <div class="card white darken-1">
              <div class="card-content ">
                <span class="card-title center-align grey-text">Créer mon entreprise</span>
                
           
  	<!--_________________Form and method store___________________--> 
<form  action="{{ route('recruteur.storeEntreprise') }}" method="POST" enctype="multipart/form-data" >
     {!! Form::open(array('url' => 'foo/bar')) !!}
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

    	     <label>Pays </label><br>
    	       <select  class="browser-default col s12 m6" name="pays">
    	         <option value="" disabled selected>Choose your option</option>
    	         <option value="Maroc">Maroc </option>
    	         <option value="Algerie">Algerie</option>
    	         <option value="Tunisie">Tunisie</option>
    	         <option value="France">France</option>
    	       </select>
    	  </div>
          
          <div class="file-field input-field">
                <div class="btn">
                  <span>Image </span>
                  <input type="file" name="Elogo" id="Elogo" multiple>
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Upload l'image de l'entreprise">
                </div>
          </div>
        <br>
    	  <h6>L'activité de l'entreprise </h6>
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
          -->
          <LABEL class="center-align" style="text-align: center;">Coché 5 secteur maximum </LABEL>
         <div class="row col s12">

          	<div class="row col s6"><br>
    	        <p>
    	          <input type="checkbox" id="inlineCheckbox1" name="activiteE[]" value="AMEUBLEMENT_DECORATION" />
    	          <label for="inlineCheckbox1">AMEUBLEMENT_DÉCORATION</label>
    	        </p>
    	        <p>
    	          <input type="checkbox" id="inlineCheckbox2" name="activiteE[]" value="CENTRES_APPEL"  />
    	          <label for="inlineCheckbox2">CENTRES_APPEL</label>
    	        </p>
    	        <p>
    	          <input type="checkbox" id="inlineCheckbox3" name="activiteE[]" value="EDITION_IMPRIMERIE" />
    	          <label for="inlineCheckbox3">ÉDITION_IMPRIMERIE</label>
    	        </p>
                <p>
                  <input type="checkbox" id="inlineCheckbox4" name="activiteE[]" value="METALLURGIE_SIDÉRURGIE" />
                  <label for="inlineCheckbox4">MÉTALLURGIE_SIDÉRURGIE</label>
                </p>
                <p>
                  <input type="checkbox" id="inlineCheckbox5" name="activiteE[]" value="PAPIER_BOIS_PLASTIQUE"  />
                  <label for="inlineCheckbox5">PAPIER_BOIS_PLASTIQUE</label>
                </p>
                <p>
                  <input type="checkbox" id="inlineCheckbox6" name="activiteE[]" value="QUALITE_METHODES" />
                  <label for="inlineCheckbox6">QUALITÉ_MÉTHODES</label>
                </p>
                <p>
                  <input type="checkbox" id="inlineCheckbox7" name="activiteE[]" value="EDUCATION_FORMATION" />
                  <label for="inlineCheckbox7">ÉDUCATION_FORMATION</label>
                </p>
                <p>
                  <input type="checkbox" id="inlineCheckbox8" name="activiteE[]" value="IMMOBILIER_ARCHITECTURE"  />
                  <label for="inlineCheckbox8">IMMOBILIER_ARCHITECTURE</label>
                </p>
                <p>
                  <input type="checkbox" id="inlineCheckbox9" name="activiteE[]" value="INFORMATIQUE_SSII_INTERNET" />
                  <label for="inlineCheckbox9">INFORMATIQUE_SSII_INTERNET</label>
                </p>
                <p>
                  <input type="checkbox" id="inlineCheckbox10" name="activiteE[]" value="INGENIERIE_ETUDES_DEVELOPPEMENT" />
                  <label for="inlineCheckbox10">INGÉNIERIE_ÉTUDES_DÉVELOPPEMENT</label>
                </p>

    	    </div>
    	    <div class="row col s6">
    	    	   <p>
    	    	   <input type="checkbox" id="inlineCheckbox11" name="activiteE[]" value="TELECOM" />
    	    	   <label for="inlineCheckbox11">TÉLÉCOM</label>
    	    	   </p>
    	    	   <p>
    	    	   <input type="checkbox" id="inlineCheckbox12" name="activiteE[]" value="AUTOMOBILE_TRANSPORT" />
    	    	   <label for="inlineCheckbox12">AUTOMOBILE_TRANSPORT</label>
    	    	   </p>
    	    	   <p>
    	    	   <input type="checkbox" id="inlineCheckbox13" name="activiteE[]" value="DISTRIBUTION_VENTE_COMMERCE" />
    	    	   <label for="inlineCheckbox13">DISTRIBUTION_VENTE_COMMERCE</label>
    	    	   </p>
                   <p>
                   <input type="checkbox" id="inlineCheckbox14" name="activiteE[]" value="SANTE_PHARMACIE_HOPITAUX" />
                   <label for="inlineCheckbox14">SANTÉ_PHARMACIE_HÔPITAUX</label>
                   </p>
                   <p>
                   <input type="checkbox" id="inlineCheckbox15" name="activiteE[]" value="SERVICES_AEROPORTUAIRES_MARITIMES" />
                   <label for="inlineCheckbox15">SERVICES_AÉROPORTUAIRES_MARITIMES</label>
                   </p>
                   <p>
                   <input type="checkbox" id="inlineCheckbox16" name="activiteE[]" value="SERVICES_COLLECTIFS_SOCIAUX" />
                   <label for="inlineCheckbox16">SERVICES_COLLECTIFS_SOCIAUX</label>
                   </p>
                   <p>
                   <input type="checkbox" id="inlineCheckbox17" name="activiteE[]" value="MARKETING_COMMUNICATION_MEDIAS" />
                   <label for="inlineCheckbox17">MARKETING_COMMUNICATION_MÉDIAS</label>
                   </p>
                   <p>
                   <input type="checkbox" id="inlineCheckbox18" name="activiteE[]" value="NETTOYAGE_SECURITE_SURVEILLANCE" />
                   <label for="inlineCheckbox18">NETTOYAGE_SÉCURITÉ_SURVEILLANCE</label>
                   </p>
                   <p>
                   <input type="checkbox" id="inlineCheckbox19" name="activiteE[]" value="SPORT_ACTION_CULTURELLE_SOCIALE" />
                   <label for="inlineCheckbox19">SPORT_ACTION_CULTURELLE_SOCIALE</label>
                   </p>
                   <p>
                   <input type="checkbox" id="inlineCheckbox20" name="activiteE[]" value="SERVICES_AUTRES" />
                   <label for="inlineCheckbox20">SERVICES_AUTRES</label>
                   </p>
    	    </div>
         </div> 
         <div class="row">
           <div class="input-field col s12">
             <textarea id="descriptionE" name="descriptionE" class="materialize-textarea" value="{{old('descriptionE')}}" ></textarea>
             <label for="textarea1">Description de l'entreprise </label>
           </div>
         </div> 
      
      <div class="row">
        <div class="col s12 right-align">
           <button type="submit" class="waves-effect waves-light btn orange lighten-1">
            Submit
           </button>
        </div>  
       </div>
     </div> 
    
  {!! Form::close() !!}
</form>

  @endsection