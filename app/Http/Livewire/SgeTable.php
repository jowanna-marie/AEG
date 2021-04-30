<?php

namespace App\Http\Livewire;

use App\Models\SgeType;
use Livewire\Component;

class SgeTable extends Component
{
    public $sge_types;

    public function mount(SgeType $sge_types){ 
        $this->sge_types = $sge_types->all();

    }
    public function render()
    {
        return view('livewire.sge-table');
    }
}
