<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Bill;

class BillController extends Controller
{
    public function index()
    {
        $bills = Bill::with(['client', 'comic.collection'])->get();

        return response()->json($bills);
    }

    public function clientBills($client_id){
        $bills = Bill::with(['client', 'comic.collection'])->where('client_id', $client_id)->get();

        return response()->json($bills);
    }

    public function billClient($client_id){
        $bills = Bill::with(['client', 'comic.collection'])->where('client_id', $client_id)->get();

        return Inertia::render('Bill/ClientBills', ['bills' => $bills]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try{
            $bill = $request->validate([
                'client_id' => 'required',
                'comic_id' => 'required',
                'state' => 'required',
            ]);

            $bill = Bill::create($bill);
            return response()->json($bill);
        }

        catch(Exception $ex){
            $error = array(['error' => 'No se ha podido completar: '.$ex]);
            return response()->json($error);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
