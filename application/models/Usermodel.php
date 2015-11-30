<?php

  if (!defined('BASEPATH')) {
      exit('No direct script access allowed');
  }

  class Usermodel extends CI_Model {

      private $_connection;
      private $_table;

      public function __construct() {
          $this->load->library("Mongo_db");
          $this->_connection = new Mongo_db();
          $this->_table = "users";
          $db = $this->load->database(); //This is for connecting sql
          parent::__construct();
      }

      public function login($username, $pass) 
      {
        return $this->db->get_where('users', array('username' => $username , 'password'=>$pass));
          // $logininfo = $this->_connection->get_where($this->_table, array('username' => $username, 'password' => $pass));
          // if ($logininfo) {
          //     return $logininfo;
          // }
          // return false;
      }
      public function register($param)
      {
          unset($param['submit']);
          return $this->db->insert('users', $param);
          // return $this->_connection->insert($this->_table, $param);
      }
      public function update_user($parameters, $key)
      {
          return $this->_connection->updateCustom($this->_table, $key, $parameters);
      }
      public function getAllUsers()
      {
          // return  $this->db->get('users');
          return $this->_connection->get($this->_table);
      }
      
      public function getUser($id)
      {
          if (!$id)
          {
              return NULL;
          }
          // return $this->db->get_where('users', array('id' => $id));
          return $this->_connection->get_where($this->_table, array('_id'=>$id));
      }
      public function deleteUser($id)
      {
          // return $this->db->delete('users', array('id' => $id));
          return $this->_connection->deleteEntry($this->_table,$id); 
      }
    }
