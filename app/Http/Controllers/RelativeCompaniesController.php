<?php

namespace App\Http\Controllers;

use App\Models\RelativeCompanies;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class RelativeCompaniesController extends Controller
{


    // ==============================================
    // INDEX METHOD for view relative companies data
    // ==============================================
    public function index()
    {
        $rc_datas = RelativeCompanies::all();
        return view('relative_companies.relative_c_view', compact('rc_datas'));
    }




    // ===================================================
    // CREATE METHOD for creating relative companies data
    // ===================================================

    public function create()
    {
        return view('relative_companies.relative_c_add');
    }




    // ===================================================
    // STORE METHOD for storing relative companies data
    // ===================================================

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'company_link' => 'required | url',
            'company_logo' => 'required | mimes:png',
        ], [
            'company_name.required' => 'Company Name is required',
            'company_link.required' => 'Company Link is required',
            'company_link.url' => 'It must be have a valid url',
            'company_logo.required' => 'Company Logo is required',
            'company_logo.mimes' => 'It must to be a png file',
        ]);

        $company = RelativeCompanies::all();

        if ($company->count() > 5) {
            return back()->with('error', "Can't added more than 6");
        } else {
            $img = Image::make($request->company_logo);
            $img_name = auth()->id() . auth()->user()->name . Str::random('5') . '.' . $request->company_logo->getClientOriginalExtension();
            $img->save(base_path('public/uploads/relative_c_logos/' . $img_name));

            RelativeCompanies::insert([
                'company_name' => $request->company_name,
                'company_link' => $request->company_link,
                'company_logo' => $img_name,
            ]);
            return back()->with('success', 'Success');
        }
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



    // =================================================
    // EDIT METHOD for updating relative companies data
    // =================================================
    public function edit(RelativeCompanies $relativeCompanies, $id)
    {
        $rc_edit = RelativeCompanies::find($id);
        return view('relative_companies.relative_c_edit', compact('rc_edit'));
    }





    // ===================================================
    // Update METHOD for updating form relative companies 
    // ===================================================
    public function update(Request $request, RelativeCompanies $relativeCompanies, $id)
    {

        $request->validate([
            'company_name' => 'required',
            'company_link' => 'required | url',
            'company_logo' => 'required | mimes:png',
        ], [
            'company_name.required' => 'Company Name is required',
            'company_link.required' => 'Company Link is required',
            'company_link.url' => 'It must be have a valid url',
            'company_logo.required' => 'Company Logo is required',
            'company_logo.mimes' => 'It must to be a png file',
        ]);

        if ($request->hasFile('company_logo')) {
            unlink(base_path('public/uploads/relative_c_logos/' . RelativeCompanies::find($id)->company_logo));
            $img = Image::make($request->yourcompany_logo_img);
            $img_name = auth()->id() . auth()->user()->name . Str::random('5') . "." . $request->company_logo->getClientOriginalExtension();
            $img->save(base_path('public/uploads/relative_c_logos/' . $img_name));

            RelativeCompanies::find($id)->update([
                'company_logo' => $img_name,
            ]);
        }

        RelativeCompanies::find($id)->update([
            'company_name' => $request->company_name,
            'company_link' => $request->company_link,
        ]);

        return back()->with('success', "Successfully updated your data");
    }




    // ===================================================
    // DESTROY METHOD for deleting relative companies data
    // ===================================================
    public function destroy(RelativeCompanies $relativeCompanies, $id)
    {
        RelativeCompanies::find($id)->delete();
        return back();
    }




    // =====================================================
    // TRASH METHOD for view deleted relative companies data
    // =====================================================
    public function trash()
    {
        $trashed = RelativeCompanies::onlyTrashed()->get();
        return view('relative_companies.relative_c_trash', compact('trashed'));
    }




    // ===================================================================
    // FORCE DELETE METHOD for permanently deleted relative companies data
    // ===================================================================
    public function force_delete($id)
    {
        unlink(base_path('public/uploads/relative_c_logos/' . RelativeCompanies::onlyTrashed()->find($id)->company_logo));
        RelativeCompanies::onlyTrashed()->find($id)->forceDelete();
        return back();
    }



    public function restore($id){
        RelativeCompanies::onlyTrashed()->find($id)->restore();
        return back();
    }






}
