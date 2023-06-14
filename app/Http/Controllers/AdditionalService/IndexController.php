<?php

namespace App\Http\Controllers\AdditionalService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdditionalService;
use App\Http\Requests\AdditionalService\StoreRequest;
use App\Http\Requests\AdditionalService\UpdateRequest;

class IndexController extends Controller
{
    public function __invoke(){
        $additional_services = AdditionalService::all();
        return view('additional_service.index', compact('additional_services'));
    }
}
