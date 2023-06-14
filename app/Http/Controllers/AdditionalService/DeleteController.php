<?php

namespace App\Http\Controllers\AdditionalService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdditionalService;
use App\Http\Requests\AdditionalService\StoreRequest;
use App\Http\Requests\AdditionalService\UpdateRequest;

class DeleteController extends Controller
{
    public function __invoke(AdditionalService $additional_service){
        $additional_service->delete();

        return redirect()->route('additional_service.index');
    }
}
