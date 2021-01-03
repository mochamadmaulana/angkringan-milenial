<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-plus"></i> Tambah Produk</h1>
  </div>

  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <div class="card shadow mb-4">
        <div class="card-body">
          <form>
            <div class="form-group">
              <label for="nama_produk">Nama Produk</label>
              <input type="text" name="nama_produk" class="form-control" id="nama_produk" placeholder="Contoh: Ayam Goreng">
            </div>
            <div class="row">
              <div class="col-lg">
                <div class="form-group">
                  <label for="kategori">Kategori</label>
                  <select class="form-control" name="kategori" id="kategori">
                    <option>Pilih Kategori</option>
                  </select>
                </div>
              </div>
              <div class="col-lg">
                <div class="form-group">
                  <label for="stok">Stok</label>
                  <input type="number" name="stok" class="form-control" id="stok" placeholder="0">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi Produk <span class="text-danger">(Opsional)</span></label>
              <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" placeholder="Tulis Deskripsi Produk."></textarea>
            </div>
            <div class="row">
              <div class="col-lg">
                <div class="form-group">
                  <label for="harga_modal">Harga Modal</label>
                  <input type="number" name="harga_modal" class="form-control" id="harga_modal" placeholder="0">
                </div>
              </div>
              <div class="col-lg">
                <div class="form-group">
                  <label for="harga_jual">Harga Jual</label>
                  <input type="number" name="harga_jual" class="form-control" id="harga_jual" placeholder="0">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="outlet">Outlet</label>
              <select class="form-control" name="outlet" id="kategori">
                <option>Pilih Outlet</option>
              </select>
            </div>

            <div class="row pt-3">
              <div class="col-lg p-1">
                <a href="<?= base_url('daftar_produk') ?>" class="btn btn-secondary btn-block">Batal</a>
              </div>
              <div class="col-lg p-1">
                <button type="submit" name="submit" class="btn btn-success btn-block">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>