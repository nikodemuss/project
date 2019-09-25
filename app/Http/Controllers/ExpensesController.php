<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ExpensesController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }

    public function index(){
        // TODO: 
        $expenses = \App\Expenses::all();
        return view('expenses/index', compact('expenses'));
    }

    public function create(){
        return view('expenses/create');
    }

    public function store(User $user){

        $data = request()->validate([
            "_token" => "required",
            "category" => "required",
            "date" => "required",
            "vendor" => "required",
            "description" => "",
            "subtotal" => "required",
            "tax" => "required"
        ]);
        
        // dd($data);

        // \App\Expenses::create(compact($data,"user_id" => "1"));
        // auth()->user()->company()->expenses()->create(array_merge($data, ["company_id" => "1"]));
        dd(auth()->user()->company());
        dd(\App\Company::findOrFail());
        // \App\Company::findOrFail();
        // dd(request()->all());

        return redirect('expenses/index');
    }
}
