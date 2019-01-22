<?php

namespace App\Http\Controllers;

use App\Fares;
use Illuminate\Http\Request;

class FaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $fare =  Fares::all();

        return view('showallfares')->with('fa',$fare);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('addfare');
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
         $fare = new Fares;
       $fare->departure= $request->departure;
       $fare->destination= $request->destination;
       $fare->price= $request->price;
       $fare->save();
     return redirect('/addfare');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fares  $fares
     * @return \Illuminate\Http\Response
     */
    public function show($id)                      
    {
        //
        return Fares::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fares  $fares
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $fares = Fares::find($id);
       return view('editfare',compact('fares','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fares  $fares
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $fare = Fares::find($id);
        $fare->departure= $request->get('departure');
        $fare->destination = $request->get('destination');
       $fare->price= $request->get('price');
         $fare->save();

         return redirect('/');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fares  $fares
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fares $id)
    {
        //
     $fare = Fares::findOrFail($id);
     $article->delete();

    }
}
