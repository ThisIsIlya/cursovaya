<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;

class EditController extends Controller
{
    public function __invoke(Client $client){
        return view('client.edit', compact('client'));
    }
}
