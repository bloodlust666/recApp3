<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Cv;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('cv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $cv =new Cv();

     
       $cv->Situation_actuelle = $request ->input('Situation_actuelle');   
       $cv->Secteur_activité = $request ->input('Secteur_activité');
       $cv->Salaire_souhaité = $request ->input('Salaire_souhaité');
       $cv->Niveau_de_formation = $request ->input('Niveau_de_formation');
       $cv->Disponibilité = $request ->input('Disponibilité');
       $cv->Expérience = $request ->input('Expérience');
       $cv->Date_deb_Formation = $request ->input('Date_deb_Formation');
       $cv->Date_fin_Formation = $request ->input('Date_fin_Formation');
       $cv->Etablissement = $request ->input('Etablissement');
       $cv->Diplome = $request ->input('Diplome');
       $cv->Description_Formation = $request ->input('Description_Formation');
       $cv->Date_Deb_Experience = $request ->input('Date_Deb_Experience');
       $cv->Date_Fin_Experience = $request ->input('Date_Fin_Experience');
       $cv->Entreprise = $request ->input('Entreprise');
       $cv->Intitulé_poste = $request ->input('Intitulé_poste');
       $cv->Secteur_activité = $request ->input('Secteur_activité_exp');
       $cv->Fonction = $request ->input('Fonction');
       $cv->Type_de_contrat = $request ->input('Type_de_contrat');
       $cv->Ville = $request ->input('Ville');
       $cv->Salaire = $request ->input('Salaire');
       $cv->Description_exp = $request ->input('Description_exp');
       $cv->Arab = $request ->input('Arab');
       $cv->Français = $request ->input('Français');
       $cv->Anglais = $request ->input('Anglais');
       $cv->Autres = $request ->input('Autres');



       $cv->save();
        //dd($request->all());
        //return redirect('Cvs/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
