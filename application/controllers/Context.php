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
          $this->load->model('contextmodel');
          $this->load->helper('context');
      }
      public function index()
      {

      	$type = $this->session->logged_in['type'];
        if ($type == 'driver') {
          $data['title'] = 'Cross Border Vehicle Transport | Driver';
          $data['content'] = 'user/driver';
        } else if ($type == 'dmv') {
          $data['title'] = 'Cross Border Vehicle Transport | DMV';
          $data['worklists'] = $this->contextmodel->getAllWorklists();
          $data['content'] = 'user/dmv';
        } else if ($type == 'bank') {
          $data['title'] = 'Cross Border Vehicle Transport | Bank';
          $data['worklists'] = $this->contextmodel->getAllWorklists(array('is_dmv'=>true));
          $data['content'] = 'user/bank';
        }
          return $this->load->view("dashboard/dashboard",$data);
      }
      public function driver()
      {
        $this->form_validation->set_rules('firstname', 'Firstname', 'trim|required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('license', 'License', 'trim|required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('passport', 'Passport', 'trim|required|min_length[3]|max_length[20]');
        // $this->form_validation->set_rules('start_date', 'Start Date', 'trim|required|min_length[10]');
        // $this->form_validation->set_rules('end_date', 'End Date', 'trim|required|min_length[10]');
        $this->form_validation->set_rules('vehicle_registration', 'Vehicle Registration', 'trim|required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('vin', 'VIN', 'trim|required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('vehicle_company', 'Vehicle Company', 'trim|required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('vehicle_model', 'Vehicle Model', 'trim|required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('vehicle_year', 'Vehicle Year', 'trim|required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('vehicle_registration', 'Vehicle Registration', 'trim|required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('vehicle_color', 'Vehicle Color', 'trim|required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('bank_name', 'Bank Name', 'trim|required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('loan', 'Loan', 'trim|required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('insurance_company', 'Insurance Company', 'trim|required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('insurance_policy', 'Insurance Policy', 'trim|required|min_length[3]|max_length[20]');

        // if ($this->form_validation->run() == FALSE) {
        //   $this->session->set_flashdata('login_error', 'Invalid Username or Password');
        //   return redirect();
        // }

      	$data = $this->input->post();
        $data['user_id'] = $this->session->logged_in['_id'];
        $this->contextmodel->addWorklist($data);
      	// var_dump($data);
      }

      public function getDmvData() {
        $id = $this->input->post('id');
        $result = $this->contextmodel->getWorklist($id);

        echo getDmvData($result);
      }

      public function getBankData() {
        $id = $this->input->post('id');
        $result = $this->contextmodel->getWorklist($id);

        echo getBankData($result);
      }

      public function dmvRequest() {
        $decision = $this->input->post('decision');
        $id = $this->input->post('id');

        return $this->contextmodel->editWorklist(array('dmv_approve'=>$decision) , $id);
      }

      public function BankRequest() {
        $decision = $this->input->post('decision');
        $id = $this->input->post('id');

        return $this->contextmodel->editWorklist(array('bank_approve'=>$decision) , $id);
      }

  }