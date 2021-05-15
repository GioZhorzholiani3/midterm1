<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function list(){
        $applicants = Applicant::orderBy('exp_year')->paginate(10);
//        $applicants = Applicant::orderby('exp_year','desc')->get();
        //$applicants = Applicant::paginate(10);

        return view('applicants.index',compact('applicants'));

    }

    public function edit($id){
        $applicant = Applicant::findOrFail($id);
        return view('applicants.edit',compact('applicant'));
    }

    public function update(Request $request,$id){
        $applicant = Applicant::findOrFail($id);

        $applicant->update($request->all());
        return redirect()->back();

    }


    public function delete($id){
        $applicant = Applicant::findOrFail($id);
        $applicant->delete();
        return redirect()->back();


    }

}
