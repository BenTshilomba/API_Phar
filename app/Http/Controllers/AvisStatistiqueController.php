<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvisStatistiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avisstat=avis_statistiques::paginate(10);
        return AvisStatistiqueResource::collection($avisstat);
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
        $avisstat = new Avisstat();
        $avisstat->TEL->$request ->TEL;
        $avisstat->IDENTIFIANT->$request ->IDENTIFIANT;
        $avisstat->CODE_AVIS->$request ->CODE_AVIS;
        $avisstat->JAIME->$request ->JAIME;
        $avisstat->ID_CODE->$request ->ID_CODE;

        if ($avisstat->save()) {
            return new AvisStatistiqueResource($avisstat);
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
        $avisstat = avis_statistiques::findOrFail($id);
        return  new AvisStatistiqueResource($avisstat);
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
        $avisstat = avis_statistiques::findOrFail($id);
        $avisstat->TEL->$request ->TEL;
        $avisstat->IDENTIFIANT->$request ->IDENTIFIANT;
        $avisstat->CODE_AVIS->$request ->CODE_AVIS;
        $avisstat->JAIME->$request ->JAIME;
        $avisstat->ID_CODE->$request ->ID_CODE;

        if ($avisstat->save()) {
            return new AvisStatistiqueResource($avisstat);
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
        $avisstat = avis_statistiques::findOrFail($id);
        if ($avisstat->delete()) {

            return new AvisStatistiqueResource($avisstat);
        }
    }
}
