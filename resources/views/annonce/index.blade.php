@extends('layouts.annonce')

@section('cartTitle')
@endsection

@section('tableContent')

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
              <form action="{{url('annonces/'.$annonce->id)}}" method="post">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
                 <a class="waves-effect waves-light btn blue accent-3" href="">Details</a>
                 <a class="waves-effect waves-light btn  teal accent-4"
                    href="{{ url('annonces/'.$annonce->id.'/edit')}}">Editer</a>
                <button class="waves-effect waves-light btn red accent-3" type="submit">Supprimer</button>
              </form>
              
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

@endsection
 
