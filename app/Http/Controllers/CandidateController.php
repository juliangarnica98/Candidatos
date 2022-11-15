<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PharIo\Manifest\Email;
use App\Models\Cantidate;
use Illuminate\Support\Facades\Validator;

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
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:25',
            'last_name' => 'required|max:25',
            'cell' => 'required|max:25',
            'email' => 'required|max:25',
            'ide' => 'required|max:25',
            'type_ide' => 'required|max:25',
            'position' => 'required|max:25',
            'experiencie' => 'required|max:25',
        ]);
     
        if ($validator->errors() == null) {
            $candidate = new Cantidate;
            $candidate->name=$request->name;
            $candidate->last_name=$request->last_name;
            $candidate->cell=$request->cell;
            $candidate->email=$request->email;
            $candidate->ide=$request->ide;
            $candidate->type_ide=$request->type_ide;
            $candidate->position=$request->ide;
            $candidate->experiencie=$request->experiencie;
            $candidate->cv="Direccion de hoja de vida";
            $candidate->status= 1;
            $candidate->save();
            return response()->json(['success'=>'Se ha registrado satisfactoriamente']);
        }
     
        return response()->json(['error'=>$validator->errors()->all()]);
        
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
