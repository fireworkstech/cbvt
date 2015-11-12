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
          parent::__construct();
      }

      public function addWorklist($param)
      {
          return $this->_connection->insert($this->_table, $param);
      }
      
      public function editWorklist($parameters, $key)
      {
          return $this->_connection->updateCustom($this->_table, $key, $parameters);
      }

      public function getAllWorklists()
      {
          return $this->_connection->get($this->_table);
      }
      
      public function getWorklist($id)
      {
          if (!$id)
          {
              return NULL;
          }
          return $this->_connection->get_where($this->_table, array('_id'=>$id));
      }
}
