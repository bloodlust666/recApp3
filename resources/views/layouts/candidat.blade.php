<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/materialize.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/materialize.min.css') }}">
<body>
    <style>  #mainNav {  background-color: #cfdf5f;  }</style>
<!-- _____________________________NAV BAR____________________________ -->
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">compt</a></li>
  <!--<li><a href="#!">two</a></li>
  <li class="divider"></li>-->
  <li><a href="{{ route('logout') }}"
      onclick="event.preventDefault();document.getElementById('logout-form').submit();">
      Logout
  </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
  </form></li>
</ul>
<nav style=" " >
  <div class="nav-wrapper cyan darken-2" style="">
      <a href="{{ url('/') }}" class="brand-logo" src=""><img src="{{ URL::asset('img/l9itha_logo-New2.png')}}" style=" height: 65px; width: auto; "></a>
    <ul  id="mainNav" class="right hide-on-med-and-down">
      <!-- Authentication Links -->
                        @guest
      <li><a href="{{ route('custom.login') }}">login</a></li>
      <li><a href="{{ route('custom.register') }}">register</a></li>
      @else
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
      @endguest
    </ul>
  </div>
</nav>


<!-- ___________________________NAV BAR END ____________________________ -->
<div class="row ">
   <div class="col s12 m4 l2">
       <!-- _____________________________SIDE BAR____________________________ -->
           <div class="collection ">
              <a href="{{ url('espaceCandidat') }}" class="collection-item active cyan darken-2">Accueil candidat</a>
              <a href="{{ url('cvs/create') }}" class="collection-item ">Créer mon CV</a>
              <a href="#" class="collection-item"></a>
              <a href="#" class="collection-item"></a>
           </div>

       <!-- _____________________________END SIDE BAR____________________________ -->
   </div>
<div class="col s12 m4 l8">
    @yield('content')
</div>
</div>
       <!-- _____________________________END SIDE BAR section ____________________________ -->


<div class="col s12 m4 l2">

</div>


<!-- jquery and bootstrap js-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/materialize.min.js') }}"></script>
<script src="{{ asset('assets/js/materialize.js') }}"></script>
</body>
</html>
