<?php

namespace App\Http\Controllers\History;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;
use App\Http\Requests\History\StoreRequest;
use App\Http\Requests\History\UpdateRequest;

class EditController extends Controller
{
        public function __invoke(History $history){
            return view('history.edit', compact('history'));
        }
}

