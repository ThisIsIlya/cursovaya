<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\Task\StoreRequest;
use App\Http\Requests\Task\UpdateRequest;

class DeleteController extends Controller
{
    public function __invoke(Task $task){
        $task->delete();

        return redirect()->route('task.index');
    }
}
