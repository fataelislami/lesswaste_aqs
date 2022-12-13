<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Report extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->helper('date');
            $this->load->helper('phone');
            $this->load->model("Report_model");
        if($this->session->userdata('status')!='login'){
            redirect(base_url('login'));
          }
          if($this->session->userdata('role')!=1){
            redirect(redirect($_SERVER['HTTP_REFERER']));
          }

        }

        public function index()
        {
            $year=$this->input->get('year');
            if($year!=''){
                $year=$year;
            }else{
                $year=date("Y");
            }
            $tableData=$this->Report_model->monthly($year);

           $data = array(
             'sidebar'=>'dashboard/sidebar',
             'content'=>'dashboard/report/report',
             'tableData'=>$tableData,
             'css'=>'dashboard/report/css',
             'js'=>'dashboard/report/js',
             'module'=>'dashboard',
             'year'=>$year
            );

          $this->template->load($data);
        }

        function daily($month){
            $year=$this->input->get('year');
            if($year!=''){
                $year=$year;
            }else{
                $year=date("Y");
            }
            $tableData=$this->Report_model->daily($year,$month);
            $data = array(
                'sidebar'=>'dashboard/sidebar',
                'content'=>'dashboard/report/daily',
                'tableData'=>$tableData,
                'css'=>'dashboard/report/css',
                'js'=>'dashboard/report/js',
                'module'=>'dashboard',
                'year'=>$year,
                'month'=>$month

               );
   
             $this->template->load($data);
        }

        function list(){
            $year=$this->input->get('year');
            $date=$this->input->get('date');
            if($year!=''){
                $year=$year;
            }else{
                $year=date("Y");
            }
            $tableData=$this->Report_model->daily_list($date);
            $data = array(
                'sidebar'=>'dashboard/sidebar',
                'content'=>'dashboard/report/daily_list',
                'tableData'=>$tableData,
                'css'=>'dashboard/report/css',
                'js'=>'dashboard/report/js',
                'module'=>'dashboard',
                'year'=>$year,
                'date'=>$date

               );
   
             $this->template->load($data);


        }

        function monthly_user($month){
            $year=$this->input->get('year');
            if($year!=''){
                $year=$year;
            }else{
                $year=date("Y");
            }
            $tableData=$this->Report_model->monthly_user($year,$month);
            $data = array(
                'sidebar'=>'dashboard/sidebar',
                'content'=>'dashboard/report/monthly_user',
                'tableData'=>$tableData,
                'css'=>'dashboard/report/css',
                'js'=>'dashboard/report/js',
                'module'=>'dashboard',
                'year'=>$year,
                'month'=>$month

               );
   
             $this->template->load($data);

        }


        function whatsapp($phone){
            
        }

    }