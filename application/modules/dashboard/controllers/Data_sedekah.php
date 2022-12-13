<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Data_sedekah extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Data_sedekah_model');
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
        {$datadata_sedekah=$this->Data_sedekah_model->getDataTable();//panggil ke modell
          $datafield=$this->Data_sedekah_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'dashboard/data_sedekah/data_sedekah_list',
             'sidebar'=>'dashboard/sidebar',
             'css'=>'dashboard/data_sedekah/css',
             'js'=>'dashboard/data_sedekah/js',
             'datadata_sedekah'=>$datadata_sedekah,
             'datafield'=>$datafield,
             'module'=>'dashboard',
             'titlePage'=>'data_sedekah',
             'controller'=>'data_sedekah'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Data_sedekah_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Data_sedekah_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Data_sedekah_model->name;
							$row[] = $Data_sedekah_model->input_date;
							$row[] = $Data_sedekah_model->weight;
							$row[] = $Data_sedekah_model->type;
							$row[] = $Data_sedekah_model->created_on;
							
              $row[] ="
              <a href='data_sedekah/edit/$Data_sedekah_model->id'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Data_sedekah_model->id' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Data_sedekah_model->count_all(),
                          "recordsFiltered" => $this->Data_sedekah_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'dashboard/data_sedekah/data_sedekah_create',
             'sidebar'=>'dashboard/sidebar',
             'action'=>'dashboard/data_sedekah/create_action',
             'module'=>'dashboard',
             'js'=>'dashboard/data_sedekah/js',
             'titlePage'=>'data_sedekah',
             'controller'=>'data_sedekah'
            );
          $this->template->load($data);
        }

        public function edit($id){
          $dataedit=$this->Data_sedekah_model->get_by_id($id);
           $data = array(
             'content'=>'dashboard/data_sedekah/data_sedekah_edit',
             'sidebar'=>'dashboard/sidebar',
             'action'=>'dashboard/data_sedekah/update_action',
             'dataedit'=>$dataedit,
             'module'=>'dashboard',
             'titlePage'=>'data_sedekah',
             'controller'=>'data_sedekah'
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
					'users_id' => $this->input->post('users_id',TRUE),
					'input_date' => $this->input->post('input_date',TRUE),
					'weight' => $this->input->post('weight',TRUE),
					'type' => $this->input->post('type',TRUE)
					
);

            $this->Data_sedekah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('dashboard/data_sedekah'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'users_id' => $this->input->post('users_id',TRUE),
					'input_date' => $this->input->post('input_date',TRUE),
					'weight' => $this->input->post('weight',TRUE),
					'type' => $this->input->post('type',TRUE)
					
);

            $this->Data_sedekah_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('dashboard/data_sedekah'));
        }
    }

    public function delete($id)
    {
        $row = $this->Data_sedekah_model->get_by_id($id);

        if ($row) {
            $this->Data_sedekah_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('dashboard/data_sedekah'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dashboard/data_sedekah'));
        }
    }
    // Json Get data user by id untuk QR

    function get_user_by_phone($phone){
        $data=$this->Users_model->get_by_phone($phone);
        if($data){
            echo json_encode(
                array('status'=>'success','data'=>$data)
            );
        }else{
            echo json_encode(
                array('status'=>'failed')
            );
        }
        
    }

    public function _rules()
    {
    $this->form_validation->set_rules('users_id', 'users_id', 'trim|required');
    $this->form_validation->set_rules('input_date', 'input_date', 'trim|required');
    $this->form_validation->set_rules('weight', 'weight', 'trim|required');
    $this->form_validation->set_rules('type', 'type', 'trim|required');


	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}