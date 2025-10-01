<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function index(){
        $payments = [
            [
                'firstname' => 'Tes',
                'lastname' => 'test',
                'marka' => 'FZ',
                'type' => '1',
                'payment' => '522300',
                'created' => '2025-06-20',
            ],
            [
                'firstname' => 'Tes',
                'lastname' => 'test',
                'marka' => 'FZ',
                'type' => '1',
                'payment' => '522300',
                'created' => '2025-06-20',
            ],
            [
                'firstname' => 'Tes',
                'lastname' => 'test',
                'marka' => 'FZ',
                'type' => '1',
                'payment' => '522300',
                'created' => '2025-06-20',
            ],
            [
                'firstname' => 'Tes',
                'lastname' => 'test',
                'marka' => 'FZ',
                'type' => '1',
                'payment' => '522300',
                'created' => '2025-06-20',
            ],
        ];
        return view('payments.index', compact('payments'));
    }
}
