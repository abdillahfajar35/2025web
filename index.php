<?php
session_start();
if (!isset($_SESSION['login'])) {
    //echo $_SESSION['login'];
    header("Location: login.html");
}

include "koneksi.php";

$query = "SELECT mahasiswa.*, prodi.nama AS NamaProdi
    FROM mahasiswa
    LEFT JOIN prodi ON mahasiswa.id_prodi = prodi.id";
$data = ambildata($query);


include "template/header.php";
include "template/sidebar.php";

?>

<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
                <div class="app-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h3 class="card-title">Data Mahasiswa</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIM</th>
                                                    <th>Nama</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>No Telp</th>
                                                    <th>Email</th>
                                                    <th>Id Prodi</th>
                                                    <th>Nama Prodi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            </tbody>

                                            <?php
                                            $i = 1;
                                            foreach ($data as $d) : ?>
                                                <tr>
                                                    <td> <?php echo $i++; ?> </td>
                                                    <td> <?php echo $d["nim"] ?> </td>
                                                    <td> <?php echo $d["nama"] ?> </td>
                                                    <td> <?php echo $d["tanggal_lahir"] ?> </td>
                                                    <td> <?php echo $d["no_telp"] ?> </td>
                                                    <td> <?php echo $d["email"] ?> </td>
                                                    <td> <?php echo $d["id_prodi"] ?> </td>
                                                    <td> <?php echo $d["NamaProdi"] ?> </td>
                                                    <td><a href="deletemahasiswa.php?nim=<?= $d['nim']; ?>"
                                                            onclick="return confirm('Yakin ingin hapus?')" class="btn btn-danger">Delete</a> |
                                                        <a href="editmahasiswa.php?nim=<?= $d['nim']; ?>" class="btn btn-warning">Edit</a></
                                                            </tr>
                                                    <?php endforeach; ?>


                                                    </tbody>
                                        </table>
                                    </div>
</main>
<?php
include "template/footer.php";
