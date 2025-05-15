<?php include "../spasial/header.php"; ?>

<div class="hero2 position-relative">
  <!-- Gambar Tetap Hero Pariwisata -->
  <div class="hero-fixed">
    <img src="./public/asset/img/seribu_selatan.jpg" alt="Hero Pariwisata" style="width: 100%; height: 85vh; object-fit: cover" />
  </div>

  <!-- Teks di Tengah -->
  <div class="hero-text position-absolute top-50 start-50 translate-middle text-white text-center">
    <h1 class="fw-bold display-4">Kecamatan Seribu Utara</h1>
    <p class="lead">Kabupaten Pulau Seribu</p>
  </div>
</div>


  <!-- geo demo -->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <!-- Profile Card -->
      <div class="profile-card">
        <div class="profile-card-header"><i class="fas fa-map-marker-alt icon-box"></i> Geografis</div>
        <div class="divider"></div>
        <div class="section-content">
          <ul>
            <li>Wilayah Kabupaten Kepulauan Seribu memiliki bentuk geografi berbentuk gugusan pulau-pulau, terbagi menjadi 2 kecamatan yang salah satunya adalah Kecamatan Seribu Selatan yang berada pada wilayah paling selatan, dan merupakan wilayah yang paling dekat dengan pulau Jawa.</li>
            <li>Wilayah ini terbagi menjadi 3 kelurahan / desa dan memiliki # pulau ( 27 pulau diantaranya telah diberikan nama ) yang terdiri dari pulau penduduk, pulau resort dan pulau observasi.</li>
            <li>Kantor Kecamatan terletak di RT.02/RW.03, Pulau Tidung, Kec. Kepulauan Seribu Selatan Kabupaten Administrasi Kepulauan Seribu, Daerah Khusus Ibukota Jakarta 14520.</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <!-- Profile Card -->
      <div class="profile-card">
        <div class="profile-card-header"><i class="fas fa-users icon-box"></i> Demografis</div>
        <div class="divider"></div>
        <div class="section-content">
        Kecamatan Kepulauan Seribu Utara membawahi tiga Kelurahan:
        <ul>
            <li>Kelurahan Pulau Panggang dengan luas 62, 10 Ha. mempunyai gugusan pulau terdiri dari 14 Pulau diantara pulau tersebut menjadi tempat Pemukiman Pulau Panggang dan Pulau Pramuka.</li>
            <li>Kelurahan Pulau Kelapa dengan luas 258, 47 Ha. mempunyai gugusan Pulau terdiri dari 36 Pulau diantara pulau tersebut menjadi tempat pemukiman Pulau Kelapa dan Pulau Kelapa Dua.</li>
            <li>Pulau Harapan dengan luas 244,72</li>
        </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 🎯 Inisialisasi dengan ID -->
<div id="kelurahan-section" class="container py-5">
  <div class="row g-4">
    <div class="col-md-4">
      <a href="./view/page/kel_harapan.php" class="card-link">
        <div class="card text-center p-4 card-hover">
          <i class="bi bi-bank icon-style text-success"></i>
          <div class="card-body">
            <h5 class="card-title">Kelurahan Pulau Harapan</h5>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="./view/page/kel_kelapa.php" class="card-link">
        <div class="card text-center p-4 card-hover">
          <i class="bi bi-bank icon-style text-success"></i>
          <div class="card-body">
            <h5 class="card-title">Kelurahan Pulau Kelapa</h5>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="./view/page/kel_panggang.php" class="card-link">
        <div class="card text-center p-4 card-hover">
          <i class="bi bi-bank icon-style text-success"></i>
          <div class="card-body">
            <h5 class="card-title">Kelurahan Pulau Panggang</h5>
          </div>
        </div>
      </a>
    </div>

    <!-- <div class="col-md-4">
      <a href="pages/kel_harapan.php" class="card-link">
        <div class="card text-center p-4 card-hover">
          <i class="bi bi-bank icon-style text-success"></i>
          <div class="card-body">
            <h5 class="card-title">Kelurahan Pulau Harapan</h5>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="pages/kel_kelapa.php" class="card-link">
        <div class="card text-center p-4 card-hover">
          <i class="bi bi-bank icon-style text-success"></i>
          <div class="card-body">
            <h5 class="card-title">Kelurahan Pulau Kelapa</h5>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="pages/kel_panggang.php" class="card-link">
        <div class="card text-center p-4 card-hover">
          <i class="bi bi-bank icon-style text-success  "></i>
          <div class="card-body">
            <h5 class="card-title">Kelurahan Pulau Panggang</h5>
          </div>
        </div>
      </a>
    </div> -->
  </div>
</div>


<div class="container mt-5" style="margin-bottom: 50px;">
  <div class="row">
    <!-- Gambar Profil (kiri) -->
    <div class="col-md-4 text-center">
      <img src="./public/asset/photo/camat_utara.jpeg" alt="angga_saputra" class="profile-image" style="width:500px;padding-right:85px" />
    </div>
    <!-- Deskripsi Profil (kanan) -->
    <div class="col-md-8">
      <div class="profile-text">
        <h3>Angga Saputra. S.STP. M.AP</h3>
        <p id="lurah">PLT Camat Seribu Utara</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur quae eligendi quasi doloremque saepe necessitatibus a ex! Hic illo laborum dolore nesciunt molestias magni eligendi culpa unde, nihil sit voluptates?</p>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque modi culpa reiciendis nostrum cumque officia fugit quasi laboriosam aspernatur suscipit omnis dicta assumenda deleniti at quibusdam, enim repellat eveniet corporis.
        </p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio libero fuga laboriosam quae tenetur. Dolores odio libero, dolorum temporibus corporis amet nesciunt provident adipisci veritatis odit nam earum. Aut, debitis?</p>
      </div>
    </div>
  </div>
</div>


<!--layanan-->
<div id="layanan-section" class="container">
  <div class="update-title">UPDATE</div>
  <div class="row g-5 align-items-stretch">
    <!-- Kolom Layanan Publik -->
    <div class="col-md-6">
      <div class="card-layanan h-100">
        <h5 class="text-success mb-4">Layanan Publik</h5>
        <div class="row text-center">
          <div class="col-6 mb-4">
            <i class="fas fa-school icon-style"></i>
            <div class="badge-service">5</div>
            <div class="service-label">PENDIDIKAN</div>
          </div>
          <div class="col-6 mb-4">
            <i class="fas fa-building icon-style"></i>
            <div class="badge-service">1</div>
            <div class="service-label">PERIZINAN</div>
          </div>
          <div class="col-6 mb-4">
            <i class="fas fa-hospital icon-style"></i>
            <div class="badge-service">2</div>
            <div class="service-label">KESEHATAN</div>
          </div>
          <div class="col-6 mb-4">
            <i class="fas fa-headset icon-style"></i>
            <div class="badge-service">3</div>
            <div class="service-label">KANAL PENGADUAN</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Kolom Gambar Survei -->
    <div class="col-md-6">
      <div class="img-box">
        <img src="./public/asset/img/skm_selatan.jpeg" alt="Survei Kepuasan Masyarakat">
      </div>
    </div>
  </div>
</div>

<div class="container">
  <h2 id="terbaru">TERBARU</h2>

  <div class="row" style="margin-left: 80px">
    <!-- Membuat row untuk menampung item berita secara vertikal -->

    <!-- News Item 1 -->
    <div class="col-md-12">
      <div class="news-item d-flex">
        <div class="news-img-wrapper">
          <img src="./public/asset/img/berita2.jpg" alt="News 2" class="img-fluid news-img" />
        </div>
        <div class="news-text">
          <h5 class="news-title">Curhat Pemilik Restoran Tangsel Dipalak Rp3 Juta per Bulan Agar Aman</h5>
          <p class="news-category">Ekonomi</p>
        </div>
      </div>
    </div>

    <!-- News Item 2 -->
    <div class="col-md-12">
      <div class="news-item d-flex">
        <div class="news-img-wrapper">
          <img src="./public/asset/img/berita2.jpg" alt="News 2" class="img-fluid news-img" />
        </div>
        <div class="news-text">
          <h5 class="news-title">Disiram Pakai Sampanye Non-alkohol, Salah Peringatkan Nunez</h5>
          <p class="news-category">Olahraga</p>
        </div>
      </div>
    </div>

    <!-- News Item 3 -->
    <div class="col-md-12">
      <div class="news-item d-flex">
        <div class="news-img-wrapper">
          <img src="./public/asset/img/berita2.jpg" alt="News 2" class="img-fluid news-img" />
        </div>
        <div class="news-text">
          <h5 class="news-title">Kerusuhan di Jakarta Tuntut Perubahan Hukum</h5>
          <p class="news-category">Politik</p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container">
    <div style="color:#00796b;border-bottom: 4px solid #fcbf49; width: fit-content;margin-bottom:40px; font-size: 2.8rem;font-weight:bold">
        DATA PUBLIKASI</div>
  <div class="row row-cols-1 row-cols-md-4 g-4">
    <!-- CARD LOOP 1 to 8 -->
    <!-- Repeat this card block 8 times -->
    <!-- CARD 1 -->
    <div class="col">
      <div class="laporan-card">
        <div class="d-flex flex-wrap gap-2 meta-info mb-2">
          <div><i class="fas fa-user"></i> Camat Utara</div>
          <div><i class="fas fa-folder-open"></i> Publikasi</div>
          <div><i class="fas fa-calendar-alt"></i> 20 Des 2023</div>
        </div>
        <div class="laporan-title">Dokumen Standar Pelayanan</div>
        <div class="laporan-desc">Penetapan Standar Pelayanan Pada Kecamatan Seribu Selatan</div>
        <a href="doc_sp/dokumen-standar-pelayanan-kecamatan-ksu-2023.pdf" style="margin-top:100px" class="btn-download"><i class="fas fa-download"></i> Download disini</a>
      </div>
    </div>

    <!-- CARD 2 -->
    <div class="col">
      <div class="laporan-card">
        <div class="d-flex flex-wrap gap-2 meta-info mb-2">
          <div><i class="fas fa-user"></i> Camat Utara</div>
          <div><i class="fas fa-folder-open"></i> Publikasi</div>
          <div><i class="fas fa-calendar-alt"></i> 31 Mei 2024</div>
        </div>
        <div class="laporan-title">Laporan SKM Kecamatan Seribu Utara Semester 1 Tahun 2024</div>
        <div class="laporan-desc">survei kepuasan masyarakat | 2024n</div>
        <a href="doc_sp/Laporan-skm-utara.pdf"  style="margin-top:70px" class="btn-download"><i class="fas fa-download"></i> Download disini</a>
      </div>
    </div>

    <!-- CARD 3 -->
    <div class="col">
      <div class="laporan-card">
        <div class="d-flex flex-wrap gap-2 meta-info mb-2">
          <div><i class="fas fa-user"></i> Admin Kecamatan</div>
          <div><i class="fas fa-folder-open"></i> Arsip</div>
          <div><i class="fas fa-calendar-alt"></i> 21 Juli 2024</div>
        </div>
        <div class="laporan-title">Rencana Kerja Perangkat Daerah Kabupaten Adm. Kepulauan Seribu Tahun 2024</div>
        <div class="laporan-desc">Rencana Kerja Perangkat Daerah | 2024</div>
        <a href="doc_sp/RK-2024-utara.pdf"  class="btn-download"><i class="fas fa-download"></i> Download disini</a>
      </div>
    </div>

    <!-- CARD 4 -->
    <div class="col">
      <div class="laporan-card">
        <div class="d-flex flex-wrap gap-2 meta-info mb-2">
          <div><i class="fas fa-user"></i> Camat Utara</div>
          <div><i class="fas fa-folder-open"></i> Publikasi</div>
          <div><i class="fas fa-calendar-alt"></i>      2024</div>
        </div>
        <div class="laporan-title">Perjanjian Kinerja Tahun 2024</div>
        <div class="laporan-desc">Perjanjian Kinerja | 2024</div>
        <a href="doc_sp/PK-2024-utara.pdf"  style="margin-top:115px"class="btn-download"><i class="fas fa-download"></i> Download disini</a>
      </div>
    </div>

    <!-- CARD 5 to 8 (Copy as needed) -->
    <div class="col">
      <div class="laporan-card">
        <div class="d-flex flex-wrap gap-2 meta-info mb-2">
          <div><i class="fas fa-user"></i> Kabupaten Pulau Seribu</div>
          <div><i class="fas fa-folder-open"></i> Publikasi</div>
          <div><i class="fas fa-calendar-alt"></i> 27 September 2024</div>
        </div>
        <div class="laporan-title">Hasil Survei Kepuasan Masyarakat Kota / Kabupaten Administrasi DKI Jakarta Semester 2 - Tahun 2024</div>
        <div class="laporan-desc">Hasil Survey Kepuasan Masyarakat | 2024</div>
        <a href="doc_sp/hasil-skm-utara.pdf" class="btn-download"><i class="fas fa-download"></i> Download disini</a>
      </div>
    </div>

    <!-- CARD 6 -->
    <div class="col">
      <div class="laporan-card">
        <div class="d-flex flex-wrap gap-2 meta-info mb-2">
          <div><i class="fas fa-user"></i> Kabupaten Pulau Seribu</div>
          <div><i class="fas fa-folder-open"></i> Publikasi</div>
          <div><i class="fas fa-calendar-alt"></i> 7 Jun 2024</div>
        </div>
        <div class="laporan-title">Hasil Survei Kepuasan Masyarakat Kota / Kabupaten Administrasi DKI Jakarta Semester 1 - Tahun 2024</div>
        <div class="laporan-desc">Hasil Survey Kepuasan Masyarakat | 2024</div>
        <a href="doc_sp/hasil-skm-sem1.pdf"  style="margin-top:65px" class="btn-download"><i class="fas fa-download"></i> Download disini</a>
      </div>
    </div>

    <!-- CARD 7 -->
    <div class="col">
      <div class="laporan-card">
        <div class="d-flex flex-wrap gap-2 meta-info mb-2">
          <div><i class="fas fa-user"></i> Kabupaten Pulau Seribu</div>
          <div><i class="fas fa-folder-open"></i> Publikasi</div>
          <div><i class="fas fa-calendar-alt"></i> 7 Nov 2023</div>
        </div>
        <div class="laporan-title">Hasil Survei Kepuasan Masyarakat Kota / Kabupaten Administrasi DKI Jakarta Semester 2 - Tahun 2023</div>
        <div class="laporan-desc">Hasil Survey Kepuasan Masyarakat | 2023</div>
        <a href="doc_sp/hasil-skm-sem2-2023.pdf" class="btn-download"><i class="fas fa-download"></i> Download disini</a>
      </div>
    </div>

    <!-- CARD 8 -->
    <div class="col">
      <div class="laporan-card">
        <div class="d-flex flex-wrap gap-2 meta-info mb-2">
          <div><i class="fas fa-user"></i> Bagian Keuangan</div>
          <div><i class="fas fa-folder-open"></i> Anggaran</div>
          <div><i class="fas fa-calendar-alt"></i>  2023</div>
        </div>
        <div class="laporan-title">Laporan Kinerja Instansi Pemerintah Tahun 2023</div>
        <div class="laporan-desc">Laporan Kinerja Pemerintah | 2023</div>
        <a href="doc_sp/laporan-kinerja-utara-2023.pdf"  style="margin-top:115px" class="btn-download"><i class="fas fa-download"></i> Download disini</a>
      </div>
    </div>

  </div>
</div>

<?php include "../spasial/footer.php"; ?>