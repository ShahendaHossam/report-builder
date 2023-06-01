<?php

namespace App\Http\Livewire;

use App\Models\AggregationFunction as ModelsAggregationFunction;
use App\Models\DbConnection;
use App\Models\ImportData;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PDO;

class AggregationFunction extends Component
{
    public $tables = array();
    public $all_columns = array();
    public DbConnection $dbconnection;
    public ImportData $import_data;
    public ModelsAggregationFunction $aggregation_function;
    public $databases = array();
    public $group_by_columns = array();
    
    protected $rules = [
        'aggregation_function.affected_column' => 'nullable|max:255',
        'aggregation_function.where_column' => 'nullable|max:255',
        'aggregation_function.groupby_column' => 'nullable|max:255',
    ];

    public function getData()
    {
        if ($this->dbconnection->db_type == 'mysql') {
            $db_name = $this->import_data->databases;
            $db_host = $this->dbconnection->host;
            $dsn = "mysql:dbname=$db_name;host=$db_host";
            $sql = new PDO($dsn, $this->dbconnection->username, $this->dbconnection->password);
            $sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '" . $this->import_data->tables . "' AND TABLE_SCHEMA = '" . $this->import_data->databases . "';";
            $query = $sql->query($stmt);
            $this->all_columns = $query->fetchAll(PDO::FETCH_COLUMN);
        }
    }

    public function setFunction()
    {
        if ($this->dbconnection->db_type == 'mysql') {
            $db_name = $this->import_data->databases;
            $db_host = $this->dbconnection->host;
            $dsn = "mysql:dbname=$db_name;host=$db_host";
            $sql = new PDO($dsn, $this->dbconnection->username, $this->dbconnection->password);
            $sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $data_stmt3 = "SELECT `".$this->aggregation_function->affected_column."` FROM `".$this->import_data->tables."` WHERE `".$this->aggregation_function->where_column."` GROUP BY `".$this->aggregation_function->groupby_column."`;";
            $query4 = $sql->query($data_stmt3);
            // dd($query4);
            //PDO::FETCH_ASSOC :- Return next row as an array indexed by column name
            $this->group_by_columns = $query4->fetchAll(PDO::FETCH_ASSOC);
            // dd($this->group_by_columns);
        }
    }

    public function next(){
        $users = Auth::user();
        $this->aggregation_function->user_id = $users->id;
        $this->aggregation_function->save();

        $this->dbconnection->aggregation_function_id = $this->aggregation_function->id;
        $this->dbconnection->save();

        return redirect()->route('output_type.index' , ['dbconnection' => $this->dbconnection->id ,'import_data' => $this->import_data->id , 'aggregation_function' => $this->aggregation_function->id ]);
    }

    public function mount()
    {
        $this->getData();
        $this->aggregation_function = new ModelsAggregationFunction();
    }

    public function render()
    {
        return view('livewire.aggregation-function');
    }
}
