<?php

class DBconnection {
    private $host;
    private $username;
    private $password;
    private $db_name;
    private $database_connection; 
    public  $co;
    public function __construct()
    {
        $this->host="localhost";
        $this->username="root";
        $this->password="";
        $this->db_name="legacy2";
        $this->database_connection = $this->database_connect();
    }
    
    private function database_connect()
    {
        $this->co = mysqli_connect($this->host, $this->username,$this->password,$this->db_name);
    }
      
    public  function database_close() 
    {
        mysqli_close($this->co);
    }  
    public function database_query($database_query) 
    {
        $query_result = mysqli_query($this->co ,$database_query);
        return $query_result;
    }
    function clean($str)
    {
        $str = trim($str); // remove 
        $str = stripslashes($str);
        $str = strip_tags($str);
        $str= mysql_real_escape_string($str);
        return $str;      
    }
    public function get_row($query)
    {
        $res =$this->database_query($query);
        return mysqli_fetch_array($res);
    }
    public function database_num_rows($database_result) {

        return mysqli_num_rows($database_result);
    }
    
}