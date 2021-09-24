<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class TasksController extends Controller
{
    public function index()
    {
        $task = new Tasks;
        return view('tasks.index', ['data' => $task->all()]);
    }

    public function show($id)
    {;
        $task = new Tasks;
        return view('tasks.show', ['data' => $task->find($id)]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $req)
    {
        $task = new Tasks();
        $task->title = $req->input('title');
        $task->description = $req->input('description');
        $task->author = $req->input('author');

        $task->save();

        return redirect(route('tasks.index'));
    }

    public function edit($id)
    {
        $task = new Tasks;
        return view('tasks.edit', ['data' => $task->find($id)]);

    }
}
