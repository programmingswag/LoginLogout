<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginout_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}
    public function saveRecords($data)
    {
        $query 	= $this->db->insert('loginout', $data);
        if($query)
        {
        	return true;
        }
        return false;
    }
    public function checkRecords($username, $password)
    {
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query=$this->db->get('loginout');
        if($query->num_rows()>0)
        {
            return $query->row();
        }
        return false;

    }
}