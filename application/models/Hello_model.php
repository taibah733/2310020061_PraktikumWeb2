<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hello_model extends CI_Model
{
    public function hello_nim()
    {
        return "Halo, perkenlakan nama saya Ebah NIM 2310020061";
    }

    public function hello_mvc()
    {
        return "Ini menggunakan MVC buatan 2310020061";
    }

    public function kelas()
    {
        return "Kelas 5B SI REG BJM";
    }
}
