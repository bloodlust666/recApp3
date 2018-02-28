<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;

class AnnonceController extends Controller
{

  /*public function __construct()
  {
      $this->middleware('auth');
  }*/

	// les methodes //

    // lister les annonce

    public function index(){
         $listAnnonces = Annonce::orderBy('id','desc')->paginate(5);
        // return view ('annonce.index',['annonces' => $listAnnonces]);
        return view ('annonce.index')->withAnnonces($listAnnonces);
    }
    // Afficher le formulaire de creation des annonce

    public function create(){
        return view ('annonce.create');
    }
    // Enregistrer les annonce
    public function store(Request $request){
    	//return $request->all();

    	$annonce =new Annonce();
    	$annonce->titre_annonce = $request ->input('titre_annonce');
    	$annonce->description_poste = $request ->input('titre_annonce');
    	$annonce->description_profil = $request ->input('description_profil');
    	$annonce->emploi_base_ville = $request ->input('emploi_base_ville');
    	$annonce->niveau_experience = $request ->input('niveau_experience');
        $annonce->type_contrat = $request ->input('type_contrat');
        $annonce->niveau_etude = $request ->input('niveau_etude');
        $annonce->langue_exigees = $request ->input('langue_exigees');
        //dd($request->all());
    	$annonce->save();
        return redirect('annonces/');

    }
    // permet  de récuperer une annonce puis le mettre dans une formulaire
    public function edit($id){

        $annonce = Annonce::find($id);
        return view('annonce.edit',['annonce'=> $annonce]);

    }
    // permet  de modifier une annonce
    public function update(Request $request,$id){

        $annonce = Annonce::find($id);

        $annonce->titre_annonce = $request ->input('titre_annonce');
        $annonce->description_poste = $request ->input('titre_annonce');
        $annonce->description_profil = $request ->input('description_profil');
        $annonce->emploi_base_ville = $request ->input('emploi_base_ville');
        $annonce->niveau_experience = $request ->input('niveau_experience');
        $annonce->type_contrat = $request ->input('type_contrat');
        $annonce->niveau_etude = $request ->input('niveau_etude');
        $annonce->langue_exigees = $request ->input('langue_exigees');
        $annonce->save();

        return redirect ('annonces/');

    }
    // permet  de supprimer une annonce
    public function destroy(){

    }
}
