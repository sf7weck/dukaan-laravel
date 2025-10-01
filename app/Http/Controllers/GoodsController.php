<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function index(){
        $products = [
            [
                'firstname' => 'Tes',
                'lastname' => 'test',
                'marka' => 'FZ',
                'type' => '1',
                'product' => 'Duster',
                'ctn' => '30',                
                'pcs' => '100',
                'rate' => '59',
                'amount' => '25000',
                'created' => '2025-06-20',
            ],
            [
                'firstname' => 'Tes',
                'lastname' => 'test',
                'marka' => 'MZ',
                'type' => '2',
                'product' => 'Duster',
                'ctn' => '30',                
                'pcs' => '100',
                'rate' => '59',
                'amount' => '25000',
                'created' => '2025-06-20',
            ],
            [
                'firstname' => 'Tes',
                'lastname' => 'test',
                'marka' => 'ELK',
                'type' => '2',
                'product' => 'Duster',
                'ctn' => '30',                
                'pcs' => '100',
                'rate' => '59',
                'amount' => '25000',
                'created' => '2025-06-20',
            ],
            [
                'firstname' => 'Tes',
                'lastname' => 'test',
                'marka' => 'SF7',
                'type' => '1',
                'product' => 'Duster',
                'ctn' => '30',                
                'pcs' => '100',
                'rate' => '59',
                'amount' => '25000',
                'created' => '2025-06-20',
            ],
        ];
        return view('goods.index', compact('products'));
    }
}
