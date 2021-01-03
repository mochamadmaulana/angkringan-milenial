<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_produk extends CI_Controller
{
  public function index()
  {
    $data['produk'] = $this->produk_model->ambilData('produk')->result_array();

    $this->load->view('layout/template_header');
    $this->load->view('layout/template_sidebar');
    $this->load->view('layout/template_topbar');
    $this->load->view('daftar_produk/index', $data);
    $this->load->view('layout/template_footer');
  }

  public function tambah()
  {

    $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required|trim');
    $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
    $this->form_validation->set_rules('stok', 'Stok', 'required|trim');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
    $this->form_validation->set_rules('harga_modal', 'Harga Modal', 'required|trim');
    $this->form_validation->set_rules('harga_jual', 'Harga Jual', 'required|trim');
    $this->form_validation->set_rules('outlet', 'Outlet', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('layout/template_header');
      $this->load->view('layout/template_sidebar');
      $this->load->view('layout/template_topbar');
      $this->load->view('daftar_produk/tambah');
      $this->load->view('layout/template_footer');
    } else {
      $data = [
        'nama_kategori'   => $this->input->post('nama_kategori', true),
        'kategori'             => $this->input->post('kategori', true),
        'stok'                   => $this->input->post('stok', true),
        'deskripsi'            => $this->input->post('deskripsi', true),
        'harga_modal'      => $this->input->post('harga_modal', true),
        'harga_jual'          => $this->input->post('harga_jual', true),
        'outlet'                 => $this->input->post('outlet', true)
      ];
      $this->produk_model->tambah('produk', $data);
      $this->session->set_flashdata('konfirmasi', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> Kamu telah berhasil menambahkan produk baru.
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
    $data['kategori'] = $this->produk_model->ambilDataSatu('kategori', $id)->result();
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
