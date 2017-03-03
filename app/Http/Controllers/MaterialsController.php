<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

use App\Material;
use App\MaterialOption;

class MaterialsController extends Controller
{
    public function index ()
    {
        $materials = Material::all();

    	return view("materials", ['materials' => $materials]);
    }

    public function add ()
    {
    	return view("material-add");
    }

    public function edit ($id)
    {
        $material = Material::find($id);

    	return view("material-edit", ['material' => $material]);
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'Sport' => [
                "required",
                Rule::in(['Football', 'Baseball', 'Basketball', 'Hockey'])
            ],
            'Name'  => "required|alpha"
        ]);

    	$material = new Material;
    	$material->Name = Input::get('Name');
    	$material->Sport = Input::get('Sport');
    	$material->Image = Input::get('Image');
    	$material->save();

        Session::flash('message', "Successfully Adding Material.");
        Session::flash('alert-class', "alert-success");

        return redirect("materials");
    }

    public function update ()
    {
        $this->validate($request, [
            'Sport' => [
                "required",
                Rule::in(['Football', 'Baseball', 'Basketball', 'Hockey'])
            ],
            'Name'  => "required|alpha"
        ]);

    	$material = Material::find( Input::get('Id') );
    	$material->Name = Input::get('Name');
    	$material->Sport = Input::get('Sport');
    	$material->Image = Input::get('Image');
    	$material->save();

        Session::flash('message', "Successfully Updating Material.");
        Session::flash('alert-class', "alert-success");

        return redirect("materials");
    }

    public function delete ($id)
    {
    	Material::destroy($id);
    }

    public function materialOption ($id)
    {
        $material = Material::find($id);
        $materialOptions = MaterialOption::where('MaterialId', $id)->get();

        return view("material-option", ['material' => $material, 'materialOptions' => $materialOptions]);
    }
}
