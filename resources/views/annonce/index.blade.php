@extends('layouts.recruteur')

@section('content')
 <!-- _____________________________cart begin____________________________ -->
    <div class="col s12 ">
        <div class="col s12 card white darken-1">
<br><br>
 <!--_________________ Index annonces ___________________-->
    <div class="col s12 right-align  ">
      <ul class="tabs  tabs-transparent col s12 light-green lighten-1 " >
        <li class="tab col s3 "><a class="active white-text" href="#test1">Mes annonces</a></li>
        <li class="tab col s3"><a class="white-text" href="#test2" >Les annonces publié</a></li>
        <li class="tab col s3"><a class="white-text" href="#test4">Les annonces  déssactivées</a></li>
      </ul>
    </div>
<!--________________________ tables Mes Annonces __________________________-->
      <div id="test1" class="col s12 ">
 <table class="striped">
        <thead>
          <tr>
              <th>Titre de l'annonce</th>
              <th>Date</th>
              <th>active/inactive</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach($annonces as $annonce)
          <tr>
            <td>{{$annonce->titre_annonce}}</td>
            <td>{{$annonce->created_at}}</td>
            <td>{{$annonce->active}}</td>
            <td>
              <a class="waves-effect waves-light btn blue accent-3" href="">Details</a>
              <a class="waves-effect waves-light btn  teal accent-4"
              href="{{ url('annonces/'.$annonce->id.'/edit')}}">Editer</a>
              <a class="waves-effect waves-light btn red accent-3" href="">Supprimer</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table><br><br>
      <!-- _____________________________Pagination____________________________ -->
          <div class=" center-align">
             {!! $annonces->links(); !!}
          </div>
      <!-- _____________________________Pagination____________________________ -->
    </div>
<!--________________________  END Mes Annonces __________________________-->
<!--________________________ Les Annonces Publié __________________________-->
   <div id="test2" class="col s12 ">
      <table class="striped">
        <thead>
          <tr>
              <th>Titre de l'annonce</th>
              <th>Date</th>
              <th>active</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach($annonces as $annonce)
          <tr>
            <td>{{$annonce->titre_annonce}}</td>
            <td>{{$annonce->created_at}}</td>
            <td>{{$annonce->active}}</td>
            <td>
              <a class="waves-effect waves-light btn blue accent-3" href="">Details</a>
              <a class="waves-effect waves-light btn  teal accent-4" href="">Editer</a>
              <a class="waves-effect waves-light btn red accent-3" href="">Supprimer</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table><br><br>
    </div>
<!--________________________  END Annonces Publié __________________________-->
<!--________________________ Les Annonces Desactivées __________________________-->
    <div id="test4" class="col s12 ">
      <table class="striped">
        <thead>
          <tr>
              <th>Titre de l'annonce</th>
              <th>Date</th>
              <th>active</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach($annonces as $annonce)
          <tr>
            <td>{{$annonce->titre_annonce}}</td>
            <td>{{$annonce->created_at}}</td>
            <td>{{$annonce->active}}</td>
            <td>
              <a class="waves-effect waves-light btn blue accent-3" href="">Details</a>
              <a class="waves-effect waves-light btn  teal accent-4" href="">Editer</a>
              <a class="waves-effect waves-light btn red accent-3" href="">Supprimer</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table><br><br>
    </div>
<!--________________________  END Annonces Desactivées __________________________-->

</div>
</div>
@endsection
