<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    // KostLab : Write Less Do More

    $this->load->helper('dbs');
  }

  function index()
  {
    echo "HI";
  }

  function login(){
// Action
if($this->input->post('phone')!=''){
    $phone=$this->input->post('phone',TRUE);
    $password=$this->input->post('password',TRUE);
    $data=getData('users',array('phone'=>$phone,'password'=>sha1($password)),1);
    if($data->num_rows()>0){
        $data=$data->row();
        $sessions=array(
            'status'=>'login',
            'id'=>$data->id,
            'name'=>$data->name,
            'email'=>$data->email,
            'phone'=>$data->phone,
            'institute'=>$data->institute,
            'gender'=>$data->gender,
            'role'=>$data->role
        );
        $this->session->set_userdata($sessions);
        if($data->role==1){
            redirect(base_url('dashboard'));
        }else{
            redirect(base_url('lesswaster'));
        }
    }else{
        $this->session->set_flashdata('flashMessage', 'No hp atau password salah');
        redirect(base_url('login'));
    }
}else{
    // Views
    $this->load->view('auth/login');
}
  }

  function register(){

    $name=$this->input->post('name');
    $phone=$this->input->post('phone');
    $email=$this->input->post('email');
    $institute=$this->input->post('institute');
    $password=sha1($this->input->post('password'));
    if($name!='' && $phone!='' && $email!='' && $password!='' && $institute != ''){
     $dataRegister=array('name'=>$name,'phone'=>$phone,'email'=>$email,'password'=>$password,'role'=>2,'institute'=>$institute);
     $checkData=getData('users',array('phone'=>$phone))->num_rows();
     if($checkData > 0){
      $this->session->set_flashdata('flashDanger', 'No hp sudah terdaftar, silakan konfirmasi admin');
      redirect(base_url('register'));
     }else{
      // Lanjut Daftar
      var_dump($dataRegister);
      insertData($dataRegister,'users');
      $this->session->set_flashdata('flashSuccess', 'Pendaftaran berhasil, silakan login menggunakan no hp: '.$phone);
      redirect(base_url('login'));
     }
    }else{
      $this->load->view('auth/register');
    }


// Action

// Views
  }

  function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }

 

}