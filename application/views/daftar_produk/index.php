<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Produk</h1>
    <a href="<?= base_url('daftar_produk/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Produk</a>
  </div>

  <!-- DataTales -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama Produk</th>
              <th>Kategori</th>
              <th>Deskripsi</th>
              <th>Stok</th>
              <th>Harga Modal</th>
              <th>Harga Jual</th>
              <th>~</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($produk as $p) :
            ?>
              <tr>
                <td><?= $p['nama_produk'] ?></td>
                <td><?= $p['kategori_id'] ?></td>
                <td><?= $p['deskripsi'] ?></td>
                <td><?= $p['stok'] ?></td>
                <td><?= $p['harga_modal'] ?></td>
                <td><?= $p['harga_jual'] ?></td>
                <td>
                  <a href="#" class="badge badge-success"><i class="fas fa-pencil-alt"></i> Ubah</a>
                  <a href="#" class="badge badge-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
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