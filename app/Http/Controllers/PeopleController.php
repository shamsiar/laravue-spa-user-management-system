<?php

namespace App\Http\Controllers;

use App\people;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return people::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' =>'required',
            'password' =>'required',
        ]);
        
        $people = new people;

        $people->create($data);
            return redirect('/login');
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
     * @param  \App\people  $people
     * @return \Illuminate\Http\Response
     */
    public function show(people $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\people  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(people $people)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\people  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, people $people)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\people  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(people $people)
    {
        //
    }
}
