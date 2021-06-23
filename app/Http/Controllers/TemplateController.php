<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
    	return view('templates.create');
    }

    public function store(Request $request)
    {
    	dd($request->all());
    }
}
