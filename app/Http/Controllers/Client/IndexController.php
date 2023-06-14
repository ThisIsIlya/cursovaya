<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;

class IndexController extends Controller
{
    public function __invoke(){
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }
}
