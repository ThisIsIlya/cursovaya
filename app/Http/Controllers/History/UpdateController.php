<?php

namespace App\Http\Controllers\History;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;
use App\Http\Requests\History\StoreRequest;
use App\Http\Requests\History\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, History $history){
        $data=$request->validated();
        $history->update($data);

        return view('history.show', compact('history'));
    }
}
