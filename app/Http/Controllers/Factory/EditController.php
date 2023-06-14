<?php

namespace App\Http\Controllers\Factory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Factory;
use App\Http\Requests\Factory\StoreRequest;
use App\Http\Requests\Factory\UpdateRequest;

class EditController extends Controller
{
    public function __invoke(Factory $factory){
        return view('factory.edit', compact('factory'));
    }
}
