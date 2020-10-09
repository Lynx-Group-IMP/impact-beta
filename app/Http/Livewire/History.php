<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ride;
use Auth;

class History extends Component
{
    use WithPagination;

    public $ride_name;
    public $only_public = false;
    //public $rides;
    public $currentPage = 1;

    
    public function render()
    {
        $ride_name = '%' . $this->ride_name . '%';

        //$this->rides = Ride::where('name', 'LIKE', $ride_name)->paginate(3);
        return view('livewire.history', [
            'rides' => Ride::where('name', 'LIKE', $ride_name)->paginate(3)
        ]);
    }
}
