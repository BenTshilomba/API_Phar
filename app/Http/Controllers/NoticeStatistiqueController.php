<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeStatistiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticestat = notice_statistiques::paginate(10);
        return NoticeStatistiqueResource::collection($noticestat);
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
        $noticestat = new NoticeStatistique();
        $noticestat -> TEL ->$request ->TEL;
        $noticestat -> IDENTIFIANT ->$request ->IDENTIFIANT;
        $noticestat -> CODE_NC->$request ->CODE_NC;
        $noticestat -> NC->$request ->NC;
        $noticestat -> DCI	->$request ->DCI;
        $noticestat -> JAIME->$request->JAIME;
        $noticestat -> VUE->$request->VUE;
        $noticestat -> FAVORIS->$request->FAVORIS;
        $noticestat -> ID_CODE->$request->ID_CODE;

        if ($noticestat->save()) {
            return new NoticeStatistiqueResource($avis);
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
        $noticestat = notice_statistiques::findOrFail($id);
        return new NoticeStatistiqueResource($noticestat);
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
        $noticestat = notice_statistiques::findOrFail($id);
        $noticestat -> TEL ->$request ->TEL;
        $noticestat -> IDENTIFIANT ->$request ->IDENTIFIANT;
        $noticestat -> CODE_NC->$request ->CODE_NC;
        $noticestat -> NC->$request ->NC;
        $noticestat -> DCI	->$request ->DCI;
        $noticestat -> JAIME->$request->JAIME;
        $noticestat -> VUE->$request->VUE;
        $noticestat -> FAVORIS->$request->FAVORIS;
        $noticestat -> ID_CODE->$request->ID_CODE;

        if ($noticestat->save()) {
            return new NoticeStatistiqueResource($avis);
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
        $noticestat = notice_statistiques::findOrFail($id);
        if ($noticestat->delete()) {

            return new NoticeStatistiqueResource($noticestat);
        }
    }
}
