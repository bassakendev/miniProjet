<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConnexionRequests;
use App\Models\monbeatmakers;
use Illuminate\View\View;

class ConnexionController extends Controller
{
    public function create(): view
    {
        return view('connexion');
    }
    public function store(ConnexionRequests $request)
    {
        $user = monbeatmakers::where('email', "$request->email")->first();



        if ($user) {

            if ($user->password == $request->password) {

                session(['coordonnes' => $user]);
                return view('profil');
            } else {

                return back()->with('info', 'Mot de pass incorrecte');
            }
        } else {

            return back()->with('info', 'Utilisateur non existant');
        }
    }
}
