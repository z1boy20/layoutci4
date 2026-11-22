<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Edit Mahasiswa</h2>

<?php if (session()->getFlashdata('error')): ?>
    <p><?= esc(session()->getFlashdata('error')) ?></p>
<?php endif; ?>

<form action="<?= site_url('mahasiswa/update/' . $mhs['id']) ?>" method="post">
    <?= csrf_field() ?>

    <p>
        <label>NIM</label><br>
        <input type="text" name="nim" value="<?= esc(old('nim', $mhs['nim'])) ?>" required>
    </p>

    <p>
        <label>Nama</label><br>
        <input type="text" name="nama" value="<?= esc(old('nama', $mhs['nama'])) ?>" required>
    </p>

    <p>
        <label>Program Studi</label><br>
        <input type="text" name="prodi" value="<?= esc(old('prodi', $mhs['prodi'])) ?>" required>
    </p>

    <button type="submit">Simpan Perubahan</button>
    <a href="<?= site_url('mahasiswa') ?>">Batal</a>
</form>

<?= $this->endSection() ?>