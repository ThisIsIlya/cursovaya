<?php

namespace App\Http\Controllers\History;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;
use App\Http\Requests\History\StoreRequest;
use App\Http\Requests\History\UpdateRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        History::firstOrCreate($data);

        return redirect()->route('history.index');
    }
}
