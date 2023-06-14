<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Manager;
use App\Http\Requests\Task\StoreRequest;
use App\Http\Requests\Task\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Task $task){
        $managers = Manager::all();
        $data=$request->validated();
        $task->update($data);

        return view('task.show', compact('task'));
    }
}
