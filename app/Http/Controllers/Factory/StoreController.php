<?php

namespace App\Http\Controllers\Factory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Factory;
use App\Http\Requests\Factory\StoreRequest;
use App\Http\Requests\Factory\UpdateRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        Factory::firstOrCreate($data);

        return redirect()->route('factory.index');
    }
}
