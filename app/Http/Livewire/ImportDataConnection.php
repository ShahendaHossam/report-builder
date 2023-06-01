<?php

namespace App\Http\Livewire;

use App\Models\DbConnection;
use App\Models\ImportData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use PDO;

class ImportDataConnection extends Component
{
    public $tables = array();
    public $all_databases = array();
    public $all_columns = array();
    public DbConnection $dbconnection;
    public ImportData $import_data;
    public $databases = array();
    public $data = array();
    public $group_by_columns = array();
    public $affected_column;
    public $where_column;
    public $groupby_column;

    protected $rules = [
        'import_data.databases' => 'nullable|max:255',
        'import_data.tables' => 'nullable|max:255',
    ];

    public function conn(DbConnection $dbconnection)
    {
        if ($this->dbconnection->db_type == 'mysql') {
            $sql = new PDO("mysql:host=$dbconnection->host", $dbconnection->username, $dbconnection->password);
            $sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $sql;
        }
    }

    public function getTables()
    {
        if ($this->dbconnection->db_type == 'mysql') {
            $db_name = $this->import_data->databases;
            $db_host = $this->dbconnection->host;
            $dsn = "mysql:dbname=$db_name;host=$db_host";
            $sql = new PDO($dsn, $this->dbconnection->username, $this->dbconnection->password);
            $sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = 'SHOW TABLES';
            $query = $sql->query($stmt);
            $this->tables = $query->fetchAll(PDO::FETCH_COLUMN);
        }
    }

    public function getDatabases()
    {
        $stmt = 'SHOW DATABASES';
        if ($this->conn($this->dbconnection)) {
            $query = $this->conn($this->dbconnection)->query($stmt);
            $this->all_databases = $query->fetchAll(PDO::FETCH_COLUMN);
        }
    }

    public function getColumns()
    {
        if ($this->dbconnection->db_type == 'mysql') {
            $db_name = $this->import_data->databases;
            $db_host = $this->dbconnection->host;
            $dsn = "mysql:dbname=$db_name;host=$db_host";
            $sql = new PDO($dsn, $this->dbconnection->username, $this->dbconnection->password);
            $sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '".$this->import_data->tables."' AND TABLE_SCHEMA = '" . $this->import_data->databases ."';";
            $query = $sql->query($stmt);
            $this->all_columns = $query->fetchAll(PDO::FETCH_COLUMN);
            $data_stmt = "SELECT * FROM `".$this->import_data->tables."`;";
            $query2 = $sql->query($data_stmt);
            //PDO::FETCH_ASSOC :- Return next row as an array indexed by column name
            $this->data = $query2->fetchAll(PDO::FETCH_ASSOC);
            // dd($this->data);
        }
    }

    public function aggregationFunction(){
        $users = Auth::user();
        $this->import_data->db_connection_id =$this->dbconnection->id;
        $this->import_data->user_id = $users->id;
        $this->import_data->save();

        $this->dbconnection->import_data_id = $this->import_data->id;
        $this->dbconnection->save();
        return redirect()->route('aggregation_function.index' , ['dbconnection' => $this->dbconnection->id ,'import_data' => $this->import_data->id]);

    }

    public function mount()
    {
        $this->getDatabases();
        $this->import_data = new ImportData();
    }

    public function render()
    {
        return view('livewire.import-data-connection');
    }
}
