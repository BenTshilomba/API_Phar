<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $im = ims::paginate(10);
        return ImResource::collection($im);
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
        $im = new Ims();
        $im -> DCI1 ->$request ->DCI1;
        $im -> DCI2 ->$request ->DCI2;
        $im -> IM->$request ->IM;
        $im -> NIVEAU_C->$request ->NIVEAU_C;

        if ($im->save()) {
            return new ImResource($im);
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
        $im = Ims::findOrFail($id);
        return new ImResource($im);
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
        $im = Ims::findOrFail($id);
        $im -> DCI1 ->$request ->DCI1;
        $im -> DCI2 ->$request ->DCI2;
        $im -> IM->$request ->IM;
        $im -> NIVEAU_C->$request ->NIVEAU_C;

        if ($im->save()) {
            return new ImResource($im);
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
        $im = Ims::findOrFail($id);
        if ($im->delete()) {

            return new ImResource($avis);
        }
    }
}
