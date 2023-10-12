<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bien; 

class BienController extends Controller
{
    //
    public function index()
    {

        $biens = Bien::all(); 
        return view('bien.index')->compact('biens'); 
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show($id)
    {

    }

    public function edit(Request $request, $id)
    {
        
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
