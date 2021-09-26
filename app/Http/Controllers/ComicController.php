<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comic = Comic::get();

        return response()->json($comic);
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
        try{
            $data = $request->validate([
                'name' => 'required|alpha_num|max:250',
                'author' => 'required|alpha_num|max:250',
                'price' => 'required|max:250',
                'description' => 'required|alpha_num|max:250',
                'publisher' => 'required|alpha_num|max:250',
                'type' => 'required|alpha_num|max:250',
                'edition' => 'required|alpha_num|max:250',
                'image' => 'required|alpha_num|max:250',
                'state' => 'required|alpha_num|max:1',
            ]);

            $comic = Comic::create($data);
            return response()->json($comic);
        }

        catch(Exception $ex){
            $error = array(['error' => 'No se ha podido completar: '.$ex]);
            return response()->json($error);
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
        try{
            $data = $request->validate([
                'name' => 'required|alpha_num|max:250',
                'author' => 'required|alpha_num|max:250',
                'price' => 'required|max:250',
                'description' => 'required|alpha_num|max:250',
                'publisher' => 'required|alpha_num|max:250',
                'type' => 'required|alpha_num|max:250',
                'edition' => 'required|alpha_num|max:250',
                'image' => 'required|alpha_num|max:250',
                'state' => 'required|alpha_num|max:1',
            ]);

            $comic = Comic::where(['id' => $id])->update($data);
            return response()->json($comic);
        }

        catch(Exception $ex){
            $error = array(['error' => 'No se ha podido completar: '.$ex]);
            return response()->json($error);
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
        $comic = Comic::find($id);

        $comic->delete();
    }
}
