<?php include "../fragmen/header.php"; ?>
  
<div class="hero2 position-relative">
  <!-- Gambar Tetap Hero Pariwisata -->
  <div class="hero-fixed">
    <img src="images/bgbupati.jpg" alt="Hero Pariwisata" style="width: 100%; height: 50vh; object-fit: cover, box-shadow: 0 10px 20px rgba(0, 0, 0,0.5);" />
  </div>

  <!-- Teks di Tengah -->
  <div class="hero-text position-absolute top-50 start-50 translate-middle text-white text-center">
    <h1 class="fw-bold display-4">Profil Wilayah</h1>
    <p class="lead">Kabupaten Administrasi Kepulauan Seribu</p>
  </div>
</div>


<!-- Profil Wilayah Section start -->
<div id="profil-wilayah" class="profil-wilayah">
  <div class="container">
    <div class="map-section">
      <!-- Peta Ke lokasi yang diinginkan -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d508248.81595430785!2d106.28733411257438!3d-5.6121481467635554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41d68cd396621f%3A0xa06e871c66df72b3!2sKab.%20Administrasi%20Kepulauan%20Seribu%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1746153166277!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
    </div>
  </div>
</div>
<!-- Profil Wilayah Section end -->

  <!-- geo demo -->
  <div class="container mt-5" data-aos="flip-up" data-aos-duration="1000">
  <div class="row">
    <div class="col-md-6">
      <!-- Profile Card -->
      <div class="profile-card">
        <div class="profile-card-header"><i class="fas fa-map-marker-alt icon-box"></i> Geografis</div>
        <div class="divider"></div>
        <div class="section-content">
          Berdasarkan Peraturan Daerah Provinsi Daerah Khusus Ibukota Jakarta Nomor 4 Tahun 2001, batas-batas wilayah sebagai berikut:
          <ul>
            <li>Utara : 050° 54' 26" LS</li>
            <li>Timur : 106° 57' 40" BT</li>
            <li>Selatan : 050° 59' 30" LS</li>
            <li>Barat : 106° 39' 30" BT - 106° 43' 10" BT</li>
            <li>Suhu udara rata-rata : 21°C - 32°C</li>
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
          Berdasarkan Peraturan Pemerintah Nomor 55 Tahun 2001, tentang Pembentukan Kabupaten Administrasi Kepulauan Seribu:
          <ul>
            <li>Wilayah Kelurahan Pulau Untung Jawa memiliki luas 105,18 Ha dengan jumlah Pulau 15 (lima belas) buah.</li>
            <li>Beberapa pulau antara lain: Pulau Untung Jawa, Pulau Rambut, Pulau Onrust, Pulau Cipir/Kayangan, Pulau Bidadari, dll.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Prestasi Section start -->
  <div class="container mt-4">
    <header class="text-center mb-4">
      <h1>Prestasi</h1>
    </header>

    <!-- Filter dan Pencarian -->
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="entries-per-page" class="form-label">Entries per page:</label>
        <select id="entries-per-page" class="form-select">
          <option value="10">10</option>
          <option value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
        </select>
      </div>
      <div class="col-md-6">
        <input type="text" id="search" placeholder="Search..." class="form-control">
      </div>
    </div>

    <!-- Tabel Data Prestasi -->
    <table id="prestasi-table" class="table table-bordered">
      <thead class="table-light">
        <tr>
          <th>LINGKUP</th>
          <th>KETERANGAN</th>
          <th>TAHUN</th>
        </tr>
      </thead>
      <tbody id="prestasi-tbody">
        <!-- Data Prestasi akan ditambahkan melalui JavaScript -->
      </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mb-3">
      <button class="btn btn-primary" id="prev-button">«</button>
      <span class="mx-2" id="page-number">1</span>
      <button class="btn btn-primary" id="next-button">»</button>
    </div>

    <!-- Scroll to Top Button -->
    <button class="btn btn-info" id="up-button" style="display: none;">↑</button>
  </div>

<!-- Prestasi Section end -->


  <?php include "../fragmen/footer.php"; ?>