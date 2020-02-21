<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lead;

class LeadController extends Controller
{
    public function create(){
        return view("welcome");
    }
/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */

    public function store(Request $request){
        $reglas = [
            "first_name" => "required|string|min:1|max:255",
            "last_name" => "required|string|min:1|max:255",
            "email" => "required|string|email|max:255",
            "phone" => "required|numeric|digits_between:8,13",
            "consulta" => "required|string|max:250"
        ];

        $this->validate($request, $reglas);

        Lead::create($request->all());
        return view('/gracias');
    }
}
