<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $last_ten_cheques = \App\Models\Cheque::with('cheque_order_items')->orderByDesc('created_at')->take(10)->get();
        return view('welcome', [
            'last_ten_cheques' => $last_ten_cheques->sort()
        ]);
    }
}
