<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Manager;
use App\Models\Client;
use App\Models\Cathalog;
use App\Http\Requests\Task\StoreRequest;
use App\Http\Requests\Task\UpdateRequest;

class CreateController extends Controller
{
    public function __invoke(){
        $managers = Manager::all();
        $clients = Client::all();
        $cathalogs = Cathalog::all();
        return view('task.create')->with([
            'managers'=> $managers,
            'clients'=> $clients,
            'cathalogs'=> $cathalogs,
        ]);
    }
}
