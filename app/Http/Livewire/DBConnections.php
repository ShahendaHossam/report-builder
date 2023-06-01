<?php

namespace App\Http\Livewire;

use App\Models\DbConnection;
use Livewire\Component;
use mysqli;
use PDO;
use PDOException;

class DBConnections extends Component
{

  public DbConnection $dbconnection;
  public $servername;
  public $username;
  public $password;
  public $db_type;
  public $databases;
  public $allDatabases;
  public $isOpen = false;

  protected $listeners = ['connection'];

  protected $rules = [
    'dbconnection.db_type' => 'nullable|max:255',
    'dbconnection.host' => 'nullable|max:255',
    'dbconnection.username' => 'nullable|max:255',
    'dbconnection.password' => 'nullable|max:255',
];


  public function connection()
  {
    $servername = $this->dbconnection->host;
    $username = $this->dbconnection->username;
    $password = $this->dbconnection->password;

    $this->validate();
    $this->dbconnection->save();

    if ($this->dbconnection->db_type == 'mysql') {
      try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
        // $this->dbconnection->save();
        session()->flash('message', 'DataBase Connected Successfully');
        $this->isOpen = true;
        return redirect()->route('importdataconnection.index' , $this->dbconnection->id);
      } catch (PDOException $e) {
        session()->flash('message', 'DataBase Didnot Connected Successfully');
        // echo "Connection failed: " . $e->getMessage();
      }
    }elseif ($this->dbconnection->db_type == 'pgsql') {
      try {
        $conn = new PDO("pgsql:host=$servername", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
        // $this->dbconnection->save();
        session()->flash('message', 'DataBase Connected Successfully');
        $this->isOpen = true;
        return redirect()->route('importdataconnection.index' , $this->dbconnection->id);
      } catch (PDOException $e) {
        session()->flash('message', 'DataBase Didnot Connected Successfully');
        // echo "Connection failed: " . $e->getMessage();
      }
    }
  }
  public function cancel()
  {
    redirect()->route('option.index');
  }
  public function mount()
  {
    $this->dbconnection = new DbConnection();
  }
  public function render()
  {
    return view('livewire.d-b-connections');
  }
}
