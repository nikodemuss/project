<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search($search){
        $companies = \App\Company::search($search)->paginate(15);
        return view("company.index", compact('companies'));
        // dd();
    }
}
