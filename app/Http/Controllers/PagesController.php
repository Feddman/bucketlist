<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Item;

class PagesController extends Controller
{
    public function home() {
        return action(itemscontroller, 'index')

    }

    public function dashboard() {
        return view('dashboard');
    }

    public function about() {

    }
}
