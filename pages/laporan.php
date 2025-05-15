<?php include "../fragmen/header.php"; ?>

<div class="hero2 position-relative">
  <!-- Gambar Tetap Hero Pariwisata -->
  <div class="hero-fixed">
    <img src="images/seribu_selatan.jpg" alt="Hero Pariwisata" style="width: 100%; height: 30vh; object-fit: cover" />
  </div>

  <!-- Teks di Tengah -->
  <div class="hero-text position-absolute top-50 start-50 translate-middle text-white text-center">
    <h1 class="fw-bold display-4">Laporan</h1>
  </div>
</div>

 <!-- laporan -->
 <div class="container py-5">
    <h3 class="mb-4 fw-bold text-center">Daftar Survei Kepuasan Layanan</h3>
    <div class="row g-4 align-items-start">

      <!-- TABEL -->
      <div class="col-lg-8">
        <div class="table-responsive">
          <table id="surveyTable" class="table table-bordered table-striped align-middle">
            <thead class="table-light">
              <tr>
                <th style="width: 5%">No</th>
                <th style="width: 10%">Tahun</th>
                <th style="width: 65%">Deskripsi</th>
                <th style="width: 10%">Unduh</th>
              </tr>
            </thead>
            <tbody id="surveyBody">
              <!-- Diisi oleh JS -->
            </tbody>
          </table>
        </div>
        <div id="pagination"></div>
      </div>

      <!-- FILTER -->
      <div class="col-lg-4">
        <div class="filter-panel">
          <div class="mb-3">
            <label for="yearFilter" class="form-label">Tahun Publikasi</label>
            <input type="text" id="yearFilter" class="form-control" placeholder="Contoh: 2023">
          </div>
          <div class="d-flex gap-2">
            <button class="btn btn-primary w-50" onclick="applyYearFilter()">CARI</button>
            <button class="btn btn-secondary w-50" onclick="resetYearFilter()">RESET</button>
          </div>
        </div>
      </div>

    </div>
  </div>



<?php include "../fragmen/footer.php"; ?>