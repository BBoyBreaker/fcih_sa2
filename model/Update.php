<?php

/*
 * Description of Update
 *  to update the data
 * @author MeGa
 */

class Update extends Legacy{
    
    private $tablename;
    private $data;


    public function __construct($data, $tablename) {
        if(is_array($data))
        {
            $this->data = $data;
        }
        $this->tablename = $tablename;
    }
    
    function editData($id)
    {
        $id = intval($id);        
        $query = "UPDATE $this->tablename SET ";        
        foreach ($this->data as $key => $value) {
            $query .= "`".$key."` = '".$value."', ";
        }             
        $pat = "+-0*/";
        $query .= $pat;        
        $query = str_replace(", ".$pat, " ", $query);                             
        $query .= " WHERE `id` = $id";
        
        if(!$sql = mysqli_query($this->cxn,$query))
        {
            throw new Exception("Error: can't excute the query");
        }
        else
        {
            return TRUE;
        }
        
    }
    
}

?>
