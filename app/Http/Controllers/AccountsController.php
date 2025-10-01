<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountsController extends Controller
{
    public function index(){
        $accounts = [
            [
                'firstname' => 'Tes',
                'lastname' => 'test',
                'mobile' => '8779900950',
                'email' => 'test@test.com',
                'type' => '1',
                'balance' => '522300',
                'created' => '2025-06-20',
            ],
            [
                'firstname' => 'Tes',
                'lastname' => 'test',
                'mobile' => '8779900950',
                'email' => 'test@test.com',
                'type' => '1',
                'balance' => '522300',
                'created' => '2025-06-20',
            ],
            [
                'firstname' => 'Tes',
                'lastname' => 'test',
                'mobile' => '8779900950',
                'email' => 'test@test.com',
                'type' => '1',
                'balance' => '522300',
                'created' => '2025-06-20',
            ],
            [
                'firstname' => 'Tes',
                'lastname' => 'test',
                'mobile' => '8779900950',
                'email' => 'test@test.com',
                'type' => '1',
                'balance' => '522300',
                'created' => '2025-06-20',
            ],
        ];
        return view('accounts.index', compact('accounts'));
    }
}
