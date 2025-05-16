<!-- NAVIGASI -->
<?php include "../spasial/header.php"; ?>

<div class="hero2 position-relative">
  <!-- Gambar Tetap Hero Pariwisata -->
  <div class="hero-fixed">
    <img src="./public/asset/img/bg5.jpg" alt="Hero Pariwisata" style="width: 100%; height: 50vh; object-fit: cover, box-shadow: 0 10px 20px rgba(0, 0, 0,0.5);" />
  </div>

  <!-- Teks di Tengah -->
<div class="hero-text position-absolute text-white text-center">    <h1 class="fw-bold display-4">Pariwisata</h1>
    <p class="lead">Kabupaten Administrasi Kepulauan Seribu</p>
  </div>
</div>

<!-- Destinasi Cards -->
<div class="container mb-5" data-aos="fade-up" data-aos-duration="1000">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <!-- Card 1 -->
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="./public/asset/img/background1.jpg" class="card-img-top" alt="Pantai Bali" />
        <div class="card-body">
          <h5 class="card-title">Pantai Kuta, Bali</h5>
          <p class="card-text">Nikmati matahari terbenam yang menakjubkan di pantai paling ikonik di Indonesia.</p>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="./public/asset/img/background2.jpg" class="card-img-top" alt="Candi Borobudur" />
        <div class="card-body">
          <h5 class="card-title">Candi Borobudur</h5>
          <p class="card-text">Warisan budaya dunia yang megah, penuh makna dan sejarah peradaban Nusantara.</p>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="./public/asset/img/background3.jpg" class="card-img-top" alt="Raja Ampat" />
        <div class="card-body">
          <h5 class="card-title">Raja Ampat, Papua</h5>
          <p class="card-text">Surga bawah laut yang tiada duanya, cocok untuk para pecinta snorkeling dan diving.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Gallery Grid -->
<section class="container mb-5" data-aos="fade-up" data-aos-duration="1000">
  <h2 class="mb-4" style="text-align: center; padding-right: 210px">Galeri Destinasi</h2>
  <div class="row g-3">
    <div class="col-md-3 col-6">
      <img src="./public/asset/img/desti1.jpg" class="gallery-img" alt="Gunung" data-fancybox="gallery" />
    </div>
    <div class="col-md-3 col-6">
      <img src="./public/asset/img/desti2.jpeg" class="gallery-img" alt="Danau" data-fancybox="gallery" />
    </div>
    <div class="col-md-3 col-6">
      <img src="./public/asset/img/desti3.jpeg" class="gallery-img" alt="Hutan" data-fancybox="gallery" />
    </div>
    <div class="col-md-3 col-6">
      <img src="./public/asset/img/desti4.jpeg" class="gallery-img" alt="Air Terjun" data-fancybox="gallery" />
    </div>
  </div>
</section>

<!-- Dermaga dan Keberangkatan -->
<section class="container mb-5">
  <h2 class="text-center mb-4" style="padding-right: 210px">Informasi Dermaga & Keberangkatan Kapal</h2>
  <!-- Filter Dropdowns -->
  <div class="d-flex flex-wrap align-items-end mb-3">
    <div class="me-2 mb-2">
      
      <select id="filterDermaga" class="form-select">
        <option value="">Semua Dermaga</option>
        <option value="Dermaga Muara Angke">Dermaga Muara Angke</option>
        <option value="Dermaga Sanur">Dermaga Sanur</option>
        <option value="Dermaga Ketapang">Dermaga Ketapang</option>
        <option value="Dermaga Tanjung Perak">Dermaga Tanjung Perak</option>
      </select>
    </div>

    <div class="me-2 mb-2">
      
      <select id="filterTujuan" class="form-select">
        <option value="">Semua Tujuan</option>
        <option value="Pulau Seribu">Pulau Seribu</option>
        <option value="Nusa Penida">Nusa Penida</option>
        <option value="Bali">Bali</option>
        <option value="Kalimantan">Kalimantan</option>
      </select>
    </div>

    <div class="mb-2">
      <button class="btn btn-primary" onclick="filterTable()">Cari</button>
    </div>
  </div>
  <div class="table-responsive table-custom">
    <table class="table align-middle" id="tabelDermaga">
      <thead>
        <tr>
          <th>Nama Dermaga</th>
          <th>Tujuan</th>
          <th>Jam Keberangkatan</th>
          <th>Jam Keberangkatan</th>

          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Dermaga Muara Angke</td>
          <td>Pulau Seribu</td>
          <td>07:00 WIB</td>
          <td>07:00 WIB</td>

          <td><span class="badge bg-success">Tersedia</span></td>
        </tr>
        <tr>
          <td>Dermaga Sanur</td>
          <td>Nusa Penida</td>
          <td>08:30 WITA</td>
          <td>08:30 WITA</td>

          <td><span class="badge bg-warning text-dark">Hampir Penuh</span></td>
        </tr>
        <tr>
          <td>Dermaga Ketapang</td>
          <td>Bali</td>
          <td>10:00 WIB</td>
          <td>10:00 WIB</td>

          <td><span class="badge bg-danger">Penuh</span></td>
        </tr>
        <tr>
          <td>Dermaga Tanjung Perak</td>
          <td>Kalimantan</td>
          <td>13:00 WIB</td>
          <td>13:00 WIB</td>

          <td><span class="badge bg-success">Tersedia</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<?php
  // switch($_GET['request']){
  //   case 'pengunjung':
  //     include 'data_pengunjung.php';
  //   break;

  //   case 'transportasi':
  //     include 'component/pariwisata/transportasi.php';
  //   break;

  //   default:
  //     include 'transport.php';
  //   break;

  // }

?>

<!-- FOOTER -->
<?php include "../spasial/footer.php"; ?>
