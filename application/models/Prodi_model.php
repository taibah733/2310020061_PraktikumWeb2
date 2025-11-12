<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi_model extends CI_Model
{

    // FUNGSI 1: Mengambil semua data untuk ditampilkan di tabel
    public function get_data()
    {
        // Menggunakan nama tabel yang benar: 'prodi'
        $query = $this->db->get('prodi');
        return $query->result_array();
    }

    // FUNGSI 2: Mengambil satu baris data berdasarkan ID untuk form Edit
    public function get_prodi_by_id($id_prodi)
    {
        $this->db->where('id_prodi', $id_prodi);
        return $this->db->get('prodi')->row_array();
    }

    // FUNGSI 3: Menyimpan data yang diperbarui dari form Edit
    public function update_prodi($id_prodi, $data)
    {
        $this->db->where('id_prodi', $id_prodi);
        $this->db->update('prodi', $data);
        return TRUE;
    }

    // FUNGSI 4: Menghapus data berdasarkan ID
    public function delete_prodi($id_prodi)
    {
        $this->db->where('id_prodi', $id_prodi);
        $this->db->delete('prodi');
        return TRUE;
    }
}
