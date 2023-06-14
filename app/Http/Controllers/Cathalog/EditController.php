<?php

namespace App\Http\Controllers\Cathalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cathalog;
use App\Http\Requests\Cathalog\StoreRequest;
use App\Http\Requests\Cathalog\UpdateRequest;


class EditController extends Controller
{
    public function __invoke(Cathalog $cathalog){
        return view('cathalog.edit', compact('cathalog'));
    }
}
