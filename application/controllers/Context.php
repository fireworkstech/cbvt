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
          $this->load->model('usermodel');
          $this->load->helper('context');
          // $this->load->library('word');
      }
      public function index()
      {

        $type = $this->session->logged_in['type'];
        if ($type == 'driver') {
          $data['title'] = 'Cross Border Vehicle Transport | Driver';
          $id = $this->session->logged_in['id']; //this is for sql
          // $id = $this->session->logged_in['_id']; // this is for mongo db
          // error_log($id);
          $result = $this->contextmodel->getWorklistByUser($id);
          
          if (isset($result[0]['bank_approve']) && $result[0]['bank_approve'] == '1') {
            $this->load->library('Zend');
            $this->zend->load('Zend/barcode');
          }

          //This is for mongo db to display barcode
          // if (isset($result[0]['bank_approve']) && $result[0]['bank_approve'] == 'true') {
          //   $this->load->library('Zend');
          //   $this->zend->load('Zend/barcode');
          // }
          
          $data['content'] = 'user/driver';
        } else if ($type == 'dmv') {
          $data['title'] = 'Cross Border Vehicle Transport | DMV';
          $data['worklists'] = $this->contextmodel->getDMVWorklists(); //this is for sql
          // $data['worklists'] = $this->contextmodel->getAllWorklists(array('dmv_checked'=>'false')); //mongo db
          $data['content'] = 'user/dmv';
        } else if ($type == 'bank') {
          $data['title'] = 'Cross Border Vehicle Transport | Bank';
          $data['worklists'] = $this->contextmodel->getBankWorklists(); //this is for sql
          // $data['worklists'] = $this->contextmodel->getAllWorklists(array('dmv_approve'=>'true' , 'bank_checked'=>'false'));
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
        $data['user_id'] = $this->session->logged_in['id']; //this is for sql
        // $data['user_id'] = $this->session->logged_in['_id']; //this is for mongo db
        $data['dmv_checked'] = 'false';
        $data['bank_checked'] = 'false';
        $this->contextmodel->addWorklist($data);

        $this->session->sess_destroy();
        redirect('login');
      	// var_dump($data);
      }

      public function getDmvData() {
        $id = $this->input->post('id');
        $result = $this->contextmodel->getWorklist($id);
        
        echo getDmvData($result[0]);
      }

      public function getBankData() {
        $id = $this->input->post('id');
        $result = $this->contextmodel->getWorklist($id);
        
        echo getBankData($result[0]);
      }

      public function dmvRequest() {
        $decision = $this->input->post('decision');
        $id = $this->input->post('id');

        return $this->contextmodel->editDMVWorklist($decision , $id);  //sql
        // return $this->contextmodel->editWorklist(array('dmv_approve'=>$decision , 'dmv_checked'=>'true') , $id); //mongo
      }

      public function bankRequest() {
        $decision = $this->input->post('decision');
        $id = $this->input->post('id');

        return $this->contextmodel->editBankWorklist($decision , $id);  //sql
        // return $this->contextmodel->editWorklist(array('bank_approve'=>$decision , 'bank_checked'=>'true') , $id); //mongo
      }

  }