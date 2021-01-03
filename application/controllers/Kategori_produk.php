<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_produk extends CI_Controller
{
  public function index()
  {
    $data['kategori'] = $this->produk_model->ambilData('kategori')->result();

    $this->load->view('layout/template_header');
    $this->load->view('layout/template_sidebar');
    $this->load->view('layout/template_topbar');
    $this->load->view('kategori_produk/index', $data);
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
        'nama_kategori' => $this->input->post('nama_kategori', true)
      ];
      $this->produk_model->tambah('kategori', $data);
      $this->session->set_flashdata('konfirmasi', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> Kamu telah berhasil menambahkan kategori produk baru.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      ');
      redirect('kategori_produk');
    }
  }


  public function ubah($id)
  {
    $data['kategori'] = $this->produk_model->ambilDataSatu('kategori', $id);
    $this->load->view('layout/template_header');
    $this->load->view('layout/template_sidebar');
    $this->load->view('layout/template_topbar');
    $this->load->view('kategori_produk/ubah', $data);
    $this->load->view('layout/template_footer');
  }

  public function mengubah()
  {
    $this->form_validation->set_rules('nama_kategori', 'Nama kategori', 'required|trim');
    $id = $this->input->post('id', true);

    if ($this->form_validation->run() == false) {
      $this->load->view('layout/template_header');
      $this->load->view('layout/template_sidebar');
      $this->load->view('layout/template_topbar');
      $this->load->view('kategori_produk/ubah');
      $this->load->view('layout/template_footer');
    } else {
      $data = [
        'nama_kategori' => $this->input->post('nama_kategori', true)
      ];
      $this->produk_model->ubah('kategori', $id, $data);
      $this->session->set_flashdata('konfirmasi', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> Kamu telah berhasil mengubah kategori produk.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      ');
      redirect('kategori_produk');
    }
  }

  public function hapus($id)
  {
    $this->produk_model->hapus('kategori', $id);
    $this->session->set_flashdata('konfirmasi', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> Kamu telah berhasil menghapus kategori produk.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      ');
    redirect('kategori_produk');
  }
}
