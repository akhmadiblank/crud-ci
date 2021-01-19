<?php
    class Mahasiswa extends CI_Controller{
       
        public function __construct(){
            parent::__construct();
            $this->load->model('Mahasiswa_model');
            $this->load->library('form_validation');
           

        }
        public function index(){
            $data['mahasiswa']= $this->Mahasiswa_model->getAllmahasiswa();
            if($this->input->post('keyword')){
                $data['mahasiswa'] = $this->Mahasiswa_model->caridatamahasiswa();
            }
            $data['judul']='halaman mahasiswa';
            $this->load->view('templates/header',$data);
            $this->load->view('Mahasiswa/index',$data);
            $this->load->view('templates/footer');
        }
        public function tambah(){
            $data['judul']='halaman tambah';

            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('nrp','NRP','required|numeric');
            $this->form_validation->set_rules('email','EMAIL','required|valid_email');
           
            if($this->form_validation->run()==false){
                $this->load->view('templates/header',$data);
                $this->load->view('mahasiswa/tambah');
                $this->load->view('templates/footer');
            }else{
                $this->Mahasiswa_model->tambah_data();
                $this->session->set_flashdata('flash',"berhasil");
                redirect('Mahasiswa');
            }
        }
        public function delateDataMahasiswa($id){
            $this->Mahasiswa_model->hapus_data($id);
            $this->session->set_flashdata('flash',"berhasil");
            redirect('Mahasiswa');
        }
        public function detailDataMahasiswa($id){
            $data['judul']='halaman detail data mahasiswa';
            $data['detail']=$this->Mahasiswa_model->Detail_data($id);
            $this->load->view('templates/header',$data);
            $this->load->view('mahasiswa/detail',$data);
            $this->load->view('templates/footer');
        }
        public function UpdateDataMahasiswa($id){
            $data['judul']='Halaman Update Mahasiswa';
            $data['detail']=$this->Mahasiswa_model->detail_data($id);
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('nrp','NRP','required|numeric');
            $this->form_validation->set_rules('email','EMAIL','required|valid_email');

            if($this->form_validation->run()==false){
                $this->load->view('templates/header',$data);
                $this->load->view('mahasiswa/update',$data);
                $this->load->view('templates/footer');
            }else{
                $this->Mahasiswa_model->Update_data($id);
                $this->session->set_flashdata('flash',"berhasil");
                redirect('Mahasiswa');
            }
        }
    }
