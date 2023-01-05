<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Drug;
class ShowDrug extends Component
{

    public Drug $drug;

    public function render()
    {
        return view('livewire.show-drug')->extends('layouts.app');
    }
}

