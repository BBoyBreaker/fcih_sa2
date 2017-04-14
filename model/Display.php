<?php
/*
 * Display to get the requested data from the databse
 * @author MeGa
 */
include 'Legacy.php';
class Display extends Legacy {

    private $tablename;
    private $recData= array();

    public function __construct($tablename) {

        $this->tablename = $tablename;

        $this->connectToDb();
    }

    function getAllData()
    {
         $query = "SELECT * FROM `$this->tablename` ORDER BY `id` ASC";   
         if (!$sql = mysqli_query($this->cxn,$query)) {
            throw new Exception("Error: Can not excute the query.");
        } else {
            $num = mysqli_num_rows($sql);
            if($num>0)
            {
                for($i=0; $i<$num; $i++)
                {
                    $data[$i] = mysqli_fetch_array($sql);
                }                    
            }
        }
        return @$data;
    }

    function getLastRecordDESC() {

        $query = "SELECT * FROM `$this->tablename` ORDER BY `id` DESC LIMIT 1";

        if (!$sql = mysqli_query($query)) {
            throw new Exception("Error: Can not excute the query..");
        } else {
            $num = mysqli_num_rows($sql); // 1            
            while ($num > 0) {
                $data = mysqli_fetch_array($sql);
                $num--;
            }
        }
        return $data;
    }
    
    function getRecordByID($id)
    {
        $id = intval($id);
        
        $query = "SELECT * FROM `$this->tablename` WHERE `id`= $id";
         if (!$sql = mysqli_query($query)) {
            throw new Exception("Error: Can not excute the query...");
        } else {
            $num = mysqli_num_rows($sql);
            while ($num > 0) {
                $this->recData = mysqli_fetch_array($sql);
                $num--;
            }
        }
        return $this->recData;
    }
    
    
    function getAllDataByID($id, $column = "id")
    {
        $id = intval($id);
        
        $query = "SELECT * FROM `$this->tablename` WHERE `$column`= $id ORDER By `id` ASC";
         if (!$sql = mysqli_query($query)) {
            throw new Exception("Error: Can not excute the query...");
        } else {
            $num = mysqli_num_rows($sql);
            if($num>0)
            {
                for($i=0; $i<$num; $i++)
                {
                    $data[$i] = mysqli_fetch_array($sql);                      
                }                    
            }
        }
        return $data;
    }

}

?>
