<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;
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
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        $user = Auth::user();
        $id = Auth::id();

        $task = new Task;
        $task->user_id = $request->user()->id;
        $task->name = $request->name;
        $task_add = $task->save();

        if($task_add > 0){

            return redirect()->route('tasks.index')->with('add_success', trans('content.add_success'));
        } else {

            return redirect()->route('tasks.index')->with('add_fail', trans('content.add_fail'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {

            $tasks = Task::findOrFail($id);
            $this->authorize($tasks, 'view');
        } catch (ModelNotFoundException $e) {

            return abort(403);
        }

        return view('tasks.show', compact('tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            $task = Task::findOrFail($id);
            $this->authorize('delete', $task);
            $task_delete = $task->delete();
        } catch (ModelNotFoundException $e) {

            return redirect()->route('tasks.index')->with('delete_fail', trans('content.delete_fail'));
        }

        return redirect()->route('tasks.index')->with('delete_success', trans('content.delete_success'));
    }
}
