<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Kategori</h1>
  </div>

  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <div class="card shadow mb-4">
        <div class="card-body">
          <form action="<?= base_url('kategori_produk/tambah') ?>" method="post">
            <div class="form-group">
              <label for="nama_kategori">Nama Kategori</label>
              <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" placeholder="Contoh: Makanan">
            </div>

            <div class="row pt-3">
              <div class="col-lg p-1">
                <a href="<?= base_url('kategori_produk') ?>" class="btn btn-secondary btn-block">Batal</a>
              </div>
              <div class="col-lg p-1">
                <button type="submit" name="submit" class="btn btn-success btn-block">Simpan</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>