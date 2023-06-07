<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;

class FacultyController extends Controller
{
    public function index()
    {
        return view('contant.bootcamp.bootcamp_reg_form.itprofessionals');
    }

    public function store(Request $request)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate([
            'name'=>'required|max:255',
            'father_name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:users',
            'mobile'=>'required',
            'contact'=>'required',
            'date_of_birth'=>'required',
            'cnic'=>'required',
            'university'=>'required',
            'department'=>'required',
            'position'=>'required',
            'experience'=>'required',
            'address'=>'required',
            'city'=>'required',
            'country'=>'required',
            'zip'=>'required',
            'qualification'=>'required',
            'gender'=>'required',

        ]); 
        // Getting values from the blade template form
        $faculty = new Faculty([
            'name' => $request->get('name'),
            'father_name' => $request->get('father_name'),
            'mobile' => $request->get('mobile'),
            'mobile' => $request->get('mobile'),
            'email' => $request->get('email'),
            'date_of_birth' => $request->get('date_of_birth'),
            'cnic' => $request->get('cnic'),
            'university' => $request->get('university'),
            'department' => $request->get('department'),
            'position' => $request->get('position'),
            'experience' => $request->get('experience'),
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'zip' => $request->get('zip'),
            'qualification' => $request->get('qualification'),
            'gender' => $request->get('gender'),
            'linkedin' => $request->get('linkedin'),
            'github' => $request->get('github'),
        ]);
        $faculty->save();
        return redirect('/')->with('success', 'Data saved.');   // -> resources/views/stocks/index.blade.php
    }
    public function exportUsers(Request $request){
        return Excel::download(new ExportUser, 'users.xlsx');
    }
}
