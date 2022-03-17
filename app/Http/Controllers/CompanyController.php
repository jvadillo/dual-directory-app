<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;

use App\Models\Company;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage; //AWS S3

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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20048',
        ]);

        // Antiguo sin imagen:  Company::create($request->all());
        
        $input = $request->all();
  
        /* ANTIGUO GUARDANDO EN /public 
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
        */
        if ($image = $request->file('image')) {
            //get filename with extension
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            
            
            $s3filePath = '/images/' . $profileImage;
            Storage::disk('s3')->put($s3filePath, file_get_contents($image), 'public');
      
            //Upload File to s3
            //Storage::disk('s3')->put($s3filePath, fopen($image, 'r+'), 'public');
      
            $input['image'] = "$s3filePath";
        }

        Company::create($input);
        
        return redirect()->route('company.index')
            ->with('success','Registro creado correctamente.');
    }

    private function store_image_aws($image){
        
        //get filename with extension
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        
        
        $s3filePath = '/images/' . $profileImage;
        Storage::disk('s3')->put($s3filePath, file_get_contents($image), 'public');
    
        //Upload File to s3
        //Storage::disk('s3')->put($s3filePath, fopen($image, 'r+'), 'public');
    
        $input['image'] = "$s3filePath";
        

    }

    public function edit($id)
    {
        //abort_if(Gate::denies('client_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = \App\Models\Category::all()->pluck('name', 'id');

        //$company->load('status');

        //return view('company.edit', compact('statuses', 'company'));
        $company = Company::find($id);
        return view('company.edit', [
            'company' => $company
        ]);
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);

        // Check if the user is the creator of the company or admin
        if (!Gate::allows('update-company', $company) && !Gate::allows('isAdmin')) {
            abort(403);
        }

        /*$request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);*/
       
        $input = $request->all();
        /*
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }*/
        if ($image = $request->file('image')) {
            //get filename with extension
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            
            
            $s3filePath = '/images/' . $profileImage;
            Storage::disk('s3')->put($s3filePath, file_get_contents($image), 'public');
      
            //Upload File to s3
            //Storage::disk('s3')->put($s3filePath, fopen($image, 'r+'), 'public');
      
            $input['image'] = "$s3filePath";
        }
        

        if ($presentation = $request->file('presentation')) {
            $destinationPath = 'presentations/';
            $presentationName = date('YmdHis') . "_" . $presentation->getClientOriginalName() . "." . $presentation->getClientOriginalExtension();
            $presentation->move($destinationPath, $presentationName);
            $input['presentation'] = "$presentationName";
        }

        
        $company->update($input);
        
        return redirect()->route('company.index')
            ->with('success','Registro actualizado con éxito.');

    }

}
