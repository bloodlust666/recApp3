
@extends('layouts.recruteur')

@section('content')
 
<!--_________________ Index recruteur ___________________-->
<div class="content ">

    <!-- ______ Publiez une annonce d'emploi ______________ -->
           <div class="col s6">
             <div class="card horizontal">
               <div class="card-image">
                 <img src="{{ URL::asset('img/ANNONCE.png')}}">
               </div>
               <div class="card-stacked">
                 <div class="card-content">
                   <p>I am a very simple card. I am good at containing small bits of information.</p>
                 </div>
                 <div class="card-action">
                   <a href="#">Publiez une annonce</a>
                 </div>
               </div>
             </div>
          </div>
    <!-- __________Rechercher des cv  ______________ -->
          <div class="col s6">
          <div class="card horizontal">
             <div class="card-image">
               <img src="{{ URL::asset('img/CV.jpg')}}">
             </div>
             <div class="card-stacked">
               <div class="card-content">
                 <p>I am a very simple card. I am good at containing small bits of information.</p>
               </div>
               <div class="card-action">
                 <a href="#">Rechercher des CV</a>
               </div>
             </div>
            </div>
           </div>
   </div>
@endsection
