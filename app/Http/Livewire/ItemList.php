<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\Item;

class ItemList extends Component
{
    public $items;

    public function mount() {
        $this->items = Item::orderBy('prio')
            ->get();
    }

    public function prioUp() {
        dd('PRIO UP!!!!!');
    }

    public function prioDown() {
        dd('PRIO DOWN!!!');
    }

    public function render()
    {
        return view('livewire.item-list');
    }
}
