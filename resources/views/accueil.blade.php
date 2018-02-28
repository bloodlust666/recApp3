@extends('layouts.master')

@section('content')

     <!-- Page Layout here -->

    <div class="row">
 <div class="col s12 m4 l2"></div>
   <div class="col s12 m4 l8">

<!-- ______ Espace Candidat______________ -->
       <div class="col s6">
         <div class="card horizontal">
           <div class="card-image">
             <img src="{{ URL::asset('img/candidat.jpg')}}">
           </div>
           <div class="card-stacked">
             <div class="card-content">
               <p>I am a very simple card. I am good at containing small bits of information.</p>
             </div>
             <div class="card-action">
               <a href="{{ url('/espaceCandidat') }}">Espace Candidat</a>
             </div>
           </div>
         </div>
      </div>
<!-- __________Espace Recruteur ______________ -->
      <div class="col s6">
      <div class="card horizontal">
         <div class="card-image">
           <img src="{{ URL::asset('img/recruteur.jpg')}}">
         </div>
         <div class="card-stacked">
           <div class="card-content">
             <p>I am a very simple card. I am good at containing small bits of information.</p>
           </div>
           <div class="card-action">
             <a href="{{ url('/espaceRecruteur') }}">Espace Recruteur</a>
           </div>
         </div>
        </div>
       </div>
  </div>
</div>

  <!-- __________les offres d emploi list  ______________ -->
  <div class="row">
    <div class="col s12 m4 l2"></div>
    <div class="col s12 m4 l8">
        <form class="col s12" action="{{ url('/search') }}" method="get">
      <div class="row">
      <div class="col s12 ">
         <div class="input-field col  s10 ">
           <i class="material-icons prefix ">search</i>
           <input id="titre_annonce" type="text" name="titre_annonce" class="validate" placeholder=" Mot-clé " value="{{ old('titlesearch') }}">
           <label for="titre_annonce">Les offres d'emploi</label>
         </div><br>
        <input class="waves-effect waves-light btn orange lighten-1" type="submit" value="Search">
      </div>


<!-- _____________________________ Annonce List____________________________ -->

  <ul class="collection">
    @foreach($annonces as $annonce)
    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <a href="{{ url('#') }}">{{$annonce->titre_annonce}}</a>
      <p>{{$annonce->created_at}} | Company name<br>
         {{$annonce->description_profil}}<br>
         Region de : {{$annonce->emploi_base_ville}}
      </p>
      <!--<a href="#!" class="secondary-content waves-effect waves-light btn">Detail</a>-->
      <a href="#!" class="secondary-content"><i class="material-icons">arrow_forward</i></a>
    </li>
    @endforeach
  </ul>

<!-- _____________________________END  Annonce List____________________________ -->
      </div>
     </form>
     <!-- _____________________________Pagination____________________________ -->
     <div class=" center-align">
        {!! $annonces->links(); !!}
     </div>
       <!-- _____________________________Pagination____________________________ -->
    </div>
   </div>
   <div class="col s12 m4 l2"></div>
  </div>



@endsection
