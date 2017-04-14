<?php
require_once  'DBconnection.php';

class User {
    private $id;
    private $username;
    private $email;
    private $password;
    public $intersting;
    public $city;
    private $code;
    private $active;
    private $type_id;
    
        
    public function _construct($user_id)
    {
        if($user_id !=""){
                    $Db_object=new DbConnection();
                    $SQL="SELECT * FROM `users`  where id=$user_id";
                    $data=$Db_object->get_row($SQL);
                    $this->id=$data['id'];
                    $this->username=$data['name'];
                    $this->email=$data['email'];
                    $this->password=$data['password'];
                    $this->city=$data['city_id'];
                    $this->intersting=$data['inter_id'];
        
                    $this->code=$data['code'];
                    $this->type_id=$data['user_type'];
                    $this->active=$data['active'];
        }
    }
    public function get_id(){
        return $this->id;
    }
    public function set_id($id){
        $this->id=$id;
    }
      public function get_username(){
        return $this->username;
    }
    public function set_username($username){
        $this->username=$username;
    }
    public function set_password($password){
        $this->password=$password;
    }
       public function get_password(){
        return $this->password;
    }
    public function set_user_type($type){
        $this->type_id=$type;
    }
       public function get_user_type(){
        return $this->type_id;
    }
     public function  login($email, $password)
    {
        $Db_object=new DbConnection();
        $this->email=$Db_object->clean($email);
        $this->password=$Db_object->clean(md5($password));
        $select_user_SQL="SELECT * From `users` Where `email`='$this->email' AND `password`='$this->password' AND `active`='1' ";
        $select_user_Result=$Db_object->database_query($select_user_SQL);
        $test = $Db_object->database_num_rows($select_user_Result);
        if( $test> 0)
         {
            $user_data=$Db_object->get_row($select_user_SQL);
            $this->id=$user_data['id'];
            $this->username=$user_data['name'];
            return TRUE;
         }
         else
         { 
             
             return FALSE;
         } 
    }
    public function active($email,$password,$code)
    {
        $Db_object=new DbConnection();
        $this->code=$Db_object->clean($code);
        $this->email=$Db_object->clean($email);
        $this->password=$Db_object->clean(md5($password));
        $user_sql="SELECT * FROM `users` where `email`='$this->email' AND `password`='$this->password' AND `code`='$this->code'";
        $sql_result=$Db_object->database_query($user_sql);
        
        if($Db_object->database_num_rows($sql_result) > 0)
        {
            $data= $Db_object->get_row($user_sql);
            $this->id=$data['id'];
            $this->active=$data['active'];
            if($this->active==0)
            {
                  $sql="UPDATE `users` SET `active` = '1' WHERE `users`.`id` = '$this->id'";
                  $oper=$Db_object->database_query($sql);
                  if($oper)
                  {
                       return TRUE;
                  }
                  else 
                  {
                      return FALSE;
                  }
            }     
        }
    }
}
