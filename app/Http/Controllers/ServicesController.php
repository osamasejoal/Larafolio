<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ServicesController extends Controller
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





    // ===================================================
    // CREATE METHOD for creating Services data
    // ===================================================
    public function create()
    {
        return view('services.ser_add');
    }





    // ===================================================
    // CREATE METHOD for creating Services data
    // ===================================================
    public function store(Request $request)
    {
        // return Services::lastInsertId()->get();
        // die();
        $request->validate([
            'service_icon' => 'required',
            'service_name' => 'required',
            'service_description' => 'required',
            'service_img' => 'required | mimes:png',
        ], [
            'service_icon.required' => 'Service Icon is required',
            'service_name.required' => 'Service Name is required',
            'service_description.required' => 'Service Description is required',
            'service_img.required' => 'Service Img is required',
            'service_img.mimes' => 'It must to be a png file',
        ]);



        $img = Image::make($request->service_img);
        $img_name = auth()->id() . auth()->user()->name . Str::random('5') . '.' . $request->service_img->getClientOriginalExtension();
        $img->save(base_path('public/uploads/services_img/' . $img_name));

        $servId = Services::insertGetId([
            'service_icon' => $request->service_icon,
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,
            'service_img' => $img_name,
        ]);
        
        Services::find($servId)->update([
            'serial' => ($servId % 2) == 0 ? 2 : 1,
        ]);
        return back()->with('success', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services)
    {
        //
    }
}
