<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entreprise;
use Auth;
use Illuminate\Http\UploadedFile;

class EntrepriseController extends Controller
{

  /*public function __construct()
  {
      $this->middleware('auth');
  }*/

// Afficher le formulaire de creation des enreprise
    public function showEnrepriseForm(){
        return view ('recruteur.storeEntreprise');
    }
// Enregistrer les annonce

public function store(Request $request){
        //return $request->all();

        /*Entreprise::create([
            'nomEntreprise' => request('nomEntreprise'),
            'ville' => request('ville'),
            'adresse' => request('adresse')
            ...
        ]);*/

        $this->validate(request (),[
                'nomEntreprise' => 'required|max:255',
                'ville' => 'required|max:255',
                'adresse' => 'required|max:255',
                'siteWeb' => 'required|max:255',
                'pays' => 'required|max:255',
                'descriptionE' => 'required|max:255',
                'Elogo' => 'image|mimes:jpg,jpeg,gif,png|max:2048'
            ]);


    //$img_name = time() . '.' . $request->url->getClientOriginalExtension();

        $entreprise =new Entreprise();
        $entreprise->user_id = Auth::user()->id;
        //$entreprise->Elogo = $img_name;
        $entreprise->nomEntreprise = $request ->input('nomEntreprise');
        $entreprise->ville = $request ->input('ville');
        $entreprise->adresse = $request ->input('adresse');
        $entreprise->codePostal = $request ->input('codePostal');
        $entreprise->siteWeb = $request ->input('siteWeb');
        $entreprise->descriptionE = $request ->input('descriptionE');
        $entreprise->pays = $request ->input('pays');
        //$entreprise->activiteE = $request->input('activiteE');
        $activiteE = array('AMEUBLEMENT_DECORATION', 'CENTRES_APPEL', 'EDITION_IMPRIMERIE', 'METALLURGIE_SIDÉRURGIE', 'PAPIER_BOIS_PLASTIQUE', 'QUALITE_METHODES','EDUCATION_FORMATION','IMMOBILIER_ARCHITECTURE','INFORMATIQUE_SSII_INTERNET','INGENIERIE_ETUDES_DEVELOPPEMENT','TELECOM','AUTOMOBILE_TRANSPORT','DISTRIBUTION_VENTE_COMMERCE','SANTE_PHARMACIE_HOPITAUX','SERVICES_AEROPORTUAIRES_MARITIMES','SERVICES_COLLECTIFS_SOCIAUX','MARKETING_COMMUNICATION_MEDIAS','NETTOYAGE_SECURITE_SURVEILLANCE','SPORT_ACTION_CULTURELLE_SOCIALE','SERVICES_AUTRES');
// ** Image upload Entreprise LOGO **
        if($request->hasFile('Elogo')){
             $entreprise->Elogo = $request->Elogo->store('Elogo');
            }
        //$entreprise->Elogo =$path;
         //$img_name = time() . '.' . $request->url->getClientOriginalExtension();
        //$request->url->move(public_path('Elogo'),$img_name);

        $entreprise->save();
        //dd($activiteE);
        //return redirect('/...')

 }
}
