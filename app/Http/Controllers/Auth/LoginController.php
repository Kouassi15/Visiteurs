<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function authentifications(Request $request)
    {
        $input = $request->all();
    
        // Valider les champs
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Tenter de connecter l'utilisateur
        if (Auth::attempt(['email' => $input['email'], 'password' => $input['password']])) {
            // Si l'utilisateur est authentifié
            if (Auth::check()) {
                // Récupérer l'utilisateur authentifié
                $user = Auth::user();
    
                // Vérifier si l'utilisateur a le rôle 'client'
                if ($user->role && $user->role->name == 'affaire_social') {
                    return redirect()->route('dashboard.admin.homeaffairesocial');
                }
                // Vérifier si l'utilisateur a le rôle 'admin'
                elseif ($user->role && $user->role->name == 'admin') {
                    return redirect()->route('dashboard'); 
                }

                elseif ($user->role && $user->role->name == 'jepcma') {
                    return redirect()->route('dashboard.jepcma'); 
                }
                // Si l'utilisateur n'a pas le bon rôle
                else {
                    return redirect()->back()->with('Error', 'Vous n\'avez pas accès à cette zone.');
                }
            }
        }
    
        // Si l'authentification échoue
        return redirect()->back()->with('Error', 'Adresse email ou mot de passe erroné');
    }
}
