<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Item;

class PagesController extends Controller
{
    public function home() {

        $items = Item::orderBy('prio')->get();
        return view('home', [
            'items' => $items
        ]);

    }

    public function dashboard() {
        return view('dashboard');
    }

    public function about() {

    }
}
