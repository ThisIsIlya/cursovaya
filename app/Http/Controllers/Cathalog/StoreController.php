<?php

namespace App\Http\Controllers\Cathalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cathalog;
use App\Http\Requests\Cathalog\StoreRequest;
use App\Http\Requests\Cathalog\UpdateRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        Cathalog::firstOrCreate($data);

        return redirect()->route('cathalog.index');
    }
}
