<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Data_sedekah_model extends CI_Model
    {
        public $table = 'data_sedekah';
        public $id = 'data_sedekah.id';
        public $order = array('created_on' => 'desc');
        public $select='*';

        function __construct()
        {
            parent::__construct();
            $this->column_order=[];
            $this->column_search=[];
            $this->column_order[]=null;
							$this->column_order[]='users_id';
							$this->column_order[]='input_date';
							$this->column_order[]='weight';
							$this->column_order[]='type';
							$this->column_order[]='created_on';
							$this->column_search[]='users_id';
							$this->column_search[]='input_date';
							$this->column_search[]='weight';
							$this->column_search[]='type';
							$this->column_search[]='created_on';
							
        }

        // get all
        function get_all()
        {
            $this->db->order_by($this->id, 'DESC');
            return $this->db->get($this->table)->result();
        }

        function getDataTable(){
            $this->db->select($this->select);
            $this->db->order_by($this->id, 'DESC');
            return $this->db->get($this->table)->result();
        }

        //get field

        function get_field(){
          $table=$this->table;
          $this->db->select($this->select); //ganti * untuk custom field yang ditampilkan pada table
          $sql=$this->db->get($this->table); //ganti * untuk custom field yang ditampilkan pada table
          return $sql->list_fields();
        }

        // get data by id
        function get_by_id($id)
        {
            $this->db->select("data_sedekah.*,users.name");
            $this->db->where("data_sedekah.id", $id);
            $this->db->join('users','users.id=data_sedekah.users_id');
            return $this->db->get($this->table)->row();
        }

        // insert data
        function insert($data)
        {
            $this->db->insert($this->table, $data);
        }

        // update data
        function update($id, $data)
        {
            $this->db->where($this->id, $id);
            $this->db->update($this->table, $data);
        }

        // delete data
        function delete($id)
        {
            $this->db->where($this->id, $id);
            $this->db->delete($this->table);
        }

        //Datatable

          private function _get_datatables_query($term=''){ //term is value of $_REQUEST['search']['value']
            $column = array('ds.id','u.name', 'ds.input_date','ds.weight','ds.type','ds.created_on');
            $this->db->select('ds.id, u.name,ds.input_date,ds.weight,ds.type,ds.created_on');
            $this->db->from('data_sedekah as ds');
            $this->db->join('users as u', 'ds.users_id = u.id');
            $this->db->like('ds.id', $term);
            $this->db->or_like('u.name', $term);
            $this->db->or_like('ds.input_date', $term);
            $this->db->or_like('ds.weight', $term);
            $this->db->or_like('ds.type', $term);
            $this->db->or_like('ds.created_on', $term);


            if(isset($_REQUEST['order'])) // here order processing
            {
               $this->db->order_by($column[$_REQUEST['order']['0']['column']], $_REQUEST['order']['0']['dir']);
            } 
            else if(isset($this->order))
            {
               $order = $this->order;
               $this->db->order_by(key($order), $order[key($order)]);
            }
        }
        
        function get_datatables(){
            $term = $_REQUEST['search']['value'];   
            $this->_get_datatables_query($term);
            if($_REQUEST['length'] != -1)
            $this->db->limit($_REQUEST['length'], $_REQUEST['start']);
            $query = $this->db->get();
            return $query->result(); 
        }

        function count_filtered(){
            $term = $_REQUEST['search']['value']; 
            $this->_get_datatables_query($term);
            $query = $this->db->get();
            return $query->num_rows();  
          }
          
          public function count_all(){
            $this->db->from($this->table);
            return $this->db->count_all_results();  
          }

        //   LEADERBOARD

        function get_leaderboards(){
            $this->db->select("users.name,users.institute,SUM(data_sedekah.weight) as total_weight,users.gender");
            $this->db->from($this->table);
            $this->db->join("users",'users.id=data_sedekah.users_id');
            $this->db->group_by("data_sedekah.users_id");
            $this->db->order_by("total_weight","DESC");
            return $this->db->get();
        }

    }

    /* Crudlab by Kostlab */
    /* Please DO NOT modify this information : */
    /* Learn and Earn */