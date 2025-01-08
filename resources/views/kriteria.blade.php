<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            background-color:rgb(67, 88, 210);
            padding-top: 20px;
        }
        .header {
            margin-left: 250px;
            padding: 20px;
        }
        .sidebar .nav-link {
            color: #000;
        }
        .sidebar .nav-link.active {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a class="navbar-brand ms-3" href="/">SPK</a>
        <nav class="nav flex-column mt-4">
            <a class="nav-link active text-white"  href="/">Dashboard</a>
            <a class="nav-link text-white" href="/kriteria">Data Kriteria</a>
            <a class="nav-link text-white" href="/calonKaryawan">Data Calon Karyawan</a>
            <a class="nav-link text-white" href="/hasilAkhir">Data Hasil Akhir</a>
        </nav>
    </div>
    <div class="header" style="background-color : rgb(101, 116, 202);">
        <h1>Kriteria</h1>
    </div>
</body>
</html>
