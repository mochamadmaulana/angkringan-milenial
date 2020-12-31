<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{

  function tambah($tabel, $data)
  {
    return $this->db->insert($tabel, $data);
  }

  function ambilData($tabel)
  {
    return $this->db->get($tabel);
  }

  function ambilDataSatu($tabel, $id)
  {
    return $this->db->get_where($tabel, ['id' => $id]);
  }

  function ubah($tabel, $id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update($tabel, $data);
  }

  function hapus($tabel, $id)
  {
    $this->db->delete($tabel, ['id' => $id]);
  }
}
