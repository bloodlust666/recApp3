@extends('layouts.recruteur')

@section('content')
<!--_________________Formulaire annonce___________________-->
<div class="content ">

   <!-- _____________________________cart begin____________________________ --> 
    <div class="col s12 ">
        <div class="col s12 card white darken-1">
        <span class="card-title center-align grey-text">Déposer une annonce</span>

    <!--_________________Form and method store___________________-->

    <form class="col s12" action="{{url ('annonces/'.$annonce->id)}}" method="PUT">
      <input type="hidden" name="_method" value="PUT">
       {!! Form::open(array('url' => 'foo/bar')) !!}
       {{ csrf_field() }}

       @if (count($errors) >0)
        @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
      @endif
      
      <div class="row">
        <div class="input-field col s12">
          <input  id="titre_annonce" name="titre_annonce" type="text" class="validate" 
          value="{{$annonce->titre_annonce}}">
          <label for="first_name">Titre d'annonce</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea id="description_poste" name="description_poste" class="materialize-textarea" 
          value="{{$annonce->description_poste}}"></textarea>
          <label for="textarea1">Description du poste</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s12">
          <textarea id="description_profil" name="description_profil" class="materialize-textarea"
           value="{{$annonce->description_profil}}"></textarea>
          <label for="textarea2">Description du profil</label>
        </div>
      </div>
    

      
         <div class="row col s12">
          
            <p>Niveau d'etude :</p>           
               <p class="row col s2">
                 <input name="niveau_etude" type="radio" id="qualifAvantBac" value="{{$annonce->qualifAvantBac}}" />
                 <label for="qualifAvantBac">Qualification avant bac</label>
               </p>
               <p class="row col s2">
                 <input name="niveau_etude" type="radio" id="bac+1" value="{{$annonce->bac+1}}" />
                 <label for="bac+1">bac + 1</label>
               </p>
               <p class="row col s2">
                 <input  name="niveau_etude" type="radio" id="bac+2"  value="{{$annonce->bac+2}}" />
                 <label for="bac+2">bac +2</label>
               </p>
               <p class="row col s2">
                 <input name="niveau_etude" type="radio" id="bac+3" value="{{$annonce->bac+3}}" />
                 <label for="bac+3">bac +3</label>
               </p>
               <p class="row col s2">
                 <input name="niveau_etude" type="radio" id="bac+5" value="{{$annonce->bac+5}}" />
                 <label for="bac+5">bac +5</label>
               </p>
               <p class="row col s2">
                 <input name="niveau_etude" type="radio" id="bac+5Plus+" value="{{$annonce->bac+5+}}" />
                 <label for="bac+5Plus+">bac +5 et plus</label>
               </p>
          </div>

          <div class="row col s12">
            
            <p>Niveau d'experience :</p>           
               <p class="row col s3">
                 <input name="niveau_experience" type="radio" id="EtudiantejeuneDiplome" 
                 value="{{$annonce->EtudiantejeuneDiplome}}" />
                 <label for="EtudiantejeuneDiplome">Etudiantèjeune_diplomé</label>
               </p>
               <p class="row col s2">
                 <input name="niveau_experience" type="radio" id="Debutant<2ans" value="{{$annonce->Debutant<2ans}}" />
                 <label for="Debutant<2ans">Débutant<2ans</label>
               </p>
               <p class="row col s2">
                 <input  name="niveau_experience" type="radio" id="Xp2ans5ans"  value="{{$annonce->Xp2ans5ans}}" />
                 <label for="Xp2ans5ans">Xp_2ans_5ans</label>
               </p>
               <p class="row col s2">
                 <input name="niveau_experience" type="radio" id="Xp5ans10ans" value="{{$annonce->Xp5ans10ans}}" />
                 <label for="Xp5ans10ans">Xp_5ans_10ans</label>
               </p>
               <p class="row col s3">
                 <input name="niveau_experience" type="radio" id="Xp>10ans" value="{{$annonce->Xp>10ans}}" />
                 <label for="Xp>10ans">Xp>10ans</label>
               </p>
          </div>
  
           <div class="row col s12">
            
            <p>Type du contrat :</p>           
               <p class="row col s2">
                 <input name="type_contrat" type="radio" id="CDI" value="{{$annonce->CDI}}" />
                 <label for="CDI">CDI</label>
               </p>
               <p class="row col s2">
                 <input name="type_contrat" type="radio" id="CDD" value="{{$annonce->CDD}}" />
                 <label for="CDD">CDD</label>
               </p>
               <p class="row col s2">
                 <input name="type_contrat" type="radio" id="stage"  value="{{$annonce->stage}}" />
                 <label for="stage">stage</label>
               </p>
               <p class="row col s2">
                 <input name="type_contrat" type="radio" id="mission" value="{{$annonce->mission}}" />
                 <label for="mission">mission</label>
               </p>
               <p class="row col s2">
                 <input name="type_contrat" type="radio" id="alternance" value="{{$annonce->alternance}}" />
                 <label for="alternance">alternance</label>
               </p>
               <p class="row col s2">
                 <input name="type_contrat" type="radio" id="tempsPartiel" value="{{$annonce->tempsPartiel}}" />
                 <label for="tempsPartiel">temps partiel</label>
               </p>
            </div>
   <div class="row col s12">
      <div class="row col s6">
       
        <label>Langues exigées </label><br>
          <select  class="browser-default col s12" name="langue_exigees">
            <option value="" disabled selected>Choose your option</option>
            <option value="{{$annonce->arabe}}">Arabe </option>
            <option value="{{$annonce->france}}">France</option>
            <option value="{{$annonce->anglais}}">Anglais</option>
            <option value="{{$annonce->espagnol}}">Espagnol</option>
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
               <input class="waves-effect waves-light btn teal accent-4" type="submit" value="Modifier">
             </div>  
           </div>
            {!! Form::close() !!}
      </form>   
</div>

@endsection