<?php


class Mahasiswa extends controller {
    public function index(){
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('template/header');
        $this->view('mahasiswa/index');
        $this->view('template/footer');
    }

}