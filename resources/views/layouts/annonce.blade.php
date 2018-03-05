@extends('layouts.recruteur')

@section('content')
 <!-- _____________________________cart begin____________________________ -->
    <div class="col s12 ">
        <div class="col s12 card white darken-1">

<br><span class="card-title">Mes annonce @yield('cartTitle')</span><br>
 <!--_________________ DropDown  annonces ___________________-->
 <div class="right-align">
 <ul id="dropdown2" class="dropdown-content ">
    <li><a href="{{ url('annonces/') }}">All<span class="badge">0</span></a></li>
    <li><a href="{{ url('annonces/desactive') }}">Desactiver<span class="badge">0</span></a></li>
    <li><a href="{{ url('annonces/publier') }}">Publier<span class="badge">0</span></a></li>
  </ul>
  <a class="btn dropdown-button cyan darken-4" href="#!" data-activates="dropdown2">Mes annonces<i class="material-icons right">arrow_drop_down</i></a>
 </div>           

<!--_________________ DropDown  annonces ___________________-->

<!--________________________ tables Mes Annonces __________________________-->
<div id="" class="col s12 ">
   @yield('tableContent')

</div>

</div>
</div>
@endsection
