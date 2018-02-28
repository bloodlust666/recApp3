<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;



class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //,'lastname','tel1','tel2','fax','nomEntreprise','ville','adresse','codePostal','siteWeb','descriptionE'
    protected $fillable = [
        'name','email','password','lastname','tel1','tel2','fax'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function recruteurType($recruteurType)
    {
        return $this->recruteurType == $recruteurType;
    }


    public function is_recruteur()
       {
        //if($this -> userType='recruteur')

        if($this-> recruteurType)

           {
            return true ;
           }

           return false ;
       }

    public function is_candidat()

       {
        //if($this -> userType='recruteur')
        
        if($this-> candidatType)

           {
            return true ;
           }

           return false ;
       }
}
