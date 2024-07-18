<?php

namespace App\Livewire;
namespace App\Models;

use Illuminate\Http\Request;

use Livewire\Component;

class RequestComponent extends Component
{
    public $requests;

    public function mount()
    {
        $this->requests = MaintenanceRequest::with(['employee', 'technician'])->get();
    }

    public function render()
    {
        return view('livewire.request-component', [
            'requests' => $this->requests,
        ]);
    }
}
