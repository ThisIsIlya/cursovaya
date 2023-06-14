<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manager;
use App\Http\Requests\Manager\StoreRequest;
use App\Http\Requests\Manager\UpdateRequest;

class IndexController extends Controller
{
    public function __invoke(){
        $managers = Manager::all();
        return view('manager.index', compact('managers'));
    }
}
