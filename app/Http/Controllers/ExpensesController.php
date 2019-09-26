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
    $expenses = \App\Expenses::where('company_id', auth()->user()->id)->get();
    return view('expenses.index', compact('expenses'));
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
            "currency" => "required",
            "tax" => "required"
        ]);
        
        \App\Expenses::create(array_merge($data,["company_id" => auth()->user()->company_id],["grand_total" => $data["subtotal"] + $data["tax"]]));

        return redirect('expenses');
    }

    public function show($id){
        $expense = \App\Expenses::findOrFail($id);
        dd($expense);
        return view('expenses.show',compact('expense'));
    }
}
