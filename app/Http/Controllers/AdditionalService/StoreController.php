<?php

namespace App\Http\Controllers\AdditionalService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdditionalService;
use App\Http\Requests\AdditionalService\StoreRequest;
use App\Http\Requests\AdditionalService\UpdateRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        AdditionalService::firstOrCreate($data);

        return redirect()->route('additional_service.index');
    }
}
