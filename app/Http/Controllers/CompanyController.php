<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $users = auth()->user()->company()->pluck('company.user_id');
        dd(users);
    }
}
