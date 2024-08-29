<?php 
    require_once "../classes/Subdistrict.php";//mengimport file Subdistrict.php
    $no = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="min-vw-100 min-vh-100">
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5 shadow-sm p-3">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="#">MyStudent</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="StudentViews.php">Home</a></li>
                            <li><a class="dropdown-item" href="InternationalsView.php">Internationals</a></li>
                            <li><a class="dropdown-item" href="NasionalsView.php">Nationals</a></li>
                            <li><a class="dropdown-item" href="ProvinceViews.php">Province</a></li>
                            <li><a class="dropdown-item" href="DistrictViews.php">District</a></li>
                            <li><a class="dropdown-item" href="SubdistrictViews.php">Subdistrict</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="d-flex flex-column justify-content-center align-items-center">
    
    <h1 class="mb-5">Data Tabel Siswa Berprestasi Tingkat Kecamatan</h1>

    <table class="table table-primary w-75">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Number</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Signature</th>
                    <th scope="col">Achievements</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datas as $data) ://perulangan untuk menampilkan data dari array yang diambil menggunakan query?>
                    <th scope="row"><?= $no++  ?></th>
                    <td><?= $data['name']  ?></td>
                    <td><?= $data['student_number']  ?></td>
                    <td><?= $data['phone_number']  ?></td>
                    <td><?= $data['address']  ?></td>
                    <td><?= $data['signature']  ?></td>
                    <td><?= $data['nama_prestasi']  ?></td>
                <?php endforeach?>
            </tbody>
        </table>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>