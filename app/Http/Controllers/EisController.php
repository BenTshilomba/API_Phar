<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ei=eis::paginate(10);
        return EiResource::collection($ei);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ei = new Ei();
        $ei->NC->$request->NC;
        $ei->DCI->$request->DCI;
        $ei->CT->$request->CT;
        $ei->FIRME->$request->FIRME;
        $ei->DETAILS_EI->$request->DETAILS_EI;
        $ei->QUANTITE->$request->QUANTITE;
        $ei->ATTITUDE->$request->ATTITUDE;
        $ei->URGENCE->$request->URGENCE;
        $ei->CATEGORIE->$request->CATEGORIE;
        $ei->ADRESSE->$request->ADRESSE;
        $ei->DATE->$request->DATE;
        $ei->IDENTIFIANT->$request->IDENTIFIANT;
        $ei->TEL->$request->IDENTIFIANT;
        $ei->HOPITAL->$request->HOPITAL;
        $ei->CODE_EI->$request->CODE_EI;

        if ($ei->save()) {
            return new EiResource($ei);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ei = Eis::findOrFail($id);
        return new EiResource($ei);
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
        $ei = Eis::findOrFail($id);
        $ei->NC->$request->NC;
        $ei->DCI->$request->DCI;
        $ei->CT->$request->CT;
        $ei->FIRME->$request->FIRME;
        $ei->DETAILS_EI->$request->DETAILS_EI;
        $ei->QUANTITE->$request->QUANTITE;
        $ei->ATTITUDE->$request->ATTITUDE;
        $ei->URGENCE->$request->URGENCE;
        $ei->CATEGORIE->$request->CATEGORIE;
        $ei->ADRESSE->$request->ADRESSE;
        $ei->DATE->$request->DATE;
        $ei->IDENTIFIANT->$request->IDENTIFIANT;
        $ei->TEL->$request->IDENTIFIANT;
        $ei->HOPITAL->$request->HOPITAL;
        $ei->CODE_EI->$request->CODE_EI;

        if ($ei->save()) {
            return new EiResource($ei);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ei = Eis::findOrFail($id);
        if ($ei->delete()) {

            return new EiResource($ei);
        }
    }
}
