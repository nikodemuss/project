<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        // TODO: 
        $companies = \App\Company::all();
        //  dd($companies);

        return view("company.index", compact('companies'));
    }

    public function create(){
        return view("company.create");
    }

    public function store(){
        $data = request()->validate([
            "_token" => "required",
            "name" => "required",
            "category" => "required",
            "phone" => "required",
            "city" => "required",
            "state" => "required",
            "street" => "required",
            "zipCode" => "required",
            "country" => "required",
            "currency" => "required"
        ]);

        // dd($data);
        auth()->user()->company()->create($data)->searchable();
        return redirect("/company");
    }

    public function show($id){
        // $company = \Illuminate\Support\Facades\DB::table('companies')->where('id', $id)->get();
        $company = \App\Company::findOrFail($id);

        // dd($company);
        return view("company.show", compact('company'));
    }

    public function edit($id){
        // $company = \Illuminate\Support\Facades\DB::table('companies')->where('id', $id)->get();
        $company = \App\Company::findOrFail($id);
        
        return view("company.edit", compact('company'));
    }

    public function update($id){
        // $company = \Illuminate\Support\Facades\DB::table('companies')->where('id', $id)->get();

        $data = request()->validate([
            "_token" => "required",
            "name" => "required",
            "category" => "required",
            "phone" => "required",
            "city" => "required",
            "state" => "required",
            "street" => "required",
            "zipCode" => "required",
            "country" => "required",
            "currency" => "required"
        ]);

        // dd($data);
        $company = \App\Company::findOrFail($id);
        // dd($company);
        $company->update($data)->searchable();
        return redirect("/company");
    }

    public function search($search){
        $companies = \App\Company::search($search)->get();
        return view("company.index", compact('companies'));
        // dd();
    }
}
