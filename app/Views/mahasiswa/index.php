<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Data Mahasiswa</h2>

<?php if (session()->getFlashdata('success')): ?>
    <p><?= esc(session()->getFlashdata('success')) ?></p>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <p><?= esc(session()->getFlashdata('error')) ?></p>
<?php endif; ?>

<p>
    <a href="<?= site_url('mahasiswa/create') ?>">+ Tambah Mahasiswa</a>
</p>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($mahasiswa)): ?>
            <tr>
                <td colspan="5">Data mahasiswa belum tersedia.</td>
            </tr>
        <?php else: ?>
            <?php foreach ($mahasiswa as $i => $mhs): ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= esc($mhs['nim']) ?></td>
                    <td><?= esc($mhs['nama']) ?></td>
                    <td><?= esc($mhs['prodi']) ?></td>
                    <td>
                        <a href="<?= site_url('mahasiswa/edit/' . $mhs['id']) ?>">Edit</a>
                        <form
                            action="<?= site_url('mahasiswa/delete/' . $mhs['id']) ?>"
                            method="post"
                            style="display:inline"
                            onsubmit="return confirm('Yakin ingin menghapus data ini?')"
                        >
                            <?= csrf_field() ?>
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->endSection() ?>