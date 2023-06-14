<?php

namespace App\Http\Controllers\Cathalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cathalog;
use App\Http\Requests\Cathalog\StoreRequest;
use App\Http\Requests\Cathalog\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Cathalog $cathalog){
        $data=$request->validated();
        $cathalog->update($data);

        return view('cathalog.show', compact('cathalog'));
    }
}
