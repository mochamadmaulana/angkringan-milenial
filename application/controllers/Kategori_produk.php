<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_produk extends CI_Controller
{
  public function index()
  {
    $this->load->view('layout/template_header');
    $this->load->view('layout/template_sidebar');
    $this->load->view('layout/template_topbar');
    $this->load->view('kategori_produk/index');
    $this->load->view('layout/template_footer');
  }

  public function tambah()
  {

    $this->form_validation->set_rules('nama_kategori', 'Nama kategori', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('layout/template_header');
      $this->load->view('layout/template_sidebar');
      $this->load->view('layout/template_topbar');
      $this->load->view('kategori_produk/tambah');
      $this->load->view('layout/template_footer');
    } else {
      $data = [
        'nama_kategori' => $this->input->post('nama_kategori')
      ];
      $this->produk_model->tambah('kategori', $data);
      redirect('kategori_produk');
    }
  }
}
