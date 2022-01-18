<?php

namespace App\Http\Controllers;

use App\Models\RelativeCompanies;
use Illuminate\Http\Request;
use App\Models\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class RelativeCompaniesController extends Controller
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
        return view('relative_companies.relative_c_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->company_name;
        // die();
        $request->validate([
            'company_name' => 'required',
            'company_link' => 'required',
            'company_logo' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RelativeCompanies  $relativeCompanies
     * @return \Illuminate\Http\Response
     */
    public function show(RelativeCompanies $relativeCompanies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RelativeCompanies  $relativeCompanies
     * @return \Illuminate\Http\Response
     */
    public function edit(RelativeCompanies $relativeCompanies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RelativeCompanies  $relativeCompanies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RelativeCompanies $relativeCompanies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RelativeCompanies  $relativeCompanies
     * @return \Illuminate\Http\Response
     */
    public function destroy(RelativeCompanies $relativeCompanies)
    {
        //
    }
}
