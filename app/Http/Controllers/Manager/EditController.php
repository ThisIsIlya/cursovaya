<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manager;
use App\Http\Requests\Manager\StoreRequest;
use App\Http\Requests\Manager\UpdateRequest;

class EditController extends Controller
{
    public function __invoke(Manager $manager){
        return view('manager.edit', compact('manager'));
    }
}
