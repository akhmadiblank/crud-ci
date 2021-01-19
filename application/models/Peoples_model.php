<?php
    class Peoples_model extends CI_model{
        public function getAllPeoples(){
           return $this->db->get('peoples')->result_array();
        }
        public function getpaginationPeoples($limit,$start){
            return $this->db->get('peoples',$limit,$start)->result_array();
        }
        public function jumlahdata(){
            return $this->db->get('peoples')->num_rows();
        }
    }