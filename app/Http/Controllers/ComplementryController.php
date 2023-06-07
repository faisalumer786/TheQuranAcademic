<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complementry;
use App\Exports\ComplementryExport;
use Excel;


class ComplementryController extends Controller
{
    public function index()
    {
        $complementry = Complementry::latest()->paginate(5);
        return view('admin.contant.courses.complementry',compact('complementry'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('contant.courses.complementry');
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
        
        $complementry = new Complementry([
            'name' => $request->get('name'),
            'contact' => $request->get('contact'),
            'email' => $request->get('email'),
            'date_of_birth' => $request->get('date_of_birth'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'gender' => $request->get('gender'),
            'course' => $request->get('course'),
        ]);
        $complementry->save();
        return redirect('/')->with('success','Successfully Registered');
    }
    public function show($id)
    {
        $complementry = Complementry::findOrFail($id);
        return view('contant.courses.complementry', compact('complementry'));
    }
    public function edit($id)
    {
        $complementry = Complementry::findOrFail($id);
        return view('contant.courses.complementry', compact('complementry'));
    }
    public function destroy($id)
    {
        $complementry = Complementry::findOrFail($id);
        $complementry->delete();
        return redirect(route('/'))->with('successfully deleted');
    }
    public function export() 
    {
        return Excel::download(new ComplementryExport, 'complementry.xlsx');
    }
}
