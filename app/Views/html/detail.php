<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Slider main container -->
<div class="card" style="width: 18rem;">
  <div class="jarak">
    <?php foreach ($pasien as $p => $value) : ?>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><?= $value->nama ?></li>
        <li class="list-group-item"><?= $value->alamat ?></li>
        <li class="list-group-item"><?= $value->nama_ibu ?></li>
        <li class="list-group-item"><?= $value->nama_bapak ?></li>
      </ul>
    <?php endforeach; ?>
  </div>
</div>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Tanggal Periksa</th>
      <th scope="col">Tinggi</th>
      <th scope="col">Berat</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pasien as $p => $value) : ?>
      <tr>
        <td><?= $value->tgl_periksa ?></td>
        <td><?= $value->berat ?></td>
        <td><?= $value->tinggi ?></td>
        <td><?= $value->keterangan ?></td>
        <td>
          <a href="/cek/detail/<?= $value->id_pasien ?>" class="btn btn-success">Detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?= $this->endSection(); ?>