<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Vehicle;
use Auth;

class Vehicles extends Component
{
    use WithPagination;

    public $v_name;

    public function render()
    {
        $v_name = '%' . $this->v_name . '%';

        return view('impact.dashboard.vehicles', [
            'vehicles' => Vehicle::where('vehicle_name', 'LIKE', $v_name)->paginate(15)
        ]);
    }
}
