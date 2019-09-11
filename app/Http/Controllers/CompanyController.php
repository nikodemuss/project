<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        // $users = ;
        // dd(auth()->user()->company());
        $companies = \App\Company::all();
        // dd($companies);

        return view("company.index", compact('companies'));
    }

    public function create(){
        return view("company.create");
    }

    public function store(){
        $data = request()->validate([
            "_token" => "required",
            "name" => "required",
            "phone" => "required",
            "city" => "required",
            "state" => "required",
            "street" => "required",
            "zipCode" => "required",
            "country" => "required",
            "currency" => "required"
        ]);

        // dd($data);
        auth()->user()->company()->create($data);
        return redirect("/company");
    }
}
