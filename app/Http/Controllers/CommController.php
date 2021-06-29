<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $com = comms::pagination(10);
        return commResource::collection($com);
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
        $com = new Comm();
        $com->txtNAME->$request->txtNAME;
        $com->txtEMAIL->$request->txtEMAIL;
        $com->txtPHONE->$request->txtPHONE;
        $com->txtMESSAGE->$request->txtMESSAGE;

        if ($com->save()) {
            return new CommResource($avis);
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
        $com=Comms::findOrFail($id);
        return new CommResource($com);
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
        $com=Comms::findOrFail($id);
        $com->txtNAME->$request->txtNAME;
        $com->txtEMAIL->$request->txtEMAIL;
        $com->txtPHONE->$request->txtPHONE;
        $com->txtMESSAGE->$request->txtMESSAGE;

        if ($com->save()) {
            return new CommResource($avis);
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
        $com = $com=Comms::findOrFail($id);
        if ($com->delete()) {
            return new CommResource($com); 
        }
    }
}
