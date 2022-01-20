<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner_data = Banner::all();
        return view('banner.view', compact('banner_data'));
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
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner_edit = Banner::find($id);
        return view('banner.edit', compact('banner_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'your_name' => 'required | max:25',
            'your_bio' => 'required | max:100',
            'your_img' => 'mimes:png',
        ], [
            'your_name.required' => 'Your Name is required',
            'your_name.max' => 'It can be maximum 25 digits',
            'your_bio.required' => 'Your Bio is required',
            'your_bio.digits_between' => 'It can be maximum 150 digits',
            'your_img.mimes' => 'It must to be a png file',
        ]);


        if ($request->hasFile('your_img')) {
            unlink(base_path('public/uploads/banner_img/' . Banner::find($id)->your_img));
            $img = Image::make($request->your_img);
            $img_name = auth()->id() . auth()->user()->name . Str::random('5') . "." . $request->your_img->getClientOriginalExtension();
            $img->save(base_path('public/uploads/banner_img/' . $img_name));

            Banner::find($id)->update([
                'your_img' => $img_name,
            ]);
        }

        Banner::find($id)->update([
            'your_name' => $request->your_name,
            'your_bio' => $request->your_bio,
        ]);

        return back()->with('success', "Successfully updated your data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
