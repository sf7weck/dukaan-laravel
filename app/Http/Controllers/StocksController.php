<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StocksController extends Controller
{
    public function index(){
        $accounts = [
            [
                'uuid' => 'jajajaj',
                'firstname' => 'jajajaj',
                'lastname' => 'jajajaj',
                'email' => 'jajajaj',
            ]
        ];
        return view('stocks.index', compact('accounts'));
    }
}
