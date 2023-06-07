<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use Illuminate\Http\Request;
use App\Exports\RegularExport;
use Excel;

class ProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professionals = Professional::latest()->paginate(5);
        return view('admin.contant.bootcamp.itprofessionals',compact('professionals'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        // $professionals = Professional::all();
        // return view('contant.bootcamp.bootcamp_reg_form.itprofessionals', compact('professionals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contant.bootcamp.bootcamp_reg_form.itprofessionals');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'father_name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:users',
            'mobile'=>'required',
            'contact'=>'required',
            'date_of_birth'=>'required',
            'cnic'=>'required',
            'company'=>'required',
            'department'=>'required',
            'position'=>'required',
            'experience'=>'required',
            'address'=>'required',
            'city'=>'required',
            'country'=>'required',
            'zip'=>'required',
            'qualification'=>'required',
            'gender'=>'required',
            'cv' => 'required|max:2048',
        ]);
        
        $professional = new Professional([
            'name' => $request->get('name'),
            'father_name' => $request->get('father_name'),
            'mobile' => $request->get('mobile'),
            'contact' => $request->get('contact'),
            'email' => $request->get('email'),
            'date_of_birth' => $request->get('date_of_birth'),
            'cnic' => $request->get('cnic'),
            'company' => $request->get('company'),
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
        $professional->save();
        
        if ($request->hasFile('cv')) {
            $filename = time().'.'.$request->file('cv')->getClientOriginalExtension();
            $request->file('cv')->storeAs('public/professional', $filename);
            $professional->cv = $filename;
            $professional->save();
        }
        
        return redirect('/')->with('success','Successfully Registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $itprofessionals = Professional::findOrFail($id);
        return view('contant.bootcamp.bootcamp_reg_form.itprofessionals', compact('itprofessionals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itprofessionals = Professional::findOrFail($id);
        return view('contant.bootcamp.bootcamp_reg_form.itprofessionals', compact('faculties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $itprofessionals = Professional::findOrFail($id);
        $itprofessionals->update($request->all());
        return redirect('itprofessionals')->with('success', 'Faculty member updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itprofessionals = Professional::findOrFail($id);
        $itprofessionals->delete();
        return redirect('itprofessionals')->with('successfully deleted');
    }
    public function export() 
    {
        return Excel::download(new ExportUser, 'professionals.xlsx');
    }
    public function downloadCV($id)
        {
            $professional = Professional::findOrFail($id);
                
            $file = storage_path('app/public/professional/' . $professional->cv);
            return response()->download($file, "{$professional->name}.pdf");

        }
}
