<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   * Description of User
   *
   * @author Ali Zain
   */
  class Context extends MY_Controller {

  	      public function __construct() {
          parent::__construct();
          $this->load->model('usermodel');
      }
      public function index()
      {

      	$type = $this->session->logged_in['type'];
        if ($type == 'driver') {
          $data['title'] = 'Cross Border Vehicle Transport | Driver';
          $data['content'] = 'user/driver';
        } else if ($type == 'dmv') {
          $data['title'] = 'Cross Border Vehicle Transport | DMV';
          $data['content'] = 'user/dmv';
        } else if ($type == 'bank') {
          $data['title'] = 'Cross Border Vehicle Transport | Bank';
          $data['content'] = 'user/bank';
        }
          return $this->load->view("dashboard/dashboard",$data);
      }
      public function driver()
      {
      	$data = $this->input->post();
      	var_dump($data);
      }


  }