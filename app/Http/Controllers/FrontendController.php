<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function frontpage(){
        return view('frontend.front_page', [
            'servalues' => Services::all() ,
        ]);
    }
}
