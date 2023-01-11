<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Drug;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class SearchDrugs extends Component
{

    public $search = '';
    public $foo;
    public $page = 1;
    use WithPagination;
    protected $queryString = [
        'foo',
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $drugs = Drug::where(function ($query) {
            $query->where('genericName', 'like', '%'.$this->search.'%')
                ->orWhere('brandName', 'like', '%'.$this->search.'%');
        })->where('availability', 1)
        ->simplepaginate(5);
        return view('livewire.search-drugs', compact('drugs'));
    }
}
