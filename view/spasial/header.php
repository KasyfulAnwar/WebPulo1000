<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php $domain = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]" ?>

    <base href="<?= $domain ?>/webpulo1000/"/>
    <title>Kabupaten Kepulauan Seribu</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="./public/asset/css/style.css?<?php echo time();  ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
  </head>
  <body>
    <div class="loading">
      <div class="loader">
        <img src="./public/asset/img/loading.png" alt="Loading..."  />
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <!-- LOGO -->
        <a class="navbar-brand" href="./public/index.php">
          <img src="./public/asset/img/logo.png" alt="Logo" height="50" />
        </a>

        <!-- TOGGLER (for mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-5 mb-lg-0">
            <!-- NAVBAR BERANDA -->
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./public/index.php">BERANDA</a>
            </li>

            <!--DROPDOWN PEMERINTAHAN-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" id="pemerintahan" data-bs-toggle="dropdown" aria-expanded="false"> PEMERINTAH </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./view/page/agenda.php">AGENDA</a></li>
                <!-- SUB DROPDOWN -->
                <li class="nav-item dropend">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">LAPORAN </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" id="sub-dropdown" href="./view/page/laporan.php">LAPORAN KINERJA INSTANSI PEMERINTAH</a>
                    </li>
                    <li>
                      <a class="dropdown-item" id="sub-dropdown" href="#">PERJANJIAN KINERJA</a>
                    </li>
                    <li>
                      <a class="dropdown-item" id="sub-dropdown" href="#">RENCANA KERJA PERANGKAT DAERAH</a>
                    </li>
                    <li>
                      <a class="dropdown-item" id="sub-dropdown" href="#">RENCANA STRATEGIS</a>
                    </li>
                    <li>
                      <a class="dropdown-item" id="sub-dropdown" href="#">SURVEI KEPUASAN MASYARAKAT</a>
                    </li>
                    <li>
                      <a class="dropdown-item" id="sub-dropdown" href="#">SURVEI KEPUASAN LAYANAN</a>
                    </li>
                  </ul>
                </li>
                <!--  -->
                <li class="nav-item dropend">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">KECAMATAN </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="./view/page/seribu_selatan.php" id="sub-dropdown">SERIBU SELATAN</a>
                    </li>
                    <li><a class="dropdown-item" href="./view/page/seribu_utara.php" id="sub-dropdown">SERIBU UTARA</a></li>
                  </ul>
                </li>
                <li class="nav-item dropend">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">KELURAHAN </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="./view/page/kel_untung_jawa.php" id="sub-dropdown">KEL. UNTUNG JAWA</a>
                    </li>
                    <li><a class="dropdown-item" href="./view/page/kel_pari.php" id="sub-dropdown">KEL. PARI</a></li>
                    <li><a class="dropdown-item" href="./view/page/kel_tidung.php" id="sub-dropdown">KEL. TIDUNG</a></li>
                    <li><a class="dropdown-item" href="./view/page/kel_harapan.php" id="sub-dropdown">KEL. HARAPAN</a></li>
                    <li><a class="dropdown-item" href="./view/page/kel_kelapa.php" id="sub-dropdown">KEL. KELAPA</a></li>
                    <li><a class="dropdown-item" href="./view/page/kel_panggang.php" id="sub-dropdown">KEL. PANGGANG</a></li>
                  </ul>
                </li>
                <li class="nav-item dropend">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">PROFILE PEJABAT </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./view/page/bupati.php" id="sub-dropdown">BUPATI</a></li>
                  </ul>
                </li>
                <!--END SUB DROPDOWN-->
                <li><a class="dropdown-item" href="./view/page/profil_wilayah.php" id="sub-dropdown">PROFIL WILAYAH</a></li>
                <li>
                  <a class="dropdown-item" href="#">STRUKTUR ORGANISASI</a>
                </li>
              </ul>
            </li>
            <!--END DROPDOWN PEMERINTAHAN-->

            <!--DROPDOWN PARIWISATA-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="pemerintahan" role="button" data-bs-toggle="dropdown" aria-expanded="false"> PARIWISATA </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./view/page/pariwisata.php">PARIWISATA</a></li>
                <li><a class="dropdown-item" href="./view/page/data_pengunjung.php">DATA PENGUNJUNG</a></li>
              </ul>
            </li>
            <!--END DROPDOWN PARIWISATA-->

            <!--DROPDOWN MEDIA-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="pemerintahan" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> MEDIA </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./view/page/berita.php">BERITA</a></li>
                <li><a class="dropdown-item" href="./view/page/berita_foto.php">BERITA FOTO</a></li>
                <li><a class="dropdown-item" href="#">BROADCAST</a></li>
              </ul>
            </li>
            <!--END DROPDOWN MEDIA-->

            <!-- NAVBAR PPID -->
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">PPID</a>
            </li>
          </ul>

          <!-- IKON SOSIAL MEDIA -->
          <div class="row text-center" id="icon1">
            <div class="col-4">
              <a class="nav-link" href="#" id="icon">
                <i class="fa-brands fa-youtube"></i>
              </a>
            </div>
            <div class="col-4">
              <a class="nav-link" href="#" id="icon">
                <i class="fa-brands fa-x-twitter"></i>
              </a>
            </div>
            <div class="col-4">
              <a class="nav-link" href="#" id="icon">
                <i class="fa-brands fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>