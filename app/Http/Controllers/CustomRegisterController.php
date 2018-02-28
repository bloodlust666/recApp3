<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Entreprise;
Use Auth;

class CustomRegisterController extends Controller
{



//__________________________________________ RegisteR _______________________________________________
    public function showRegisterFormR()
    {
        return view('custom.register');
    }
    public function registerR(Request $request)
    {
        // dd($request->all());

        $this->validation($request);
        //$request['password']=bcrypt($request->password);
        // $user = User::create($request->all());
        $user = new User;
        //$annonce->titre_annonce = $request ->input('titre_annonce');
        //$request['password']=bcrypt($request->password);
        $user->password = $request  ['password'] = bcrypt($request -> password);
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->tel1 = $request->tel1;
        $user->tel2 = $request->tel2;
        $user->fax = $request->fax;
        $user->email = $request->email;
        $user->civilite = $request->civilite;
        $user->candidatType = $request->candidatType;
        $user->recruteurType = $request->recruteurType;
        $user->save();

        //dd($user);
        return redirect('/custom-login');
        //return $request->all();
    }
    /*protected function create(array $data)
        {
            $user = User::create([
                //'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);

            $userId = $user->id;
            Shop::create([... use $userId here ...]);
            return $user;
        }*/
        
    /*public function createR(Request $request)
    {    
         $this->validation($request);                    
         User::create([
            'name' => $request['name'],
            'lastname' => $request['lastname'],
            'tel1' => $request['tel1'],
            'tel2' => $request['tel2'],
            'fax' => $request['fax'],
            'civilite' => $request['civilite'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
         
    }*/

          public function validation($request)
        {
            return $this->validate($request ,[
                'name' => 'required|max:255',
                'lastname' => 'required|max:255',
                'tel1' => 'required|max:255',
                'email' => 'required|email|unique:users|max:255',
                'password' => 'required|confirmed|min:6',
                //'candidatType' => 'required|max:255',

            ]);
        }
}
