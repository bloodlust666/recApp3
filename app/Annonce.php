<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Annonce extends Model
{
    //
  /*  public function scopeSearsh ($query,$search)
    {
        return $query->where ('titre_annonce','like',"%$search%");
       return $query->where ('titre_annonce','like','%' .$search. '%')
             ->orWhere('description_poste','like','%' .$search. '%');
    }*/
/**************************** Algolia API ***********************************/
    use Searchable;

    public function searchableAs()
    {
        return 'annonces';
    }

}
