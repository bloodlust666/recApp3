@extends('layouts.candidat')

@section('content')


<!--_________________ Index recruteur ___________________-->
<div class="content ">

    <!-- ______ Publiez une annonce d'emploi ______________ -->
           <div class="col s6">
             <div class="card horizontal">
               <div class="card-image">
                 <img src="{{ URL::asset('img/candidature_spontanee.png')}}">
               </div>
               <div class="card-stacked">
                 <div class="card-content">
                   <p></p>
                 </div>
                 <div class="card-action">
                   <a href="#">Les offres d'emploi</a>
                 </div>
               </div>
             </div>
          </div>
    <!-- __________Rechercher des cv  ______________ -->
          <div class="col s6">
          <div class="card horizontal">
             <div class="card-image">
               <img src="{{ URL::asset('img/candidature_spontanee.png')}}">
             </div>
             <div class="card-stacked">
               <div class="card-content">
                 <p></p>
               </div>
               <div class="card-action">
                 <a href="#"></a>
               </div>

             </div>
            </div>
           </div>
   </div>

@endsection
