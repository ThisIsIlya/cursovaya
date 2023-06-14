<?php

namespace App\Http\Controllers\Cathalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cathalog;
use App\Http\Requests\Cathalog\StoreRequest;
use App\Http\Requests\Cathalog\UpdateRequest;


class IndexController extends Controller
{
    public function __invoke(){
        $cathalogs = Cathalog::all();
        return view('cathalog.index', compact('cathalogs'));
    }
}
