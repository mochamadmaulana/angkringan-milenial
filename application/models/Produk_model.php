<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{

  function tambah($tabel, $data)
  {
    $this->db->insert($tabel, $data);
  }
}
