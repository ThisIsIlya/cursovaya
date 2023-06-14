<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Manager;
use App\Http\Requests\Task\StoreRequest;
use App\Http\Requests\Task\UpdateRequest;

class ShowController extends Controller
{
    public function __invoke(Task $task){
        $managers = Manager::all();
        return view('task.show', compact('task'));
    }
}
