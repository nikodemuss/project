<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
// use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(){
        // TODO: 
        $companies = \App\Company::all();

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
        
        $companyId = auth()->user()->company()->create($data);
        $companyId->searchable();
        
        $user = auth()->user();
        $user->company_id = $companyId->id;
        auth()->user()->save();

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
        // $this->authorize('update', $company->user);
        
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
        $company->update($data);
        return redirect("/company");
    }

    public function search(){
        $search = Input::get('search');
        // dd($search);

        $companies = \App\Company::search($search)->get();
        return view("company.index", compact('companies'));
        // dd();
    }
    
    public function destroy(){
        // dd(request()->id);
        $company = \App\Company::findOrFail(request()->id);
        // dd($company);
        $company->delete();
        return redirect("/company");
    }
}
