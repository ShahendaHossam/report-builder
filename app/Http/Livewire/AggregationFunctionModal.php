<?php

namespace App\Http\Livewire;

use App\Models\DbConnection;
use Livewire\Component;
use PDO;

class AggregationFunctionModal extends Component
{
    public function render()
    {
        return view('livewire.aggregation-function-modal');
    }
}
