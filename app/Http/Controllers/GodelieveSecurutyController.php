<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GodelieveSecurutyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $God = godelieve_securities::pagination(10);
        return GodelieveSecurityResource::collection($God);
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
        $God = new godelieve_securities();
        $God->EXPIRATION->$request->EXPIRATION;
        $God->AVERTISSEMENT->$request->AVERTISSEMENT;
        $God->BLOCAGE->$request->BLOCAGE;
        $God->BLASPHEME->$request->BLASPHEME;

        if ($God->save()) {
            return new GodelieveSecurityResource($God);
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
        $God = godelieve_securities::findOrFail($id);
        return new GodelieveSecurityResource($God);
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
        $God = godelieve_securities::findOrFail($id);
        $God->EXPIRATION->$request->EXPIRATION;
        $God->AVERTISSEMENT->$request->AVERTISSEMENT;
        $God->BLOCAGE->$request->BLOCAGE;
        $God->BLASPHEME->$request->BLASPHEME;

        if ($God->save()) {
            return new GodelieveSecurityResource($God);
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
        $God = godelieve_securities::findOrFail($id);
        if ($God->delete()) {
            return new GodelieveSecurityResource($God);
        }
    }
}
