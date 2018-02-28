<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

      // lister les annonce

      public function index(Request $request){
        $listAnnonces = Annonce::orderBy('id','desc')->paginate(5);
        return view ('accueil')->withAnnonces($listAnnonces);
        }


        /*public function index(){
              $listAnnonces = Annonce::orderBy('id','desc')->paginate(5);
              return view ('accueil')->withAnnonces($listAnnonces);
         }   */

  /***************************** Search Function *******************************************/
        public function search (Request $request){

            //$annonces = Annonce::search($searchKey)->get();
            //return view ('search',compact('annonces'));
            if($request->has('titre_annoncesearch')){
      		          $annonces = Annonce::search($request->titre_annoncesearch)->paginate(5);
      	}else{
      		    $annonces = Annonce::paginate(5);
      	      }
      	    return view('search',compact('annonces'));
         }
 /*public function index(){
         $listAnnonces = Annonce::all();
         return view ('accueil',['annonces' => $listAnnonces]);
    }*/

}
