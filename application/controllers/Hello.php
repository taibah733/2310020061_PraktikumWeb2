<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hello extends CI_Controller
{
    public function index()
    {
    echo "Halo, perkenlakan nama saya Ebah";
    }

    public function hello_2310020061() 
    {
    $this->load->model('Hello_model');
    $data = $this->Hello_model->hello_nim();
    echo $data;
    }
    
    public function hello_view()
    {
        $this->load->view('hello_view');
    }

    public function hello_mvc() {
        $this->load->model('hello_model');
        $data ['mvc']= $this->hello_model->hello_mvc();
        $data["kelas"] = $this->hello_model->kelas();
        $this->load->view('hello_view', $data);
    }
}