<?php

namespace App\Http\Controllers\AdditionalService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdditionalService;
use App\Http\Requests\AdditionalService\StoreRequest;
use App\Http\Requests\AdditionalService\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, AdditionalService $additional_service){
        $data=$request->validated();
        $additional_service->update($data);

        return view('additional_service.show', compact('additional_service'));
    }
}
