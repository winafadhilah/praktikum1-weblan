<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<form action="/update/<?= $mahasiswa['id'] ?>" method="post">
  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label for="npm">NPM</label>
        <input type="text" name="npm" class="form-control" id="npm" value="<?= $mahasiswa['npm'] ?>">
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama'] ?>">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $mahasiswa['alamat'] ?>">
      </div>
      <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea type="text" name="deskripsi" class="form-control" id="deskripsi"><?= $mahasiswa['deskripsi'] ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?= $this->endSection() ?>