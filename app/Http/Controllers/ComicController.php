<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Comic;
use App\Models\Collection;
use App\Models\Tag;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::get()->load(['collection', 'tag']);

        return response()->json($comics);
    }

    public function randomComic()
    {
        $number = Comic::get()->count();
        $random = rand(1, $number);
        $comic = Comic::where('id', $random)->first()->load(['collection', 'tag']);
        return response()->json($comic);
    }

    public function create()
    {
        return Inertia::render('Comic/CreateComic', ['comics' => Comic::all(), 'tags' => Tag::all(), 'collections' => Collection::all()]);
    }

    public function store(Request $request)
    {
        try{
            $comic = $request->validate([
                'tag_id' => 'required',
                'collection_id' => 'required',
                'name' => 'required|max:250|string',
                'author' => 'required|max:250|string',
                'price' => 'required|regex:/^\d+(.\d{1,2})?$/',
                'description' => 'required|max:250|string',
                'publisher' => 'required|max:250|string',
                'type' => 'required|max:250|string',
                'edition' => 'required|max:250|string',
                'image' => 'required|max:250',
                'state' => 'required|max:1|numeric',
            ]);

            $comic = Comic::create($comic);
            return response()->json($comic);
        }

        catch(Exception $ex){
            $error = array(['error' => 'No se ha podido completar: '.$ex]);
            return response()->json($error);
        }
    }

    public function show($id)
    {
        $comic = Comic::where('id', $id)->get()->load(['collection', 'tag']);

        return response()->json($comic);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        try{
            $data = $request->validate([
                'tag_id' => 'required',
                'collection_id' => 'required',
                'name' => 'required|max:250|string',
                'author' => 'required|max:250|string',
                'price' => 'required|regex:/^\d+(.\d{1,2})?$/',
                'description' => 'required|max:250|string',
                'publisher' => 'required|max:250|string',
                'type' => 'required|max:250|string',
                'edition' => 'required|max:250|string',
                'image' => 'required|max:250',
                'state' => 'required|max:1|numeric',
            ]);

            $comic = Comic::where(['id' => $id])->update($data);
            return response()->json($data);
        }

        catch(Exception $ex){
            $error = array(['error' => 'No se ha podido completar: '.$ex]);
            return response()->json($error);
        }
    }

    public function destroy($id)
    {
        $comic = Comic::find($id);

        $comic->delete();
    }
}
