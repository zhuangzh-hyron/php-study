<?php 
class User_m extends CI_Model{
    private $table = "user";
    function __construct()
    {
        parent::__construct();
    }

    public function register($data){
        $this->db->insert($this->table,$data);
    }
}