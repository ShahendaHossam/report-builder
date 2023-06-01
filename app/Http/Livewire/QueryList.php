<?php

namespace App\Http\Livewire;

use App\Models\AggregationFunction;
use App\Models\DbConnection;
use App\Models\ImportData;
use Livewire\Component;
use PDO;

class QueryList extends Component
{
    public $query_list = array();
    public DbConnection $dbconnection;
    public ImportData $import_data;
    public AggregationFunction $aggregation_function;

    public function getQueryAsList()
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
            $this->query_list = $query4->fetchAll(PDO::FETCH_ASSOC);
            // dd($this->query_list);
        }
    }

    public function mount()
    {
        $this->getQueryAsList();
        // $this->dbconnection = new DbConnection();

    }

    public function render()
    {
        return view('livewire.query-list');
    }
}
