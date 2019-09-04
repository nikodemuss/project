<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function index(){
        return view('expenses/index');
    }

    public function create(){
        return view('expenses/create');
    }

    public function store(){

        $data = request()->validate([
            "_token" => "required",
            "category" => "required",
            "date" => "required",
            "vendor" => "required",
            "description" => "",
            "subtotal" => "required",
            "tax" => "required"
        ]);

        \App\Expenses::create($data);
        // dd(request()->all());

        return redirect('expenses/index');
    }
}
