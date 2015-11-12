<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   * Description of User
   *
   * @author Ali Zain
   */
  class User extends CI_Controller {

      public function __construct() {
          parent::__construct();
          $this->load->model('usermodel');
      }

      public function index()
      {
        $data = array();
        $this->CI->load->view('user/login', $data);
      }

      public function register() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[20]');

        if ($this->form_validation->run() == FALSE) {
          return redirect('register');
        }

        $parameters = $this->input->post();
        $this->usermodel->register($parameters);
        return redirect();
      }

      public function login() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[20]');

        if ($this->form_validation->run() == FALSE) {
          $this->session->set_flashdata('login_error', 'Invalid Username or Password');
          return redirect('login');
        }
          if ($this->session->userdata('logged_in')) {
              return redirect();
          }

          $user = $this->input->post('username');
          $pass = $this->input->post('password');
          $results = $this->usermodel->login($user, $pass);
          if (!$results) {
              $this->session->set_flashdata('login_error', 'Invalid Username or Password');
              return redirect('login');
          } else {
              // error_log(print_r($results , true));
              $this->session->set_userdata('logged_in', $results[0]);
              return redirect();
          }
      }

      public function displayRegister() {
          $data['title'] = 'Cross Border Vehicle Transport | Register';
          $data['content'] = 'user/register';
          return $this->load->view("dashboard/dashboard",$data);
           
      }

      public function displayLogin() {
          if (!$this->session->userdata('logged_in')) {
            $data['title'] = 'Cross Border Vehicle Transport | Login';
            $data['content'] = 'user/login';
            
           return $this->load->view('dashboard/dashboard', $data);
          }          
          return redirect();
      }

      public function logout() {
          $this->session->sess_destroy();
          redirect('login');
      }
  }
  