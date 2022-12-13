<?php
class Report_model extends CI_Model{

    function monthly($year){
        // SELECT month(input_date) as bulan,sum(weight) as total_berat,count(id) as total_data FROM `data_sedekah` where year(input_date) ='2022' group by MONTH(input_date)
        $this->db->select("month(input_date) as month,sum(weight) as total_weight,count(id) as total_data");
        $this->db->from("data_sedekah");
        $this->db->where("year(input_date)",$year);
        $this->db->group_by("month(input_date)");
        $this->db->order_by("input_date","DESC");

        return $this->db->get();
    }

    function daily($year,$month){
//         SELECT data_sedekah.id,input_date,count(data_sedekah.id) as total_data FROM `data_sedekah` where month(input_date) ='12' and year(input_date)='2022' group by input_date  
// ORDER BY `data_sedekah`.`input_date`  ASC
        $this->db->select("data_sedekah.id,input_date,sum(weight) as total_weight,count(data_sedekah.id) as total_data");
        $this->db->from("data_sedekah");
        $this->db->where("month(input_date)",$month);
        $this->db->where("year(input_date)",$year);
        $this->db->group_by("input_date");
        $this->db->order_by("input_date","DESC");
        return $this->db->get();
    }

    // 

    function daily_list($date){
        $this->db->select("users_id,users.name,users.phone,users.email,sum(weight) as total_weight,count(data_sedekah.id) as total_data");
        $this->db->from("data_sedekah");
        $this->db->join("users","users.id=data_sedekah.users_id");
        $this->db->where("data_sedekah.input_date",$date);
        $this->db->group_by("data_sedekah.users_id");
        return $this->db->get();
    }

    function monthly_user($year,$month){
        $this->db->select('users_id,users.name,users.phone,users.email,sum(weight) as total_weight,count(data_sedekah.id) as total_data');
        $this->db->from("data_sedekah");
        $this->db->join("users","users.id=data_sedekah.users_id");
        $this->db->where("month(input_date)",$month);
        $this->db->where("year(input_date)",$year);
        $this->db->group_by("data_sedekah.users_id");
        $this->db->order_by("total_weight","DESC");
        return $this->db->get();
    }

}