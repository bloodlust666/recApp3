@extends('layouts.candidat')

@section('content')

<!--_________________Formulaire recruteur ___________________-->
<div class="content ">
   <div class="row ">

   <div class="col s12 m4 l8">
    <!--_________________Form and method store___________________--> 
<form action="{{url ('cvs')}}" method="post" >
{!! Form::open(array('url' => 'foo/bar')) !!}
       {{ csrf_field() }}

       @if (count($errors) >0)
        @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
      @endif



<div class="row">
 <label>Profil :</label>

    <div class="input-field col s6">
    <select>
      <option value="Situation_actuelle" disabled selected>Situation actuelle</option>
      <option value="1">Etudiant</option>
      <option value="2">Diplomé a la recherche d'emploi</option>
      <option value="3">En poste</option>
    </select>
    <label>Situation actuelle</label>
</div>
 <div class="input-field col s6">
<select>


           <option value="1">Aéronautique / Spatial</option><option value="2">Agence pub / Marketing Direct</option><option value="3">Agriculture / Environnement </option><option value="4">Agroalimentaire</option><option value="5">Ameublement / Décoration</option><option value="6">Assurance / Courtage</option><option value="7">Audiovisuel</option><option value="8">Automobile / Motos / Cycles</option><option value="9">Logistique</option><option value="10">Gouvernement</option><option value="11">Banque / Finance</option><option value="12">BTP / Génie Civil</option><option value="13">Call Center / Web Center</option><option value="14">Chimie / Parachimie / Peintures</option><option value="15">Communication / Evénementiel</option><option value="16">Comptabilité / Audit</option><option value="17">Conseil / Etudes</option><option value="18">Cosmétique / Parfumerie / Luxe</option><option value="19">Distribution</option><option value="20">Edition / Imprimerie</option><option value="21">Education / Formation</option><option value="22">Electro-mécanique / Mécanique</option><option value="23">Electronique</option><option value="24">Energie</option><option value="25">Extraction / Mines</option><option value="26">Ferroviaire</option><option value="27">Hôtellerie / Restauration</option><option value="28">Immobilier / Promoteur / Agence</option><option value="29">Import / Export / Négoce</option><option value="30">Informatique</option><option value="31">Internet / Multimédia</option><option value="32">Juridique / Cabinet d’avocats</option><option value="33">Location véhicules</option><option value="34">Matériel Médical / Parapharmacie</option><option value="35">Métallurgie / Sidérurgie</option><option value="36">Nettoyage / Sécurité / Gardiennage</option><option value="37">Offshoring / Nearshoring</option><option value="38">Papier / Carton</option><option value="39">Pétrole / Gaz</option><option value="40">Pharmacie / Santé</option><option value="41">Plasturgie</option><option value="42">Presse</option><option value="43">Recrutement / RH / Intérim</option><option value="44">Service public / Administration</option><option value="45">Telecom</option><option value="46">Textile / Cuir</option><option value="47">Tourisme / Voyage / Loisirs </option><option value="48">Transport / Messagerie / Logistique</option><option value="49">Autres Industries</option><option value="50">Autres services</option>




      </select>
      <label>Diplome</label>
  </div>




    </div> 




 <div class="row">
        <div class="input-field col s6">
          <input type="text" class="datepicker" name="Date_deb_Formation">
           <label for="Date_deb_Formation">Date Debut Formation</label>
        </div>
    
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="datepicker" name="Date_fin_Formation">
           <label for="Date_fin_Formation">Date Fin Formation</label>
        </div>
     

<div class="row">

    <div class="input-field col s6">
    <select>
      <option value="" disabled selected>Votre etablissement</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Etablissement</label>
</div>
 <div class="input-field col s6">
<select>
      <option value="" disabled selected>Diplome</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
      </select>
      <label>Diplome</label>
  </div>




    </div> 


      
      <div class="row">
        <div class="input-field col s12">
          <textarea id="Description_Formation" class="materialize-textarea"></textarea>
          <label for="Description_Formation">Description Formation</label>
        </div>
      </div>





 <label>Vos expérience professionnelle</label>


<div class="row">
        <div class="input-field col s6">
          <input type="text" class="datepicker">
           <label for="Date_Experience">Date Debut Experience</label>
        </div>
      
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="datepicker">
           <label for="Date_Experience">Date Fin Experience</label>
        </div>

 </div> 
</div>
     

 <div class="row">
        <div class="input-field col s6">
          
          <input id="Entreprise" type="text" class="validate">
          
           <label for="Entreprise">Entreprise</label>
        </div>
    
    
        <div class="input-field col s6">
           <input id="Intitulé_poste" type="text" class="validate">
           <label for="Intitulé_poste">Intitulé de poste</label>
        </div>
 </div>




<div class="row">

    <div class="input-field col s6">
    <select>
      <option value="" disabled selected>Secteur d'activité</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Secteur d'activité</label>
</div>
 <div class="input-field col s6">
<select>
      <option value="" disabled selected>Fonction</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
      </select>
      <label>Fonction</label>

  </div>

    </div> 
      
      <div class="row">

    <div class="input-field col s6">
    <select>
      <option value="" disabled selected>Type de contrat</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Type de contrat</label>
</div>
 <div class="input-field col s6">
<select>
      <option value="" disabled selected>Ville</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
      </select>
      <label>Ville</label>

  </div>

    </div> 


 <div class="row">



        <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
           <label for="Salaire">Salaire Reçu</label>
        </div>

<div class="input-field col s12">
          <textarea id="Description_exp" class="materialize-textarea"></textarea>
          <label for="Description_exp">Description Experience professionnelle</label>
        </div>

  </div>



 <label>Langues</label>

  <div class="row">

    <div class="input-field col s6">
    <select>
      <option value="" disabled selected>Arabe</option>
      <option value="1">Maitrisé</option>
      <option value="2">Courant</option>
      <option value="3">Basique</option>
      
    </select>
   
</div>
 <div class="input-field col s6">
<select>
      <option value="" disabled selected>Français</option>
       <option value="1">Maitrisé</option>
      <option value="2">Courant</option>
      <option value="3">Basique</option>
      
</select>
  </div>
   </div>

    <div class="row">

   <div class="input-field col s6">
    <select>
      <option value="" disabled selected>Englais</option>
      <option value="1">Maitrisé</option>
      <option value="2">Courant</option>
      <option value="3">Basique</option>
     
    </select>
    </div> 
    <div class="input-field col s6">
    <select>
      <option value="" disabled selected>Englais</option>
      <option value="1">Maitrisé</option>
      <option value="2">Courant</option>
      <option value="3">Basique</option>
     
    </select>
    </div> 
 </div> 

    <div class="row">


<label>JOINDRE LA PHOTO</label>

<div class="file-field input-field">
      <div class="btn">
        <span>Photo</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
       </div> 

 <div class="row">

<div class="file-field input-field">
      <div class="btn">
        <span>CV</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
        </div>


<div class="file-field input-field">
      <div class="btn">
        <span>Lettre de motivation</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>

 </div>

<button class="btn waves-effect waves-light" type="submit" name="action">
   Valider
  </button>
        
{!! Form::close() !!}
    </form>

@endsection