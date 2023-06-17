<?php

namespace App\Http\Livewire;

use App\Models\AggregationFunction;
use App\Models\DbConnection;
use App\Models\ImportData;
use Livewire\Component;

class OutputType extends Component
{
    public $query_list_data;
    public $query_array_data;
    public $query_table;
    public $query_mix;
    public DbConnection $dbconnection;
    public ImportData $import_data;
    public AggregationFunction $aggregation_function;

    public function next(){
        if($this->query_list_data = 'query_list_data'){
            return redirect()->route('query_list.index' , ['dbconnection' => $this->dbconnection->id , 'import_data' => $this->import_data->id , 'aggregation_function' => $this->aggregation_function->id]);
        }else if($this->query_array_data = 'query_array_data'){
            return redirect()->route('query_array.index' , ['dbconnection' => $this->dbconnection->id , 'import_data' => $this->import_data->id , 'aggregation_function' => $this->aggregation_function->id]);
        }
        else if($this->query_table){
            return redirect()->route('query_table.index' , ['dbconnection' => $this->dbconnection->id , 'import_data' => $this->import_data->id , 'aggregation_function' => $this->aggregation_function->id]);
        }
        else if($this->query_mix){
            return redirect()->route('query_mix.index' , ['dbconnection' => $this->dbconnection->id , 'import_data' => $this->import_data->id , 'aggregation_function' => $this->aggregation_function->id]);
        }
    }
    
    public function render()
    {
        return view('livewire.output-type');
    }
}
