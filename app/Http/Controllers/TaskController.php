<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index')->with(['tasks'=>$tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        return view('tasks.create')->with(['projects'=>$projects]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        $store = Task::create([
            'body' => $request->body,
            'project_id' => $request->project_id,
            'created_at' =>  Carbon::now()
        ]);
        return view('tasks.index')->with(['tasks'=> Task::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $project = Project::find($request->id);
        return view ('tasks.index')->with(["tasks"=> $project->tasks]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $task = Task::find($request->id);
        return view('tasks.edit')->with(["task"=>$task]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $task = Task::where('id',$request->id)->first();
        $update = $task->update([
            'body' => $request->body
        ]);
        if($update){
            return view('tasks.index')->with(['tasks'=>Task::all()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        Task::where('id',$request->id)->delete();
        return back();

    }

    public function markAs(Request $request)
    {
        $update = Task::where('id',$request->id)->update([
            'status'=> $request->status
        ]);
        if($update){
            return back();
        }
    }
}
