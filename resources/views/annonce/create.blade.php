@extends('layouts.recruteur')

@section('content')
<!--_________________Formulaire annonce___________________-->
<div class="content ">

   <!-- _____________________________cart begin____________________________ --> 
    <div class="col s12 ">
        <div class="col s12 card white darken-1">
        <span class="card-title center-align grey-text">Déposer une annonce</span>

  	<!--_________________Form and method store___________________-->

    <form class="col s12" action="{{url ('annonces')}}" method="post">
    	 {!! Form::open(array('url' => 'foo/bar')) !!}
       {{ csrf_field() }}

       @if (count($errors) >0)
        @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
      @endif
      
      <div class="row col s12">
        <div class="input-field col s6">
          <input  id="titre_annonce" name="titre_annonce" type="text" class="validate">
          <label for="titre_annonce">Titre d'annonce</label>
        </div>
      <!--<div class="row col s6">
         <label>Nom de l'entreprise </label><br>
          <select  class="browser-default col s12" name="langue_exigees">
            <option value="" disabled selected>Choose your company</option>
            <option value="arabe">Ideo Factory </option>
            <option value="france">Orange</option>
            <option value="anglais">Acima</option>
            <option value="espagnol">Nike</option>
          </select>
      </div>-->
     </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="description_poste" name="description_poste" class="materialize-textarea"></textarea>
          <label for="description_poste">Description du poste</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s12">
          <textarea id="description_profil" name="description_profil" class="materialize-textarea"></textarea>
          <label for="description_profil">Description du profil</label>
        </div>
      </div>
    

      
         <div class="row col s12">
          
            <p>Niveau d'etude :</p>           
               <p class="row col s2">
                 <input name="niveau_etude" type="radio" id="qualifAvantBac" value="qualifAvantBac" />
                 <label for="qualifAvantBac">Qualification avant bac</label>
               </p>
               <p class="row col s2">
                 <input name="niveau_etude" type="radio" id="bac+1" value="bac+1" />
                 <label for="bac+1">bac + 1</label>
               </p>
               <p class="row col s2">
                 <input  name="niveau_etude" type="radio" id="bac+2"  value="bac+2" />
                 <label for="bac+2">bac +2</label>
               </p>
               <p class="row col s2">
                 <input name="niveau_etude" type="radio" id="bac+3" value="bac+3" />
                 <label for="bac+3">bac +3</label>
               </p>
               <p class="row col s2">
                 <input name="niveau_etude" type="radio" id="bac+5" value="bac+5" />
                 <label for="bac+5">bac +5</label>
               </p>
               <p class="row col s2">
                 <input name="niveau_etude" type="radio" id="bacPlus5Plus" value="bacPlus5Plus" />
                 <label for="bacPlus5Plus">bac +5 et plus</label>
               </p>
          </div>

          <div class="row col s12">
            
            <p>Niveau d'experience :</p>           
               <p class="row col s3">
                 <input name="niveau_experience" type="radio" id="EtudiantejeuneDiplome" value="EtudiantejeuneDiplome" />
                 <label for="EtudiantejeuneDiplome">Etudiantèjeune_diplomé</label>
               </p>
               <p class="row col s2">
                 <input name="niveau_experience" type="radio" id="Debutant_2ans" value="Debutant_2ans" />
                 <label for="Debutant_2ans">Débutant<2ans</label>
               </p>
               <p class="row col s2">
                 <input  name="niveau_experience" type="radio" id="Xp2ans5ans"  value="Xp2ans5ans" />
                 <label for="Xp2ans5ans">Xp_2ans_5ans</label>
               </p>
               <p class="row col s2">
                 <input name="niveau_experience" type="radio" id="Xp5ans10ans" value="Xp5ans10ans" />
                 <label for="Xp5ans10ans">Xp_5ans_10ans</label>
               </p>
               <p class="row col s3">
                 <input name="niveau_experience" type="radio" id="Xp_10ans" value="Xp_10ans" />
                 <label for="Xp_10ans">Xp>10ans</label>
               </p>
          </div>
  
           <div class="row col s12">
            
            <p>Type du contrat :</p>           
               <p class="row col s2">
                 <input name="type_contrat" type="radio" id="CDI" value="CDI" />
                 <label for="CDI">CDI</label>
               </p>
               <p class="row col s2">
                 <input name="type_contrat" type="radio" id="CDD" value="CDD" />
                 <label for="CDD">CDD</label>
               </p>
               <p class="row col s2">
                 <input name="type_contrat" type="radio" id="stage"  value="stage" />
                 <label for="stage">stage</label>
               </p>
               <p class="row col s2">
                 <input name="type_contrat" type="radio" id="mission" value="mission" />
                 <label for="mission">mission</label>
               </p>
               <p class="row col s2">
                 <input name="type_contrat" type="radio" id="alternance" value="alternance" />
                 <label for="alternance">alternance</label>
               </p>
               <p class="row col s2">
                 <input name="type_contrat" type="radio" id="tempsPartiel" value="tempsPartiel" />
                 <label for="tempsPartiel">temps partiel</label>
               </p>
            </div>
   <div class="row col s12">
      <div class="row col s6">
       
        <label>Langues exigées </label><br>
          <select  class="browser-default col s12" name="langue_exigees">
            <option value="" disabled selected>Choose your option</option>
            <option value="arabe">Arabe </option>
            <option value="france">France</option>
            <option value="anglais">Anglais</option>
            <option value="espagnol">Espagnol</option>
          </select>
      </div>
      <div class="col s6">
         Emploi base dans ville de :
         <div class="input-field inline">
           <input id="emploi_base_ville" type="text" name="emploi_base_ville" class="validate">
           <label for="emploi_base_ville" data-error="wrong" data-success="right">ville</label>
         </div>
       </div> 
     </div>     
           <div class="row">
             <div class="col s12 center-align">
               <input class="waves-effect waves-light btn orange lighten-1" type="submit" value="Enregistrer">
             </div>  
           </div>
            {!! Form::close() !!}
      </form>   
</div>

@endsection