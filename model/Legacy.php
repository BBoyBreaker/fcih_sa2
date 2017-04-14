<?php

/*
 * Description of Awebarts
 *  main class will include the main fuctions 
 * @author Ali7amdi
 */

class Legacy {
    
    
    private $cxn;
    
    function connectToDb()
    {
        require 'Database.php';
        //require_once MODELS.'Database.php';
        $vars = "../include/vars.php";
        $this->cxn = new Database($vars);
    }
    
    function close()
    {
        $this->cxn->close();
    }
    
}

?>
