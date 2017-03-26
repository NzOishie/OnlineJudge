<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solution;
use Auth;

class SubmitController extends Controller
{

    public function Solution(Request $request)
    {
        $solution = new Solution;
        $solution->user_id = Auth::user()->id;
        $solution->execution_time=5;
        $solution->status="Wrong Answer";

        $solution->problem_id=$request->problem_id;
        $solution->language = $request->language;
        $solution->save();
        $file=$request->file('solution');
        $file->storeAs('Files/solutions/' . Auth::user()->id ,'solution');

    }
}
