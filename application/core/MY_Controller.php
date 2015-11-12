<?php
  /**
   * This is the controller responsible for redirecting all the logged out user
   * to login page
   *
   * @author Ali Zain
   */
  class MY_Controller extends CI_Controller{
      public function __construct() {
          parent::__construct();
          $this->check_auth();
      }
      public function check_auth()
      {
          if(!$this->session->userdata('logged_in')){
            $this->session->sess_destroy();
            redirect('login');
          }
      }
  }
  