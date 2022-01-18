<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
class AlertController extends Controller
{
    public function index()
    {
        Alert::warning('Warning Title', 'Warning Message');

    
        return view('SweetAlert');
    }

}
