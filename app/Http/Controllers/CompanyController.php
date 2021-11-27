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

}
