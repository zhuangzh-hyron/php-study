<?php 
class User_m extends CI_Model{
    private $table = "user";
    function __construct()
    {
        parent::__construct();
    }

    public function register($data){
        $data = 1;
        $this->db->insert($this->table,$data);
    }
}