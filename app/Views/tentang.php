
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container">

    <h2>Tentang Aplikasi</h2>

    <p>
        Sistem Informasi Akademik (SIAKAD) merupakan aplikasi
        berbasis web yang dibuat untuk membantu menampilkan
        dan mengelola informasi akademik.
    </p>

    <p>
        Aplikasi ini dikembangkan menggunakan framework
        CodeIgniter 4 dengan database MySQL sebagai tempat
        penyimpanan data.
    </p>

    <p>
        Beberapa informasi yang tersedia dalam aplikasi ini
        meliputi data mahasiswa, data dosen, dan data mata kuliah.
        Aplikasi ini juga dilengkapi dengan fitur CRUD
        (Create, Read, Update, Delete) untuk mengelola data mahasiswa.
    </p>

    <p>
        Aplikasi Sistem Informasi Akademik ini dikembangkan oleh
        <strong>Muhamad Aziz Al Fauzi</strong>, mahasiswa
        Program Studi Sistem Informasi,
        Institut Teknologi Mojosari.
    </p>

</div>

<?= $this->endSection() ?>
