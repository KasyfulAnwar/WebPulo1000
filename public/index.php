 <?php include "../view/spasial/header.php"; ?>
    <!-- NAVIGASI -->
   

    <!-- Hero Section with Slideshow -->
    <div class="hero">
      <div class="slideshow">
        <div class="hero-slide active" style="background-image: url('./public/asset/img/background1.jpg')">
          <div class="slide-text">HARAPAN</div>
        </div>
        <div class="hero-slide" style="background-image: url('./public/asset/img/background2.jpg')">
          <div class="slide-text">SEPA</div>
        </div>
        <div class="hero-slide" style="background-image: url('./public/asset/img/background3.jpg')">
          <div class="slide-text">KELOR</div>
        </div>
      </div>
      <div class="overlay"></div>
    </div>

    <!-- section cuaca -->
    <div class="hero2">
      <div class="cuaca">
        <h2 data-aos="fade-up">SEKILAS INFO CUACA</h2>
        <div class="container" data-aos="zoom-in-up" data-aos-duration="1000">
          <a class="weatherwidget-io" href="https://forecast7.com/en/n5d74106d60/kepulauan-seribu-regency/" data-label_1="Perairan Kepulauan Seribu" data-font="Roboto Slab" data-icons="Climacons Animated" data-theme="white_leather"
            >Perairan Kepulauan Seribu</a
          >

          <br /><br />
          <span class="alert">Hujan Ringan</span>
          <p>08 Mar 2025, 19:00 s/d 09 Mar 2025, 07:00</p>
          <h4>Tinggi Gelombang: Rendah</h4>
          <p>Hari ini untuk Perairan Kep. Seribu diperkirakan hujan ringan, dengan kecepatan angin pada umumnya 1 - 14 knot bertiup dari arah utara, tinggi gelombang laut berkisar 0.5 - 1.25 m.</p>
          <div class="ket">
            <p>
              *data ini diambil dari situs
              <a href="https://www.bmkg.go.id" target="_blank" style="color: yellow">BMKG</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!--end-->

    <!-- Section Layanan Publik -->
    <div class="hero2">
      <div class="layanan-publik">
        <h2 data-aos="fade-up" data-aos-duration="1000">LAYANAN PUBLIK</h2>

        <div class="container">
          <div class="row align-items-center p-3">
            <!-- Grid Kiri: Card Layanan -->
            <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
              <div class="layanan-container">
                <div class="layanan-item">
                  <div class="layanan-icon"><i class="fas fa-wifi"></i></div>
                  <p class="layanan-title">Internet Jak Wifi</p>
                  <p class="layanan-desc">Layanan internet gratis untuk masyarakat Jakarta.</p>
                </div>

                <div class="layanan-item">
                  <div class="layanan-icon">
                    <i class="fas fa-hospital"></i>
                  </div>
                  <p class="layanan-title">Kesehatan</p>
                  <p class="layanan-desc">Informasi tentang layanan kesehatan di Jakarta.</p>
                </div>

                <div class="layanan-item">
                  <div class="layanan-icon"><i class="fas fa-bus"></i></div>
                  <p class="layanan-title">Transportasi</p>
                  <p class="layanan-desc">Informasi transportasi umum di Jakarta.</p>
                </div>

                <div class="layanan-item">
                  <div class="layanan-icon"><i class="fas fa-user-md"></i></div>
                  <p class="layanan-title">Kesehatan</p>
                  <p class="layanan-desc">Pelayanan kesehatan dan program kesehatan di Jakarta.</p>
                </div>

                <div class="layanan-item">
                  <div class="layanan-icon">
                    <i class="fas fa-umbrella-beach"></i>
                  </div>
                  <p class="layanan-title">Pariwisata</p>
                  <p class="layanan-desc">Destinasi wisata dan event di Jakarta.</p>
                </div>

                <div class="layanan-item">
                  <div class="layanan-icon"><i class="fas fa-tree"></i></div>
                  <p class="layanan-title">RPTRA</p>
                  <p class="layanan-desc">Ruang Publik Terpadu Ramah Anak untuk masyarakat.</p>
                </div>
              </div>
            </div>

            <!-- Grid Kanan: Gambar -->
            <div class="col-md-6 mt-3" data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000">
              <div class="layanan-images d-flex flex-column gap-4">
                <div class="layanan-img">
                  <img src="./public/asset/photo/SKM.jpg" alt="Gambar 1" class="img-fluid rounded shadow" />
                </div>
                <div class="layanan-img">
                  <img src="./public/asset/img/wisatawan.png" alt="Gambar 2" class="img-fluid rounded shadow" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section Pejabat -->
    <div class="hero2">
      <div class="officials" data-aos="fade-up" data-aos-duration="1000">
        <div id="tag-pejabat">
          <h2 style="color: #006d6a">PEJABAT DAERAH</h2>
          <p>KABUPATEN ADMINISTRASI KEPULAUAN SERIBU</p>
          <p class="period">Periode 2025 - 2029</p>
        </div>
        <div class="container-fluid">
          <div class="row">
            <!-- Grid Kiri -->
            <div class="col-md-5">
              <div style="width: 100%; height: auto">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>

                  <!-- Carousel Items -->
                  <div class="carousel-inner" data-aos="fade-right" data-aos-duration="1000">
                    <div class="carousel-item active" id="carouselExampleCaptions" class="carousel slide">
                      <img src="./public/asset/photo/Pramono_Anung_Gubernur_DKI.jpg" class="d-block img-bordered w-75" alt="Gubernur" />
                      <div class="carousel-caption d-none d-md-block"></div>
                    </div>

                    <div class="carousel-item">
                      <img src="./public/asset/photo/Pramono_Anung_Gubernur_DKI - 2.jpg" class="d-block img-bordered w-75" alt="Gubernur" />
                      <div class="carousel-caption d-none d-md-block"></div>
                    </div>

                    <div class="carousel-item">
                      <img src="./public/asset/photo/plt_bupati_fadjar_putih.png" class="d-block img-bordered w-75" alt="Sekda" />
                      <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Grid Kanan -->
            <div class="col-md-6 d-flex flex-column p-4 bg-light" style="border-radius: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px">
              <h4 class="mb-3">Agenda Pejabat</h4>
              <div class="agenda-container">
                <div class="agenda-card">
                  <h6>📅 25 Maret 2025</h6>
                  <p><strong>Informasi:</strong> Peresmian Gedung Baru</p>
                  <p><strong>Pejabat:</strong> Pramono Anung</p>
                  <p><strong>Lokasi:</strong> Rumah Fadil</p>
                </div>

                <div class="agenda-card">
                  <h6>📅 27 Maret 2025</h6>
                  <p><strong>Informasi:</strong> Rapat Koordinasi Wilayah</p>
                  <p><strong>Pejabat:</strong> Rano Karno</p>
                  <p><strong>Lokasi:</strong> Rumah Fadil</p>
                </div>

                <div class="agenda-card">
                  <h6>📅 29 Maret 2025</h6>
                  <p><strong>Informasi:</strong> Kunjungan Kerja ke Kepulauan Seribu</p>
                  <p><strong>Pejabat:</strong> Nama Lainnya</p>
                  <p><strong>Lokasi:</strong> Rumah Fadil</p>
                </div>

                <div class="agenda-card">
                  <h6>📅 30 Maret 2025</h6>
                  <p><strong>Informasi:</strong> Diskusi Publik</p>
                  <p><strong>Pejabat:</strong> Pramono Anung</p>
                  <p><strong>Lokasi:</strong> Rumah Fadil</p>
                </div>

                <div class="agenda-card">
                  <h6>📅 1 April 2025</h6>
                  <p><strong>Informasi:</strong> Pelantikan Pejabat Baru</p>
                  <p><strong>Pejabat:</strong> Rano Karno</p>
                  <p><strong>Lokasi:</strong> Rumah Fadil</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- section Berita terbaru -->
    <div class="hero2">
      <div class="news-container" data-aos="fade-down" data-aos-duration="1000">
        <h2>BERITA TERBARU</h2>
        <div class="news-grid">
          <div class="news-card" data-views="50">
            <div class="category">Kesejahteraan Masyarakat</div>
            <img src="./public/asset/photo/pulau-tidung.jpg" alt="Berita 1" />
            <h3>Fasilitas Mesin ATM Bank DKI di Pulau Panggang Kembali Beroperasi</h3>
            <p>Mesin ATM Bank DKI di Pulau Panggang, Kepulauan Seribu Utara kembali beroperasi setelah sebelumnya tidak berfungsi...</p>
            <button class="button">Lihat Detail</button>
            <div class="meta">
              <span>📅 8 Maret 2025</span>
              <span class="views"><i class="fa-solid fa-fire"></i></span>
              <span class="views-count">View 50</span>
            </div>
          </div>

          <div class="news-card" data-views="8">
            <div class="category">Kesejahteraan Masyarakat</div>
            <img src="./public/asset/photo/Pulau Pramuka, Kepulauan Seribu.jpeg" alt="Berita 2" />
            <h3>Kepulauan Seribu Memiliki Potensi Pencegahan Stunting</h3>
            <p>Stunting masih menjadi tantangan di Indonesia, termasuk di Kepulauan Seribu, yang dikenal memiliki sumber protein hewani dari ikan...</p>
            <button class="button">Lihat Detail</button>
            <div class="meta">
              <span>📅 8 Maret 2025</span>
              <span class="views"><i class="fa-solid fa-fire"></i></span>
              <span class="views-count">View 8</span>
            </div>
          </div>

          <div class="news-card" data-views="20">
            <div class="category">Kesejahteraan Masyarakat</div>
            <img src="./public/asset/photo/Pulau Tidung, Kepulauan Seribu.jpeg" alt="Berita 3" />
            <h3>Sudin PPKUKM Kepulauan Seribu Selenggarakan Pangan Murah</h3>
            <p>Suku Dinas Perindustrian, Perdagangan, Koperasi, Usaha Kecil, dan Menengah akan menggelar kegiatan pangan murah...</p>
            <button class="button">Lihat Detail</button>
            <div class="meta">
              <span>📅 8 Maret 2025</span>
              <span class="views"><i class="fa-solid fa-fire"></i></span>
              <span class="views-count">View 20</span>
            </div>
          </div>
        </div>

        <div class="pegination">
          <a href="#">Lihat Semuanya <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    <!-- section berita terbaaru end-->

    <!-- section panorama -->
    <div class="hero2">
      <div class="panorama" data-aos="fade-up" data-aos-duration="1000">
        <h2>PANORAMA</h2>
        <div class="grid-container">
          <div class="grid-item">
            <a href="images/pano.jpg" data-fancybox="gallery">
              <img src="./public/asset/img/pano.jpg" alt="Pulau Tropis" />
            </a>
          </div>
          <div class="grid-item">
            <a href="images/pano2.jpg" data-fancybox="gallery">
              <img src="./public/asset/img/pano2.jpg" alt="Terumbu Karang" />
            </a>
          </div>
          <div class="grid-item">
            <a href="images/pano3.jpg" data-fancybox="gallery">
              <img src="./public/asset/img/pano3.jpg" alt="Pantai dan Perahu" />
            </a>
          </div>
          <div class="grid-item">
            <a href="images/pano4.jpg" data-fancybox="gallery">
              <img src="./public/asset/img/pano4.jpg" alt="Langit Senja" />
            </a>
          </div>
          <div class="grid-item">
            <a href="images/pano5.jpg" data-fancybox="gallery">
              <img src="./public/asset/img/pano5.jpg" alt="Hutan Tropis" />
            </a>
          </div>
          <div class="grid-item">
            <a href="images/pano6.jpg" data-fancybox="gallery">
              <img src="./public/asset/img/pano6.jpg" alt="Pulau Kecil" />
            </a>
          </div>
          <div class="grid-item">
            <a href="images/pano7.jpg" data-fancybox="gallery">
              <img src="./public/asset/img/pano7.jpg" alt="Pulau Kecil" />
            </a>
          </div>
          <div class="grid-item">
            <a href="images/pano8.jpg" data-fancybox="gallery">
              <img src="./public/asset/img/pano8.jpg" alt="Pulau Kecil" />
            </a>
          </div>
        </div>
      </div>
    </div>

    <?php include "../view/spasial/footer.php"; ?>
