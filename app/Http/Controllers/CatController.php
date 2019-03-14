<?php

namespace Furbook\Http\Controllers;

use Furbook\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Furbook\Http\Controllers\Controller;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = \Furbook\Cat::all();

        return view('cats.index')
            ->with('cats', $cats);
    }

    public function showByBreed($name) {
        $breed = \Furbook\Breed::with('cats')
            ->where('name', $name)
            ->first();

        return view('cats.index')
            ->with('breed', $breed)
            ->with('cats', $breed->cats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = \Furbook\Cat::create(Input::all());
        return redirect("cats/{$cat->id}")
            ->withSuccess('Cat has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cat)
    {
        // $cat = \Furbook\Cat::find($id);

        return view('cats.show')
            ->with('cat', $cat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cat)
    {
        return view('cats.edit')
            ->with('cat', $cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cat)
    {
        $cat->update(Input::all());
        return redirect("cats/{$cat->id}")
            ->withSuccess('Cat has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cat)
    {
        $cat->delete();
        return redirect('cats')
            ->withSuccess('Cat has been deleted.');
    }
}
