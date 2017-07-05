<?php

namespace App\Http\Controllers;

use App\Task;

class TaskController extends Controller
{
    protected function index()
    {
    	$tasks = Task::all();

    	return view('tasks.index', compact('tasks'));
    }

    protected function show($id)
    {
    	$tasks = Task::find($id);

    	return view('tasks.show', compact('tasks'));
    }
}
