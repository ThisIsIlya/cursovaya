<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Manager;
use App\Http\Requests\Task\StoreRequest;
use App\Http\Requests\Task\UpdateRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $managers = Manager::all();
        $data = $request->validated();
        Task::firstOrCreate($data);

        return redirect()->route('task.index');
    }
}
