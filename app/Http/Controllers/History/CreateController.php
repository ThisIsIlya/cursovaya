<?php

namespace App\Http\Controllers\History;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;
use App\Models\Factory;
use App\Http\Requests\History\StoreRequest;
use App\Http\Requests\History\UpdateRequest;

class CreateController extends Controller
{
    public function __invoke(){
        $factories = Factory::all();
        return view('history.create')->with([
            'factories'=> $factories,
        ]);
    }
}
