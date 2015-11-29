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
          //$db = $this->load->database(); //This is for connecting sql
          parent::__construct();
      }

      public function addWorklist($param)
      {
          // return $this->db->insert('worklist', $param);
          return $this->_connection->insert($this->_table, $param);
      }
      
      public function editWorklist($parameters, $key)
      {
          // return $this->db->update('worklist', $parameters, "id = ".$key);
          return $this->_connection->updateCustom($this->_table, $key, $parameters);
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
          if (!$id)
          {
            return NULL;
          }
          // return $this->db->get_where('worklist', array('id' => $id));
          return $this->_connection->get_where($this->_table, array('_id'=>new MongoId($id)));
      }
}
