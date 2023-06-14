<?php

namespace App\Http\Controllers\Manager;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manager;
use App\Http\Requests\Manager\StoreRequest;
use App\Http\Requests\Manager\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Manager $manager){
        $data=$request->validated();
        $manager->update($data);

        return view('manager.show', compact('manager'));
    }
}
