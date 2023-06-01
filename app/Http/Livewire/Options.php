<?php

namespace App\Http\Livewire;

use Livewire\Component;


class Options extends Component
{
    public $isOpen = false;
    // protected $listeners = ['db_connection'];

    public function DBConnection(){
    }

    public function excel(){
        $this->isOpen = true;
        return redirect()->route('importdataexcel.index');
    }
    public function db_connection(){
        $this->isOpen = false;
        return redirect()->route('dbconnection.index');
    }
    public function render()
    {
        return view('livewire.options');
    }
}
