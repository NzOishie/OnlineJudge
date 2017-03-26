<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Problem;
use Auth;

class ProblemController extends Controller
{    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('problem.index')->withProblems(Problem::all());
    }
    public function create(Request $request)
    {
        $this->authorize('create', Problem::class);
        $prob = new Problem();
        $prob->title = $request->title;
        $prob->body = $request->body;
        $prob->user_id = Auth::user()->id;
        $prob->level = $request->level;
        $prob->time_limit = $request->timelimit;
        $prob->save();
        $file=$request->file('input');
        $file->storeAs('Files/' . Auth::user()->id . '/' . $question->id ,'input.txt');
        $file=$request->file('output');
        $file->storeAs('Files/' .  Auth::user()->id . '/' . $question->id ,'output.txt');
        return view('problem.show')->withProblem($prob);
    }

    public function show($id)
    {
        $prob = Problem::find($id);
        return view('problem.show')->withProblem($prob);
    }
    public function File(Request $request){

        if($request->hasFile('input')){
            $file=$request->file('input');
            $file->storeAs('storage/app/public','input');

        }
    }
    public function edit(Problem $problem)
   {
       $this->authorize('update', $problem);
       return view('question.edit')->withProblem($problme);
   }
   public function update(Request $request, Problem $Problem)
    {
        $this->authorize('update', $problem);
        $problam->title = $request->title;
        $problam->body = $request->body;
        if($request->hasFile('input')){
            $request->file('infile')->storeAs('Files/' . Auth::user()->id . '/' . $question->id ,'input.txt');
        }
        if ($request->hasFile('output')) {
            $request->file('outfile')->storeAs('Files/' . Auth::user()->id . '/' . $question->id ,'input.txt');
        }
        $problem->save();
        return $this->show($problems);
    }
    public function destroy(Problem $problem)
    {
        $this->authorize('delete', $problrm);
        $problem->delete();
        return $this->index();
    }

}
