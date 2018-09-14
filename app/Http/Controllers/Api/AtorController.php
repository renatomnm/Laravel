<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ator;

class AtorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ator =  Ator::all();
      return response($ator,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'first_name' => 'required',
          'last_name' => 'required',
          'rating' => 'required|numeric|between:1,10',
          'favorite_movie_id' => 'required|numeric'
        ]);

       $ator = Ator::create([
         'first_name'=> $request->input('first_name'),
         'last_name'=>$request->input('last_name'),
         'rating'=> $request->input('rating'),
         'favorite_movie_id' => $request->input('favorite_movie_id')
       ]);

       $ator->save();
       return response()->json($ator,200);
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
