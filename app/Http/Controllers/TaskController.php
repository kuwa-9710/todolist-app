<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
// バリデーション
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::where('status', false)->get();
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
    public function store(Request $request, Task $task)
    {
        // make validation rules.
        $rules = [
            'task_name' => 'required|max:100'
        ];
        // make error message.
        $messages = [
            'required' => 'Please fill in the required fields.',
            'max' => 'Check the number of characters, and make them 100 or less.'
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $task->name = $request->input('task_name');
        $task->save();
        return redirect('/tasks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', compact('task'));
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

        if($request->status === null) {
            $rules = [
                'task_name' => 'max:100'
            ];
    
            $messages = [
                'max' => 'Check the number of characters, and make them 100 or less.'
            ];
            Validator::make($request->all(), $rules, $messages)->validate();
    
            $task = Task::find($id);
            $task->name = $request->input('task_name');
            $task->save();
        } else {
            $task = Task::find($id);
            $task->status = true;
            $task->save();
        }
        
        return redirect('/tasks');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::find($id)->delete();
        return redirect('/tasks');
    }
}
