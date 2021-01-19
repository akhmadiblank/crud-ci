<?php
    class Peoples_model extends CI_model{
        public function getAllPeoples(){
           return $this->db->get('peoples')->result_array();
        }
    }