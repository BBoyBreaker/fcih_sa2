<?php

/*
 * Description of Delete
 *  to delete the request id
 * @author MeGa
 */
include 'Legacy.php';
class Delete extends Legacy {
    
    private $tablename;
    
    public function __construct($tablename) {
        $this->tablename = $tablename;
        $this->connectToDb();
    }
    
    function deletRecordByID($id)
    {
        $id = intval($id);
        $query = "DELETE FROM `$this->tablename` WHERE `id` = '$id' ";
        if(!$sql= mysqli_query($this->cxn,$query))
        {
            throw new Exception("Error: not deleted.");
        }
        else
        {
            return TRUE;
        }
    }
    
}

?>
