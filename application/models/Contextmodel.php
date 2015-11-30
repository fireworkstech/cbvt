<?php

  if (!defined('BASEPATH')) {
      exit('No direct script access allowed');
  }

  class Contextmodel extends CI_Model {

      private $_connection;
      private $_table;

      public function __construct() {
          $this->load->library("Mongo_db");
          $this->_connection = new Mongo_db();
          $this->_table = "worklist";
          $db = $this->load->database(); //This is for connecting sql
          parent::__construct();
      }

      public function addWorklist($param)
      {
          return $this->db->insert('worklist', $param);
          // return $this->_connection->insert($this->_table, $param);
      }

      public function editDMVWorklist($decision , $id)
      {
        $rs = $this->db->query('update worklist set dmv_checked="true" , dmv_approve='.$decision);
        return ;
      }

      public function editBankWorklist($decision , $id)
      {
        $rs = $this->db->query('update worklist set bank_checked="true" , bank_approve='.$decision);
        return ;
      }
      
      public function editWorklist($parameters, $key)
      {
          // return $this->db->update('worklist', $parameters, "id = ".$key);
          return $this->_connection->updateCustom($this->_table, $key, $parameters);
      }

      public function getDMVWorklists() {
        $rs = $this->db->query('select * from worklist where dmv_checked="false"');
          return $rs->result_array();
      }
      public function getBankWorklists() {
        $rs = $this->db->query('select * from worklist where dmv_approve=1 and bank_checked="false"');
        return $rs->result_array();
      }
      public function getAllWorklists($param=false)
      {
          if ($param) {
            
            return $this->_connection->get_where($this->_table, $param);  
          }

          // return  $this->db->get('worklist');
          return $this->_connection->get($this->_table);
      }
      
      public function getWorklist($id)
      {
          $rs = $this->db->query('select * from worklist where id='.$id); //sql
          return $rs->result_array();
          return $this->_connection->get_where($this->_table, array('_id'=>new MongoId($id)));  //mongo db
      }

      public function getWorklistByUser($id)
      {
          $rs = $this->db->query('select * from worklist where user_id="'.$id.'"');
          return $rs->result_array();
          // return $this->_connection->get_where($this->_table, array('user_id'=>new MongoId($id)));
      }
}
