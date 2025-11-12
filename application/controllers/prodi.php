<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Memuat Model dan Helper yang diperlukan
        $this->load->model('Prodi_model');
        $this->load->helper('url');
        $this->load->helper('form'); // Diperlukan untuk form_open() di View
    }

    // FUNGSI INDEX: Menampilkan daftar data
    public function index()
    {
        $data['resultarray'] = $this->Prodi_model->get_data();
        $this->load->view('prodi_view', $data);
    }

    // FUNGSI EDIT: Menampilkan form dengan data lama
    public function edit($id_prodi)
    {
        $data['prodi'] = $this->Prodi_model->get_prodi_by_id($id_prodi);

        if (empty($data['prodi'])) {
            show_404();
        }

        $this->load->view('prodi_edit_view', $data);
    }

    // FUNGSI UPDATE: Menyimpan data dari form edit
    public function update()
    {
        // Mengambil data dari form POST
        $id_prodi = $this->input->post('id_prodi');
        $data_update = array(
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi')
        );

        // Memanggil Model untuk update
        $this->Prodi_model->update_prodi($id_prodi, $data_update);

        // Redirect kembali ke halaman daftar
        redirect(site_url('Prodi'));
    }

    // FUNGSI HAPUS: Menghapus data
    public function hapus($id_prodi)
    {
        $this->Prodi_model->delete_prodi($id_prodi);
        // Redirect kembali ke halaman daftar
        redirect(site_url('Prodi'));
    }
}
