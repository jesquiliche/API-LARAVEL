<?php

namespace App\Http\Controllers;

use App\Models\catargorias;
use App\Http\Requests\StorecatargoriasRequest;
use App\Http\Requests\UpdatecatargoriasRequest;

class CatargoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorecatargoriasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecatargoriasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catargorias  $catargorias
     * @return \Illuminate\Http\Response
     */
    public function show(catargorias $catargorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catargorias  $catargorias
     * @return \Illuminate\Http\Response
     */
    public function edit(catargorias $catargorias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecatargoriasRequest  $request
     * @param  \App\Models\catargorias  $catargorias
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecatargoriasRequest $request, catargorias $catargorias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catargorias  $catargorias
     * @return \Illuminate\Http\Response
     */
    public function destroy(catargorias $catargorias)
    {
        //
    }
}
