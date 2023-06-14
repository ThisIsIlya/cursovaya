<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Client $client){
        $data=$request->validated();
        $client->update($data);

        return view('client.show', compact('client'));
    }
}
