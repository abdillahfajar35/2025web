<?php
session_start();
include "koneksi.php";
ceklogin();

$query = "SELECT * FROM prodi";
$data = ambildata($query);


include "template/header.php";
include "template/sidebar.php";

?>

<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Data Mahasiswa</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Data Mahasiswa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                    </ol>
                </div>
                <div class="app-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h3 class="card-title">Tambah Mahasiswa</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <form action="tambahaksimahasiswa.php" method="post" enctype="multipart/form-data">
                                        <div class=" card-body">
                                            <div class="form-group">
                                                <label for="nim" class="form-label">NIM</label>
                                                <input type="text" name="nim" id="nim" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" name="password" id="password" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" name="nama" id="nama" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="no_telp" class="form-label">No Telp</label>
                                                <input type="text" name="no_telp" id="no_telp" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" name="email" id="email" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="id_prodi" class="form-label">Prodi</label>
                                                <select class="form-select" id="id_prodi" name="id_prodi">
                                                    <?php foreach ($data as $d) : ?>
                                                        <option value="<?php echo $d["id"] ?>"><?php echo $d["nama"] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="foto">Upload Foto</label>
                                                <input type="file" class="form-control" id="foto" name="foto" />
                                            </div>

                                            <div class="card-footer">
                                                <a href="index.php" class="btn btn-warning">Kembali</a>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                    </form>
</main>

<?php
include "template/footer.php";
?>