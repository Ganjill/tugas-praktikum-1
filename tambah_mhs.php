$
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

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <div class="icon ml-4">
                <h5>
                    <i class="fas fa-envelope-square mr-3"></i>
                    <i class="fas fa-bell-slash mr-3"></i>
                    <i class="fas fa-sign-out-alt mr-3"></i>
                </h5>
            </div>


            <div class="collapse navbar-collapse">
                <form class="form-inline my-2 my-lg-0">
                    <div class="row">
                        <div class="col">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
                        </div>
                    </div>
                </form>
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
            <form action="simpan_mhs.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>NIM</label>
                        <input type="text" name="nim" class="form-control" id="nim">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>NAMA</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>ALAMAT</label>
                        <input type="text" name="alamat" class="form-control" id="alamat">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>JURUSAN</label>
                        <input type="text" name="jurusan" class="form-control" id="jurusan">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary my-3">SIMPAN</button>
            </form>
        </div>
    </div>
</body>

</html>