<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi_model extends CI_Model
{

    // Konstruktor (opsional, tapi baik untuk inisialisasi)
    public function __construct()
    {
        parent::__construct();
        // Anda bisa memuat database di sini, meskipun biasanya sudah auto-loaded
        // $this->load->database();
    }
    // FUNGSI INI HARUS DITAMBAHKAN
    public function lihatData()
    {
        // Asumsi nama tabel untuk Program Studi adalah 'prodi'
        // Jika nama tabelnya berbeda, silakan sesuaikan di sini.
        $query = $this->db->get('prodi');
        return $query->result();
    }
    // ... (Fungsi-fungsi lain yang mungkin sudah Anda buat)

    /**
     * Fungsi untuk mengambil semua data program studi dari tabel
     * Asumsi nama tabel Anda adalah 'prodi'
     */
    public function get_all_prodi()
    {
        // Menggunakan Active Record dari CodeIgniter
        $query = $this->db->get('prodi');
        return $query->result(); // Mengembalikan hasil dalam bentuk array objek
    }

    /**
     * Fungsi untuk mengambil satu data program studi berdasarkan ID
     */
    public function get_prodi_by_id($id_prodi)
    {
        $this->db->where('id_prodi', $id_prodi); // Asumsi kolom primary key adalah 'id_prodi'
        $query = $this->db->get('prodi');
        return $query->row(); // Mengembalikan satu baris hasil dalam bentuk objek
    }

    // Anda bisa menambahkan fungsi CRUD (Insert, Update, Delete) lainnya di sini
}
