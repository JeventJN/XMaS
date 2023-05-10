<?php

namespace App\Http\Controllers;

use App\Models\userXmas;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $this->authorize('admin');
        // return view('home');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userXmas  $userXmas
     * @return \Illuminate\Http\Response
     */
    public function show(userXmas $userXmas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userXmas  $userXmas
     * @return \Illuminate\Http\Response
     */
    public function edit(userXmas $userXmas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userXmas  $userXmas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userXmas $userXmas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userXmas  $userXmas
     * @return \Illuminate\Http\Response
     */
    public function destroy(userXmas $userXmas)
    {
        //
    }
}
