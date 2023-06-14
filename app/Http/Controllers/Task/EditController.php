<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\Task\StoreRequest;
use App\Http\Requests\Task\UpdateRequest;

class EditController extends Controller
{
    public function __invoke(Task $task){
        return view('task.edit', compact('task'));
    }
}
