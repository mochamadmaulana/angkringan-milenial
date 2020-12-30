<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_produk extends CI_Controller
{
  public function index()
  {
    $this->load->view('layout/template_header');
    $this->load->view('layout/template_sidebar');
    $this->load->view('layout/template_topbar');
    $this->load->view('produk/index');
    $this->load->view('layout/template_footer');
  }

  public function tambah()
  {
    $this->load->view('layout/template_header');
    $this->load->view('layout/template_sidebar');
    $this->load->view('layout/template_topbar');
    $this->load->view('produk/tambah');
    $this->load->view('layout/template_footer');
  }
}
