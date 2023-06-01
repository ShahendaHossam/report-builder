<?php

namespace App\Http\Livewire;

use App\Models\AggregationFunction;
use App\Models\DbConnection;
use App\Models\ImportData;
use Livewire\Component;

class OutputType extends Component
{
    public DbConnection $dbconnection;
    public ImportData $import_data;
    public AggregationFunction $aggregation_function;
    
    public function render()
    {
        return view('livewire.output-type');
    }
}
