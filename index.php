<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="../Boostrap/fontawesome/css/all.min.css">
    <title>ADMINISTRATOR</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-warning mr-2">
                    <a href="tambah_mhs.php" class="text-decoration-none text-white">Tambah Mahasiswa</a>
                </button>
            </form>

            <div class="icon ml-4 mx-2">
                <h5>
                    <i class="fas fa-envelope-square mr-3"></i>
                    <i class="fas fa-bell-slash mr-3"></i>
                    <i class="fas fa-sign-out-alt mr-3"></i>
                </h5>
            </div>
        </div>
    </nav>
    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="../Dosen/index.php"><i
                            class="fas fa-tachometer-alt mr2"></i>Daftar Dosen</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../Mahasiswa/index.php"><i
                            class="fas fa-user-graduate mr-2"></i>Daftar
                        Mahasiswa</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../Pegawai/index.php"><i class="fas fa-users mr-2"></i>Daftar
                        Pegawai</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../Jadwal/index.php"><i
                            class="far fa-calendar-alt mr-2"></i>Jadwal Kuliah</a>
                    <hr class="bg-secondary">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-user-graduate mr-2"></i> Input Data Baru</h3>
            <hr>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NIM</th>
                        <th scope="col">NAMA MAHASISWA</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">JURUSAN</th>
                        <th colspan="3" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include "koneksi.php";
                    $sql = "SELECT * FROM mahasiswa";
                    $query = mysqli_query($koneksi, $sql);


                    if (mysqli_num_rows($query) < 1): ?>
                    <tr>
                        <td colspan="100%">Tidak ada data yang ditemukan !</td>
                    </tr>
                    <?php endif;
                    foreach ($query as $key => $value):
                        ?>
                    <tr>
                        <td>
                            <?= $key + 1 ?>
                        </td>
                        <td>
                            <?= htmlspecialchars($value['nim']) ?>
                        </td>
                        <td>
                            <?= htmlspecialchars($value['nama']) ?>
                        </td>
                        <td>
                            <?= htmlspecialchars($value['alamat']) ?>
                        </td>
                        <td>
                            <?= htmlspecialchars($value['jurusan']) ?>
                        </td>
                        <td>
                            <a href="ubah_mhs.php?nim=<?= htmlspecialchars($value['nim']) ?>"
                                class="btn btn-warning btn-sm p-2 text-white rounded">
                                <i class="fas fa-edit mr-2"></i> Edit</a>
                            <a href="hapus_mhs.php?nim=<?= htmlspecialchars($value['nim']) ?>"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus ?')"
                                class="btn btn-danger btn-sm p-2 text-white rounded">
                                <i class="fas fa-trash-alt mr-2"></i> Hapus</a>
                        </td>
                    </tr>


                    <?php endforeach; ?>


                </tbody>
            </table>

        </div>
    </div>
</body>

</html>