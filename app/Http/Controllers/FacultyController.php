<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Exports\UsersExport;
use Excel;

class FacultyController extends Controller
{
    public function index()
    {
        $faculties = Faculty::latest()->paginate(5);
        return view('admin.contant.bootcamp.faculties',compact('faculties'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        // $faculties = Faculty::all();
        // return view('contant.bootcamp.bootcamp_reg_form.faculty', compact('faculties'));
    }

    public function create()
    {
        return view('contant.bootcamp.bootcamp_reg_form.faculty');
    }

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
            'cv' => 'required|mimes:pdf|max:2048',
        ]);
        
        $faculties = new Faculty([
            'name' => $request->get('name'),
            'father_name' => $request->get('father_name'),
            'mobile' => $request->get('mobile'),
            'contact' => $request->get('contact'),
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
        $faculties->save();
        
        if ($request->hasFile('cv')) {
            $filename = time().'.'.$request->file('cv')->getClientOriginalExtension();
            $request->file('cv')->storeAs('public/cv', $filename);
            $faculties->cv = $filename;
            $faculties->save();
        }
        
        return redirect('/')->with('success','Successfully Registered');
    }
    public function show($id)
    {
        $faculties = Faculty::findOrFail($id);
        return view('contant.bootcamp.bootcamp_reg_form.itprofessionals', compact('faculties'));
    }

    public function edit($id)
    {
        $faculties = Faculty::findOrFail($id);
        return view('contant.bootcamp.bootcamp_reg_form.itprofessionals', compact('faculties'));
    }

    public function update(Request $request, $id)
    {
        $faculties = Faculty::findOrFail($id);
        $faculties->update($request->all());
        return redirect(route('contant.bootcamp.bootcamp_reg_form.itprofessionals'))->with('success', 'Faculty member updated.');
    }

    public function destroy($id)
        {
            $faculties = Faculty::findOrFail($id);
            $faculties->delete();
            return redirect(route('contant.bootcamp.bootcamp_reg_form.itprofessionals'))->with('successfully deleted');
        }
    public function export() 
        {
            return Excel::download(new UsersExport, 'faculties.xlsx');
        }
    // public function downloadCV($id)
    //     {
    //         $faculty = Faculty::findOrFail($id);

    //         $file = storage_path('app/public/cv/' . $faculty->cv);

    //         return response()->download($file, "{$faculty->name}.pdf");
    //     }
    public function downloadCV($id)
    {
        $faculty = Faculty::findOrFail($id);
    
        $file_path = storage_path('app/public/cv/' . $faculty->cv);
    
        if (!file_exists($file_path)) {
            abort(404);
        }
    
        $file = file_get_contents($file_path);
    
        $headers = [
            'Content-Type' => 'application/pdf',
        ];
    
        return response()->download($file_path, $faculty->cv, $headers);
    }
    
    
    
    
}

