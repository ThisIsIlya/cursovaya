<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manager;
use App\Http\Requests\Manager\StoreRequest;
use App\Http\Requests\Manager\UpdateRequest;

class DeleteController extends Controller
{
    public function __invoke(Manager $manager){
        $manager->delete();

        return redirect()->route('manager.index');
    }
}
