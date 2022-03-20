<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function contracts(Request $request)
    {
        return view('contracts');
    }

    public function inventory(Request $request)
    {
        return view('inventory');
    }

    public function network(Request $request)
    {
        return view('network');
    }
}
