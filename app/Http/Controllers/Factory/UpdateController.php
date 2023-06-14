<?php

namespace App\Http\Controllers\Factory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Factory;
use App\Http\Requests\Factory\StoreRequest;
use App\Http\Requests\Factory\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Factory $factory){
        $data=$request->validated();
        $factory->update($data);

        return view('factory.show', compact('factory'));
    }
}
