<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regular;
use App\Exports\RegularExport;
use Excel;

class RegularController extends Controller
{
    public function index()
    {
        $regular = Regular::latest()->paginate(5);
        return view('admin.contant.courses.regular',compact('regular'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('contant.courses.regular');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:users',
            'contact'=>'required',
            'date_of_birth'=>'required',
            'city'=>'required',
            'country'=>'required',
            'gender'=>'required',
            'course'=>'required'
        ]);
        
        $regular = new Regular([
            'name' => $request->get('name'),
            'contact' => $request->get('contact'),
            'email' => $request->get('email'),
            'date_of_birth' => $request->get('date_of_birth'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'gender' => $request->get('gender'),
            'course' => $request->get('course'),
        ]);
        $regular->save();
        return redirect('/')->with('success','Successfully Registered');
    }
    public function show($id)
    {
        $regular = Regular::findOrFail($id);
        return view('contant.courses.regular', compact('regular'));
    }
    public function edit($id)
    {
        $regular = Regular::findOrFail($id);
        return view('contant.courses.regular', compact('regular'));
    }
    public function destroy($id)
    {
        $regular = Regular::findOrFail($id);
        $regular->delete();
        return redirect(route('/'))->with('successfully deleted');
    }
    public function export() 
    {
        return Excel::download(new RegularExport, 'Regular.xlsx');
    }
}
