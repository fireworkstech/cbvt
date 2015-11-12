<?php

  if (!defined('BASEPATH')) {
      exit('No direct script access allowed');
  }

  /**
   * User Model is for Login/Registeration/User Profiling and Permissions
   *
   * @author Ali Zain
   */
  class Usermodel extends CI_Model {

      private $_connection;
      private $_table;

      public function __construct() {
          $this->load->library("Mongo_db");
          $this->_connection = new Mongo_db();
          $this->_table = "users";
          parent::__construct();
      }

      public function login($username, $pass) 
      {
          $logininfo = $this->_connection->get_where($this->_table, array('username' => $username, 'password' => $pass));
          if ($logininfo) {
              return $logininfo;
          }
          return false;
      }
      public function register($param)
      {
        
          return $this->_connection->insert($this->_table, $param);
      }
      public function update_user($parameters, $key)
      {
          return $this->_connection->updateCustom($this->_table, $key, $parameters);
      }
      public function getAllUsers()
      {
          return $this->_connection->get($this->_table);
      }
      
      public function getUser($id)
      {
          if (!$id)
          {
              return NULL;
          }
          return $this->_connection->get_where($this->_table, array('_id'=>$id));
      }
      public function deleteUser($id)
      {
          return $this->_connection->deleteEntry($this->_table,$id); 
      }
    }
