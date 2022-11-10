<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PharIo\Manifest\Email;
use App\Models\Cantidate;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $candidate = new Candidate;
        $candidate->name=$request->name;
        $candidate->last_name=$request->last_name;
        $candidate->cell=$request->cell;
        $candidate->email=$request->email;
        $candidate->ide=$request->ide;
        $candidate->type_ide=$request->type_ide;
        $candidate->position=$request->ide;
        $candidate->experience=$request->experience;
        $candidate->cv=$request->cv;
        $candidate->status= 1;
        $candidate->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
