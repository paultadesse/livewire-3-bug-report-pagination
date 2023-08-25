<?php

namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Driver;
use Livewire\Component;

class DriverComponent extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        return view('livewire.driver-component', [
            'drivers' => Driver::search('first_name', $this->search)->paginate(10)
        ]);
    }
}
