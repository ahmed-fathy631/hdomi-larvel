<?php

namespace App\Http\Controllers;

use App\shirt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class shirtscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *  @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('prodact.shirt.index')->with('shirts', shirt::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     *  @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prodact.shirt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $shirt = shirt::create([
           'name' => $request['name'],
           'description' => $request['description'],
           'price' => $request['price'],
            'image' => $request['image']->store('images', 'public'),
       ]);
          return redirect(route('shirts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(shirt $shirt)
    {

        return view('prodact.shirt.show')->with('shirt', $shirt);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(shirt $shirt)
    {
        return view('prodact.shirt.edit')->with('shirt', $shirt);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $shirt)
    {


        $singleshirt = shirt::findOrFail($shirt);

        $singleshirt ->update([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'image' => $request['image']->store('images', 'public'),
        ]);
        return redirect(route('shirts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($shirt)
    {
        $singleshirt = shirt::findOrFail($shirt);
        $singleshirt->delete();
        return redirect(route('shirts.index'));
    }

}
