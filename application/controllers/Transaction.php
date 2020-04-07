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


  /****************************** Contra Information  ****************************/
    public function contra_entry_list(){
      $out_user_id = $this->session->userdata('out_user_id');
      $out_company_id = $this->session->userdata('out_company_id');
      $out_roll_id = $this->session->userdata('out_roll_id');
      if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
      $data['contra_entry_list'] = $this->User_Model->user_list($out_company_id);
      $this->load->view('Include/head',$data);
      $this->load->view('Include/navbar',$data);
      $this->load->view('Transaction/contra_entry_list',$data);
      $this->load->view('Include/footer',$data);
    }


    public function contra_entry(){
      $out_user_id = $this->session->userdata('out_user_id');
      $out_company_id = $this->session->userdata('out_company_id');
      $out_roll_id = $this->session->userdata('out_roll_id');
      if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Transaction/contra_entry');
      $this->load->view('Include/footer');
    }

    /****************************** Journal Information  ****************************/
      public function journal_entry_list(){
        $out_user_id = $this->session->userdata('out_user_id');
        $out_company_id = $this->session->userdata('out_company_id');
        $out_roll_id = $this->session->userdata('out_roll_id');
        if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
        $data['journal_entry_list'] = $this->User_Model->user_list($out_company_id);
        $this->load->view('Include/head',$data);
        $this->load->view('Include/navbar',$data);
        $this->load->view('Transaction/journal_entry_list',$data);
        $this->load->view('Include/footer',$data);
      }


      public function journal_entry(){
        $out_user_id = $this->session->userdata('out_user_id');
        $out_company_id = $this->session->userdata('out_company_id');
        $out_roll_id = $this->session->userdata('out_roll_id');
        if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
        $this->load->view('Include/head');
        $this->load->view('Include/navbar');
        $this->load->view('Transaction/journal_entry');
        $this->load->view('Include/footer');
      }

      /****************************** Payment Information  ****************************/
        public function payment_entry_list(){
          $out_user_id = $this->session->userdata('out_user_id');
          $out_company_id = $this->session->userdata('out_company_id');
          $out_roll_id = $this->session->userdata('out_roll_id');
          if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
          $data['payment_entry_list'] = $this->User_Model->user_list($out_company_id);
          $this->load->view('Include/head',$data);
          $this->load->view('Include/navbar',$data);
          $this->load->view('Transaction/payment_entry_list',$data);
          $this->load->view('Include/footer',$data);
        }


        public function payment_entry(){
          $out_user_id = $this->session->userdata('out_user_id');
          $out_company_id = $this->session->userdata('out_company_id');
          $out_roll_id = $this->session->userdata('out_roll_id');
          if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
          $this->load->view('Include/head');
          $this->load->view('Include/navbar');
          $this->load->view('Transaction/payment_entry');
          $this->load->view('Include/footer');
        }

        /****************************** Bank Information  ****************************/
          public function bank_entry_list(){
            $out_user_id = $this->session->userdata('out_user_id');
            $out_company_id = $this->session->userdata('out_company_id');
            $out_roll_id = $this->session->userdata('out_roll_id');
            if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
            $data['bank_entry_list'] = $this->User_Model->user_list($out_company_id);
            $this->load->view('Include/head',$data);
            $this->load->view('Include/navbar',$data);
            $this->load->view('Transaction/bank_entry_list',$data);
            $this->load->view('Include/footer',$data);
          }


          public function bank_entry(){
            $out_user_id = $this->session->userdata('out_user_id');
            $out_company_id = $this->session->userdata('out_company_id');
            $out_roll_id = $this->session->userdata('out_roll_id');
            if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
            $this->load->view('Include/head');
            $this->load->view('Include/navbar');
            $this->load->view('Transaction/bank_entry');
            $this->load->view('Include/footer');
          }

          /******************************Quick Receipt Information  ****************************/
            public function quick_receipt_entry_list(){
              $out_user_id = $this->session->userdata('out_user_id');
              $out_company_id = $this->session->userdata('out_company_id');
              $out_roll_id = $this->session->userdata('out_roll_id');
              if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
              $data['quick_receipt_entry_list'] = $this->User_Model->user_list($out_company_id);
              $this->load->view('Include/head',$data);
              $this->load->view('Include/navbar',$data);
              $this->load->view('Transaction/quick_receipt_entry_list',$data);
              $this->load->view('Include/footer',$data);
            }


            public function quick_receipt_entry(){
              $out_user_id = $this->session->userdata('out_user_id');
              $out_company_id = $this->session->userdata('out_company_id');
              $out_roll_id = $this->session->userdata('out_roll_id');
              if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
              $this->load->view('Include/head');
              $this->load->view('Include/navbar');
              $this->load->view('Transaction/quick_receipt_entry');
              $this->load->view('Include/footer');
            }

            /******************************Delivery Challan Information  ****************************/
              public function delivery_challan_list(){
                $out_user_id = $this->session->userdata('out_user_id');
                $out_company_id = $this->session->userdata('out_company_id');
                $out_roll_id = $this->session->userdata('out_roll_id');
                if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
                $data['delivery_challan_list'] = $this->User_Model->user_list($out_company_id);
                $this->load->view('Include/head',$data);
                $this->load->view('Include/navbar',$data);
                $this->load->view('Transaction/delivery_challan_list',$data);
                $this->load->view('Include/footer',$data);
              }


              public function delivery_challan(){
                $out_user_id = $this->session->userdata('out_user_id');
                $out_company_id = $this->session->userdata('out_company_id');
                $out_roll_id = $this->session->userdata('out_roll_id');
                if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
                $this->load->view('Include/head');
                $this->load->view('Include/navbar');
                $this->load->view('Transaction/delivery_challan');
                $this->load->view('Include/footer');
              }


          /****************************** Receipt Information  ****************************/
            public function receipt_entry_list(){
              $out_user_id = $this->session->userdata('out_user_id');
              $out_company_id = $this->session->userdata('out_company_id');
              $out_roll_id = $this->session->userdata('out_roll_id');
              if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
              $data['receipt_entry_list'] = $this->User_Model->user_list($out_company_id);
              $this->load->view('Include/head',$data);
              $this->load->view('Include/navbar',$data);
              $this->load->view('Transaction/receipt_entry_list',$data);
              $this->load->view('Include/footer',$data);
            }


            public function receipt_entry(){
              $out_user_id = $this->session->userdata('out_user_id');
              $out_company_id = $this->session->userdata('out_company_id');
              $out_roll_id = $this->session->userdata('out_roll_id');
              if($out_user_id == '' && $out_company_id == ''){ header('location:'.base_url().'User'); }
              $this->load->view('Include/head');
              $this->load->view('Include/navbar');
              $this->load->view('Transaction/receipt_entry');
              $this->load->view('Include/footer');
            }

}
