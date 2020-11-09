<?php

namespace App\Http\Controllers;

use App\shose;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class shosescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('prodact.shose.index')->with('shoses', shose::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prodact.shose.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shose = shose::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'image' => $request['image']->store('images', 'public'),
        ]);
        return redirect(route('shoses.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(shose $shose)
    {

        return view('prodact.shose.show')->with('shose', $shose);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(shose $shose)
    {
        return view('prodact.shose.edit')->with('shose', $shose);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $shose)
    {


        $singleshose = shose::findOrFail($shose);

        $singleshose ->update([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'image' => $request['image']->store('images', 'public'),
        ]);
        return redirect(route('shoses.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($shose)
    {
        $singleshose = shose::findOrFail($shose);
        $singleshose->delete();
        return redirect(route('shoses.index'));
    }
}
