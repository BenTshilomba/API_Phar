<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avis = Avis::paginate(10);
        return AvisResource::collection($avis);
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
        $avis = new Avis();
        $avis -> IDENTIFIANT ->$request ->IDENTIFIANT;
        $avis -> HOPITAL ->$request ->HOPITAL;
        $avis -> PROVINCE->$request ->PROVINCE;
        $avis -> DATE_SEND->$request ->DATE_SEN;
        $avis -> TIME_AVIS->$request ->TIME_AVIS;
        $avis -> AVIS->$request->AVIS;
        $avis -> CODEP->$request->CODEP;
        $avis -> TEL->$request->TEL;
        $avis -> CODE_AVIS->$request->CODE_AVIS;
        $avis -> PAYS->$request->PAYS;
        $avis -> FONCTION->$request->FONCTION;

        if ($avis->save()) {
            return new AvisResource($avis);
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
        $avis = Avis::findOrFail($id);
        return new AvisResource($ref);
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
        $avis = Avis::findOrFail($id);
        $avis -> IDENTIFIANT ->$request ->IDENTIFIANT;
        $avis -> HOPITAL ->$request ->HOPITAL;
        $avis -> PROVINCE->$request ->PROVINCE;
        $avis -> DATE_SEND->$request ->DATE_SEN;
        $avis -> TIME_AVIS->$request ->TIME_AVIS;
        $avis -> AVIS->$request->AVIS;
        $avis -> CODEP->$request->CODEP;
        $avis -> TEL->$request->TEL;
        $avis -> CODE_AVIS->$request->CODE_AVIS;
        $avis -> PAYS->$request->PAYS;
        $avis -> FONCTION->$request->FONCTION;

        if ($avis->save()) {
            return new AvisResource($avis);
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
        $avis = Avis::findOrFail($id);
        if ($avis->delete()) {

            return new AvisResource($avis);
        }
    }
}
