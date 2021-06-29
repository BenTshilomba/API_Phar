<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ref = reference::paginate(10);
        return PostResource::collection($ref);
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
        $ref = new Reference();
        $ref -> TITRE = $request -> TITRE;
        $ref -> TYPE = $request -> TYPE;

        if ($ref->save()) {

            return new ReferenceResource($ref);
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
        $ref = Reference::findOrFail($id);
        return new ReferenceResource($ref);
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
        $ref = Reference::findOrFail($id);
        $ref -> TITRE = $request ->TITRE;
        $ref -> TYPE = $request ->TYPE;

        if ($ref -> save()) {
            return new ReferenceResource($ref);
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
        $ref = Reference::findOrFail($id);
        if ($ref->delete()) {

            return new ReferenceResource($ref);
        }
    }
}
