<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class AdminController extends Controller 
{

    public function edit(Request $request)
    {
        $companies = Company::all();
        return view('pages.super.administrators.edit')->with('companies', $companies);
    }
}