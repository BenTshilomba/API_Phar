<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdonnanceProtocoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordopro = ordonnance_protocoles::paginate(10);
        return OrdonnanceProtocoleResource::collection($ordopro);
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
        $ordopro = new OrdoPros();
        $ordopro -> CODEP ->$request ->CODEP;
        $ordopro -> NC ->$request ->NC;
        $ordopro -> DCI->$request ->DCI;
        $ordopro -> FG->$request ->FG;
        $ordopro -> DOSE->$request ->DOSE;
        $ordopro -> DT->$request->DT;
        $ordopro -> POSOLOGIE->$request->POSOLOGIE;
        $ordopro -> DURE->$request->DURE;
        $ordopro -> NOTE->$request->NOTE;
        $ordopro -> ID_CODE->$request->ID_CODE;

        if ($ordopro->save()) {
            return new OrdonnanceProtocoleResource($ordopro);
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
        $ordopro = ordonnance_protocoles::findOrFail($id);
        return new OrdonnanceProtocoleResource($ordopro);
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
        $ordopro = ordonnance_protocoles::findOrFail($id);
        $ordopro -> CODEP ->$request ->CODEP;
        $ordopro -> NC ->$request ->NC;
        $ordopro -> DCI->$request ->DCI;
        $ordopro -> FG->$request ->FG;
        $ordopro -> DOSE->$request ->DOSE;
        $ordopro -> DT->$request->DT;
        $ordopro -> POSOLOGIE->$request->POSOLOGIE;
        $ordopro -> DURE->$request->DURE;
        $ordopro -> NOTE->$request->NOTE;
        $ordopro -> ID_CODE->$request->ID_CODE;

        if ($ordopro->save()) {
            return new OrdonnanceProtocoleResource($ordopro);
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
        $ordopro = ordonnance_protocoles::findOrFail($id);
        if ($ordopro->delete()) {

            return new OrdonnanceProtocoleResource($ordopro);
        }
    }
}
