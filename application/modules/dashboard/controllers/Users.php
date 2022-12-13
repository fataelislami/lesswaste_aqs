<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Users extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Users_model');
            $this->load->library('form_validation');
	    $method=$this->router->fetch_method();
        if($this->session->userdata('status')!='login'){
            redirect(base_url('login'));
          }
          if($this->session->userdata('role')!=1){
            redirect(redirect($_SERVER['HTTP_REFERER']));
          }
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$datausers=$this->Users_model->getDataTable();//panggil ke modell
          $datafield=$this->Users_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'dashboard/users/users_list',
             'sidebar'=>'dashboard/sidebar',
             'css'=>'dashboard/users/css',
             'js'=>'dashboard/users/js',
             'datausers'=>$datausers,
             'datafield'=>$datafield,
             'module'=>'dashboard',
             'titlePage'=>'users',
             'controller'=>'users'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Users_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Users_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Users_model->name;
							$row[] = ($Users_model->gender=='male'?"Laki-laki":"Perempuan");
							$row[] = $Users_model->email;
							$row[] = $Users_model->phone;
							$row[] = $Users_model->institute;
							$row[] = ($Users_model->role=="1"?"Admin":"Lesswaster");
							$row[] = $Users_model->created_on;
				
							
              $row[] ="
              <a href='users/edit/$Users_model->id'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Users_model->id' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Users_model->count_all(),
                          "recordsFiltered" => $this->Users_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'dashboard/users/users_create',
             'sidebar'=>'dashboard/sidebar',
             'action'=>'dashboard/users/create_action',
             'module'=>'dashboard',
             'titlePage'=>'users',
             'controller'=>'users'
            );
          $this->template->load($data);
        }

        public function edit($id){
          $dataedit=$this->Users_model->get_by_id($id);
           $data = array(
             'content'=>'dashboard/users/users_edit',
             'sidebar'=>'dashboard/sidebar',
             'action'=>'dashboard/users/update_action',
             'dataedit'=>$dataedit,
             'module'=>'dashboard',
             'titlePage'=>'users',
             'controller'=>'users'
            );
          $this->template->load($data);
        }
public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
					'password' => sha1($this->input->post('password',TRUE)),
					'name' => $this->input->post('name',TRUE),
					'gender' => $this->input->post('gender',TRUE),
					'email' => $this->input->post('email',TRUE),
					'address' => $this->input->post('address',TRUE),
					'phone' => $this->input->post('phone',TRUE),
					'institute' => $this->input->post('institute',TRUE),
					'role' => $this->input->post('role',TRUE),
					
);

            $this->Users_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('dashboard/users'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'name' => $this->input->post('name',TRUE),
					'gender' => $this->input->post('gender',TRUE),
					'email' => $this->input->post('email',TRUE),
					'address' => $this->input->post('address',TRUE),
					'phone' => $this->input->post('phone',TRUE),
					'institute' => $this->input->post('institute',TRUE),
					'role' => $this->input->post('role',TRUE)
					
);

            if($this->input->post('password')!=''){
                $data['password']=sha1($this->input->post('password'));
            }

            $this->Users_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('dashboard/users'));
        }
    }

    public function delete($id)
    {
        $row = $this->Users_model->get_by_id($id);

        if ($row) {
            $this->Users_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('dashboard/users'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dashboard/users'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('name', 'name', 'trim|required');
$this->form_validation->set_rules('gender', 'gender', 'trim|required');
$this->form_validation->set_rules('email', 'email', 'trim|required');
$this->form_validation->set_rules('address', 'address', 'trim|required');
$this->form_validation->set_rules('phone', 'phone', 'trim|required');
$this->form_validation->set_rules('institute', 'institute', 'trim|required');
$this->form_validation->set_rules('role', 'role', 'trim|required');



	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}