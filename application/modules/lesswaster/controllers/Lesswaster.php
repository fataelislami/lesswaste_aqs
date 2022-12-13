<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lesswaster extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //KostLab : Write Less Do More
    if($this->session->userdata('status')!='login'){
      redirect(base_url('login'));
    }
    if($this->session->userdata('role')!=2){
      redirect(redirect($_SERVER['HTTP_REFERER']));
    }
    $this->load->helper('dbs');
    $this->load->model("dashboard/Data_sedekah_model");
  }

  function index()
  {

    // Data Riwayat Sedekah
    $data_riwayat=getData('data_sedekah',array('users_id'=>$this->session->userdata('id')));
    $data = array(
      'content'=>'lesswaster/dashboard',
      'data_riwayat'=>$data_riwayat,
      'leaderboards'=>$this->Data_sedekah_model->get_leaderboards(),
      'sidebar'=>'lesswaster/sidebar'
     );
    $this->template->load($data);
  }

  function qrcode(){
    $phone=$this->session->userdata('phone');
    $this->load->library('ciqrcode');
    header("Content-Type: image/png");
    $params['data'] = $phone;
    $this->ciqrcode->generate($params);
  }

}
