<?php

/*
 * add class 
 *  insert the data into mysql database
 * 
 * @author MeGa
 */include 'Legacy.php';
class Add extends legacy {
    
    private $data;
    private $tablename;
    protected $cxn; 

    public function __construct($data, $tablename)
    {
        if(is_array($data))
        {
            $this->data      = $data;
            $this->tablename = $tablename;
        }
        else
        {
            throw new Exception("Error: the data must be in an array.");
        }
        
        $this->connectToDb();
        
        // isert the data into the table
        $this->AddData($this->data);
        
        $this->close();        
    }
    
    // isert the data into the table
    function AddData($data)
    {
        foreach ($data as $key => $value)
        {
            $keys[]  = $key;
            $values[] = $value;
        }
        
        $tblKeys    = implode($keys, ","); 
        $dataValues = '"'.  implode($values, '","').'"';
        
       $query = "INSERT INTO $this->tablename ($tblKeys) VALUES ($dataValues)";
        
        if($sql = mysqli_query($this->cxn,$query))
        {
            return TRUE;
        }
        else
        {
            throw new Exception("Error: Can not excute the query.");
            return FALSE;
        }          
    }
        
    
}

?>
