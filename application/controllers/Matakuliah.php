<?php
class matakuliah extends CI_Controller {
    
        public function index()
        {
            $this->load->view('view-form-matakuliah');
        }
        public function cetak()
        {
            $data['kode'] = $this->input->post('kode');
            $data['nama'] = $this->input->post('nama');
            $data['sks'] = $this->input->post('sks');
            $this->load->view('view-cetak-matakuliah', $data);
        }
}