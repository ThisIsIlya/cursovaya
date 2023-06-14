<?php

namespace App\Http\Controllers\Cathalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cathalog;
use App\Models\Factory;
use App\Http\Requests\Cathalog\StoreRequest;
use App\Http\Requests\Cathalog\UpdateRequest;


class CreateController extends Controller
{
    public function __invoke(){
        $factories = Factory::all();
        return view('cathalog.create')->with([
            'factories'=> $factories,
        ]);
    }
}
