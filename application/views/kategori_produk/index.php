<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kategori Produk</h1>
    <a href="<?= base_url('kategori_produk/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kategori</a>
  </div>

  <?= $this->session->flashdata('konfirmasi'); ?>

  <!-- DataTales -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kategori</th>
              <th>~</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($kategori as $kategori) :
            ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $kategori->nama_kategori; ?></td>
                <td>
                  <a href="<?= base_url('kategori_produk/ubah/') . $kategori->id ?>" class="badge badge-success"><i class="fas fa-pencil-alt"></i> Ubah</a>
                  <a href="<?= base_url('kategori_produk/hapus/') . $kategori->id ?>" class="badge badge-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->