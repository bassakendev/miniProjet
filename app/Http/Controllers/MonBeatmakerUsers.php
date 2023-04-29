<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewUsersRequest;
use Illuminate\View\View;
use Illuminate\Http\Request;

class MonBeatmakerUsers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('senregistrer');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view('senregistrer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewUsersRequest $request): view
    {
        $coordonnes = new \App\Models\monbeatmakers;

        $coordonnes->nom = $request->nom;
        $coordonnes->prenom = $request->prenom;
        $coordonnes->email = $request->email;
        $coordonnes->ville = $request->ville;
        $coordonnes->pays = $request->pays;
        $coordonnes->tel = $request->tel;
        $coordonnes->password = $request->password1;

        $coordonnes->save();

        session(['coordonnes' => $coordonnes]);

        return view('profil');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
