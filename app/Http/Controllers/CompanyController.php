<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        // $users = ;
        // dd(auth()->user()->company());
        $company = \App\Company::all();
        dd($company);
    }

    public function create(){
        return view("company.create");
    }

    public function store(){
        $data = request()->validate([
            "_token" => "required",
            "name" => "required",
            "city" => "required",
            "currency" => "required"
        ]);

        // dd($data);
        auth()->user()->company()->create($data);
    }
}
