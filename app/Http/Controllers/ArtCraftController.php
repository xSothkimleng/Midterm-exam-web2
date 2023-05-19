<?php

namespace App\Http\Controllers;
use App\Models\ArtCraft;
use Illuminate\Http\Request;

class ArtCraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artCraft = ArtCraft::all();
        return view ('form.index')->with('artCraft', $artCraft);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $input = $request->all();
        ArtCraft::create($input);
        return redirect('/form')->with('flash_message', 'DATA Addedd!');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view('form.edit',[
            'item'=> ArtCraft::findOrFail($id)
        ]);
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
        $artCraft = ArtCraft::find($id);
        $input = $request->all();
        $artCraft->update($input);
        return redirect('/form')->with('flash_message', 'Contact Updated!');  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ArtCraft::destroy($id);
        return redirect('/form')->with('flash_message', 'Contact deleted!');  
    }
}
