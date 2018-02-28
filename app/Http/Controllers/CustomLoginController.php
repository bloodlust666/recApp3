<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use Auth;

class CustomLoginController extends Controller
{
    // _____________________________login____________________________________
    public function showLoginForm()
    {
        return view('custom.login');
    }
   
    public function login(Request $request)
    {
        $this->validate($request ,[
           'email' => 'required|email|max:255',
            'password' => 'required|max:255',
        ]);
        /*if ( Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            {
                //return 'logged successfuly';
                return redirect('/espaceRecruteur');
            }
            return 'Oooops something  wrong happens';*/

    if ( Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {   
            
            if ( Auth::attempt(['email' => $request->email, 'password' => $request->password,'recruteurType'=>1]))
                {
                  return redirect('/espaceRecruteur');  
                }
            if ( Auth::attempt(['email' => $request->email, 'password' => $request->password,'candidatType'=>1]))
                {
                  return redirect('/espaceCandidat'); 
                }
            else 
            {
                  return redirect('/espaceAdmin');     
            }
        
         }
      //return redirect('/custom-login');
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
