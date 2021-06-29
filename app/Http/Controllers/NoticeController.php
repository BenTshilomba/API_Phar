<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Notice = Notices::paginate(10);
        return NoticeResource::collection($Notice);
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
        $Notice = new Notices();
        $Notice -> CODE_NC ->$request ->CODE_NC;
        $Notice -> NC ->$request ->NC;
        $Notice -> FG->$request ->FG;
        $Notice -> DCI->$request ->DCI;
        $Notice -> CT->$request ->CT;
        $Notice -> INDICATION->$request->INDICATION;
        $Notice -> CI->$request->CI;
        $Notice -> DOSAGE->$request->DOSAGE;
        $Notice -> EI->$request->EI;
        $Notice -> IM->$request->IM;
        $Notice -> PEC->$request->PEC;
        $Notice -> COMPOSITION ->$request ->COMPOSITION;
        $Notice -> FIRME ->$request ->FIRME;
        $Notice -> COUT->$request ->COUT;
        $Notice -> LIEU->$request ->LIEU;
        $Notice -> MA->$request ->MA;
        $Notice -> PRECAUTION->$request->PRECAUTION;
        $Notice -> ES->$request->ES;
        $Notice -> AUTRES->$request->AUTRES;
        $Notice -> NOUVEAU->$request->NOUVEAU;
        $Notice -> PAYANT->$request->PAYANT;
        $Notice -> VALIDATION->$request->VALIDATION;

        if ($Notice->save()) {
            return new NoticeResource($Notice);
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
        $Notice = Notices::findOrFail($id);
        return new NoticeResource($Notice);
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
        $Notice = Notices::findOrFail($id);
        $Notice -> CODE_NC ->$request ->CODE_NC;
        $Notice -> NC ->$request ->NC;
        $Notice -> FG->$request ->FG;
        $Notice -> DCI->$request ->DCI;
        $Notice -> CT->$request ->CT;
        $Notice -> INDICATION->$request->INDICATION;
        $Notice -> CI->$request->CI;
        $Notice -> DOSAGE->$request->DOSAGE;
        $Notice -> EI->$request->EI;
        $Notice -> IM->$request->IM;
        $Notice -> PEC->$request->PEC;
        $Notice -> COMPOSITION ->$request ->COMPOSITION;
        $Notice -> FIRME ->$request ->FIRME;
        $Notice -> COUT->$request ->COUT;
        $Notice -> LIEU->$request ->LIEU;
        $Notice -> MA->$request ->MA;
        $Notice -> PRECAUTION->$request->PRECAUTION;
        $Notice -> ES->$request->ES;
        $Notice -> AUTRES->$request->AUTRES;
        $Notice -> NOUVEAU->$request->NOUVEAU;
        $Notice -> PAYANT->$request->PAYANT;
        $Notice -> VALIDATION->$request->VALIDATION;

        if ($Notice->save()) {
            return new NoticeResource($Notice);
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
        $Notice = Notices::findOrFail($id);
        if ($Notice->delete()) {

            return new NoticeResource($Notice);
        }
    }
}
