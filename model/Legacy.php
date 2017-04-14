<?php

/*
 * Description of Awebarts
 *  main class will include the main fuctions 
 * @author Ali7amdi
 */

class Legacy {
    
    
    protected $cxn;
    
    function connectToDb()
    {
        require 'DBconnection.php';
        //require_once MODELS.'Database.php';
        //$vars = "../include/vars.php";
        $dbconnection = new DBconnection();
        $this->cxn = $dbconnection->co;
    }
    
    function close()
    {
        $this->cxn->close();
    }
    
}

?>
