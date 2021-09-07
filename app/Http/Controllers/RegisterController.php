<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_form;


class RegisterController extends Controller
{
    function addData(Request $request){
        $member = new Student_form;

        $member->name =$request->name;
        $member->phone = $request->mobil;
        $member->emial = $request->email;
        $member->course_id = $request->course;
        $member->comment = $request->comment;
        $member->save();
        $member->reset('register');
    }
}
