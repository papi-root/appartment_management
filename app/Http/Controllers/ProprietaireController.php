<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datatables\ProprietairesDataTable; 
use App\Models\Proprietaire; 
use App\Http\Requests\ProprietaireStoreRequest; 
use Session; 

class ProprietaireController extends Controller
{
    //
    
    public function index(ProprietairesDataTable $dataTable)
    {
        return $dataTable->render('proprietaires.index');
    } 

    public function create()
    {
        return view('proprietaires.create'); 
    }

    public function store(ProprietaireStoreRequest $request)
    {
        Proprietaire::create([
            'nom_complet' => $request->nom_complet,
            'email' => $request->email,
            'telephone' => $request->telephone, 
            'adresse' => $request->adresse,
            'nic' => $request->nic,
            'ninea' => $request->ninea, 
            'type' => $request->type, 
            'note' => $request->note, 
            'banque' => $request->banque,
            'compte_banquaire' => $request->compte_banuquaire, 
            'statut' => $request->statut,
        ]); 

        Session::flash('success', 'Proprietaire ajoute avec succee !'); 
        return redirect()->route('proprietaires.index'); 
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(ProprietaireUpdateRequest $request, $id)
    {

    }

    public function destroy(Request $request)
    {

    }

    
    /*
    public function index()
    {
        return 'sandjkhsdk'; 
    }
    */
}
