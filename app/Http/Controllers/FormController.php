<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('form.form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'nisn' => 'required|min:4',
            'jk' => 'required',
            'school' => 'required',
            'no_telp' => 'required|max:13',
            'interest' => 'required',
        ]);

        Form::create([
            'name' => $request->name,
            'nisn' => $request->nisn,
            'jk' => $request->jk,
            'school' =>$request->school,
            'no_telp'=>$request->no_telp,
            'interest' =>$request->interest,
            'religion' =>$request->religion,
            'address' =>$request->address,
        ]);

        return redirect('login');

    }


    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {

    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //
    }
}
