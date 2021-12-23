<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('company.index', [
            'companies' => $companies
        ]);
    }

    public function show($id)
    {
        $company = Company::find($id);
        return view('company.show', [
            'company' => $company
        ]);
    }

    public function create()
    {
        return view('company.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Antiguo sin imagen:  Company::create($request->all());
        
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        if ($presentation = $request->file('presentation')) {
            $destinationPath = 'presentations/';
            $presentationName = date('YmdHis') . "_" . $presentation->getClientOriginalName() . "." . $presentation->getClientOriginalExtension();
            $presentation->move($destinationPath, $presentationName);
            $input['presentation'] = "$presentationName";
        }

        Company::create($input);
        
        return redirect()->route('company.index')
            ->with('success','Registro creado correctamente.');
    }

}
