<?php 

class Dashboard extends MY_Controller{
    function index(){
        redirect(base_url('dashboard/data_sedekah'));
    }
}