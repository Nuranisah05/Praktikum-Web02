<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tugas10.layout.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
        return view('tugas10.layout.about');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function choose()
    {
        return view('tugas10.layout.choose');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function contact()
    {
        return view('tugas10.layout.contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function services()
    {
        return view('tugas10.layout.services');
    }

     /**
     * Show the form for creating a new resource.
     */
    public function team()
    {
        return view('tugas10.layout.team');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
