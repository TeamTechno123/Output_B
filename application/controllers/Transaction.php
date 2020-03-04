<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('User_Model');
    $this->load->model('Transaction_Model');
    date_default_timezone_set('Asia/Kolkata');
  }

  /**************************************************************************************/
  /*******                                  Sales                               *********/
  /**************************************************************************************/


  /*******************************    Quote Information      ****************************/
  public function quote_list(){
    $out_user_id = $this->session->userdata('out_user_id');
    $out_company_id = $this->session->userdata('out_company_id');
    $out_roll_id = $this->session->userdata('out_roll_id');
    if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
    $data['quote_list'] = $this->User_Model->user_list($out_company_id);
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('Transaction/quote_list',$data);
    $this->load->view('Include/footer',$data);
  }

  public function quote(){
    $out_user_id = $this->session->userdata('out_user_id');
    $out_company_id = $this->session->userdata('out_company_id');
    $out_roll_id = $this->session->userdata('out_roll_id');
    if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
    $data['quote_list'] = $this->User_Model->user_list($out_company_id);
    $this->load->view('Include/head',$data);
    $this->load->view('Include/navbar',$data);
    $this->load->view('Transaction/quote',$data);
    $this->load->view('Include/footer',$data);
  }
}
