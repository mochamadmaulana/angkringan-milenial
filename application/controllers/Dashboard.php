<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function index()
  {
    $this->load->view('layout/template_header');
    $this->load->view('layout/template_sidebar');
    $this->load->view('layout/template_topbar');
    $this->load->view('dashboard');
    $this->load->view('layout/template_footer');
  }
}
