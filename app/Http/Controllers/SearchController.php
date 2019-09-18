<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        $companies = \App\Company::search("test")->get();
        return view("company.index", compact('companies'));
        // dd();
    }
}
