<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// ------------------------------------------------------------------------

abstract class MY_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db->conn_id->setAttribute( PDO::ATTR_EMULATE_PREPARES, false);
    }
}