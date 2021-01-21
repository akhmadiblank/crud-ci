<?php
    class Peoples extends CI_Controller{
       
       
        public function index(){
            $this->load->model('Peoples_model','peoples');
            $data['judul']='biodata masyarakat';
            //load library
            // $this->load->library('pagination');->dipanggil di autoload
            
            if($this->input->post('submit')){
                $data['keyword'] = $this->input->post('keyword');
                $this->session->set_userdata('keyword',$data['keyword']);
            }else{
                $data['keyword']=$this->session->userdata('keyword');
            }
            $keyword=$data['keyword'];
            //config
            //$config['total_rows']= $this->peoples->jumlahdata(); =>jika menggunakan ini maka pagination akan menampilkan secara utuh dan ini akan bermasalah jika kita menggunakan search
            $this->db->like('nama',$keyword);
            $this->db->or_like('alamat',$keyword);
            $this->db->or_like('email',$keyword);
            $this->db->from('peoples');
            $config['total_rows']= $this->db->count_all_results();//menghitung jumlah hasil proses terakhir
            $data['jumlah_hasil_pencarian']=$config['total_rows'];
            $config['per_page']=8;
            //catatan*seluruh config yang ada didalam pagination codeigneter dipindahkan kedalam config/pagination.php
            //initialisisai
            $this->pagination->initialize($config);
            $data['start']= $this->uri->segment(3);
            $data['peoples']= $this->peoples->getpaginationPeoples($config['per_page'],$data['start'],$data['keyword']);
            $this->load->view('templates/header',$data);
            $this->load->view('peoples/index',$data);
            $this->load->view('templates/footer');
        }
        
    }
