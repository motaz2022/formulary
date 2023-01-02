<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Drug;
use Livewire\WithPagination;

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
        return view('livewire.search-drugs', [
            'drugs' => Drug::where('scientificname', 'like', '%'.$this->search.'%')
            ->orWhere('tradename', 'like', '%'.$this->search.'%')
            ->orWhere('group', 'like', '%'.$this->search.'%')
            ->orderBy('id')
            ->Simplepaginate(5),
        ]);
    }
}
