<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Manager;
use App\Http\Requests\Task\StoreRequest;
use App\Http\Requests\Task\UpdateRequest;

class IndexController extends Controller
{
    public function __invoke(){
        $tasks = Task::all();
        $managers = Manager::all();
        return view('task.index', compact('tasks'));
    }
}
