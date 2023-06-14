<?php

namespace App\Http\Controllers\AdditionalService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdditionalService;
use App\Http\Requests\AdditionalService\StoreRequest;
use App\Http\Requests\AdditionalService\UpdateRequest;

class EditController extends Controller
{
    public function __invoke(AdditionalService $additional_service){
        return view('additional_service.edit', compact('additional_service'));
    }
}
