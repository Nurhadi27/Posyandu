<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <a href="/komik/create" class="btn btn-primary jarak">Tambah Pasien</a>
      <h1 class="mt-3">Daftar Pasien</h1>
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">nomor</th>
            <th scope="col">id</th>
            <th scope="col">nama</th>
            <th scope="col">tanggal lahir</th>
            <th scope="col">alamat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($pasien as $p) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $p['id_pasien']; ?></td>
              <td><?= $p['nama']; ?></td>
              <td><?= $p['tanggal_lahir']; ?></td>
              <td><?= $p['alamat']; ?></td>
              <td>
                <a href="/posyandu/<?= $p['call']; ?>" class="btn btn-success">Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>