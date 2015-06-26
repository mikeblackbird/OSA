<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Start_model extends CI_Model {

    function Start_model()
    {
        //
    }

    public function getTable(){
        $titles = array();
    	$query = $this->db->get('tasks');
			foreach ($query->result() as $row){
			    $titles[] = $row->name;
			}
			return $titles;
    }

    public function query($query){

    }
}