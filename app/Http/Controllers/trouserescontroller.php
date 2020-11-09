<?php

namespace App\Http\Controllers;

use App\trousere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class trouserescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('prodact.pant.index')->with('trouseres',trousere::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prodact.pant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trousere = trousere::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'image' => $request['image']->store('images', 'public'),
        ]);
        return redirect(route('trouseres.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(trousere $trousere)
    {
        return view('prodact.pant.show')->with('trousere', $trousere);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(trousere $trousere)
    {
        return view('prodact.pant.edit')->with('trousere', $trousere);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $trousere)
    {
        $singletrousere = trousere::findOrFail($trousere);

        $singletrousere ->update([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'image' => $request['image']->store('images', 'public'),
        ]);
        return redirect(route('trouseres.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($trousere)
    {
        $singletrousere = trousere::findOrFail($trousere);
        $singletrousere->delete();
        return redirect(route('trouseres.index'));
    }
}
