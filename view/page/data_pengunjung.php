<!-- NAVIGASI -->
<?php include "../spasial/header.php"; ?>

<!-- Konten Pariwisata -->
<div class="hero2 position-relative">
  <!-- Gambar Tetap Hero Pariwisata -->
  <div class="hero-fixed">
    <img src="./public/asset/img/background1.jpg" alt="Hero Pariwisata" style="width: 100%; height: 50vh; object-fit: cover, box-shadow: 0 10px 20px rgba(0, 0, 0,0.5);" />
  </div>

  <!-- Teks di Tengah -->
  <div class="hero-text position-absolute top-50 start-50 translate-middle text-white text-center">
    <h1 class="fw-bold display-4">Data Pengunjung</h1>
    <p class="lead">Kabupaten Administrasi Kepulauan Seribu</p>
  </div>
</div>
<div class="container" id="nama" style="padding: 5px;margin-top:30px">
  <h2>DATA PENGUNJUNG</h2>
</div>
<div class="container" style="height: 100vh;display: flex; justify-content: center;">
  <iframe  width="100rem" height="100%" 
    id="lookerstudio"
    src="https://lookerstudio.google.com/embed/reporting/53b9b6cf-c65b-4b63-88ae-fd078bacec64/page/iYEHF"
    frameborder="0"
    style="border: 0"
    allowfullscreen
    sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"
  ></iframe>
</div>
<!-- FOOTER -->
<?php include "../spasial/footer.php"; ?>
