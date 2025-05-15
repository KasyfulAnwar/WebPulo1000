//navbar start
document.addEventListener('DOMContentLoaded', function () {
  let dropdowns = document.querySelectorAll('.nav-item.dropdown');

  dropdowns.forEach((dropdown) => {
    let link = dropdown.querySelector('.nav-link');

    // Buka dropdown saat mouse diarahkan ke link
    link.addEventListener('mouseenter', function () {
      dropdown.classList.add('show');
      dropdown.querySelector('.dropdown-menu').classList.add('show');
    });

    // Tutup dropdown saat mouse keluar dari dropdown
    dropdown.addEventListener('mouseleave', function () {
      dropdown.classList.remove('show');
      dropdown.querySelector('.dropdown-menu').classList.remove('show');
    });
  });

  // Klik di luar akan menutup dropdown
  document.addEventListener('click', function (event) {
    dropdowns.forEach((dropdown) => {
      if (!dropdown.contains(event.target)) {
        dropdown.classList.remove('show');
        dropdown.querySelector('.dropdown-menu').classList.remove('show');
      }
    });
  });
});

// 🎞️ HERO SECTION SLIDESHOW start
function initHeroSlider() {
  let heroIndex = 0;
  const heroSlides = document.querySelectorAll('.hero-slide');

  function changeHeroSlide() {
    heroSlides.forEach((slide) => slide.classList.remove('active'));
    heroSlides[heroIndex].classList.add('active');

    heroIndex++;
    if (heroIndex >= heroSlides.length) {
      heroIndex = 0;
    }
  }

  setInterval(changeHeroSlide, 2000); // Ganti slide hero setiap 2 detik
}
initHeroSlider();
// 🎞️ HERO SECTION SLIDESHOW end

// SECTION CUACA END
!(function (d, s, id) {
  var js,
    fjs = d.getElementsByTagName(s)[0];
  if (!d.getElementById(id)) {
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://weatherwidget.io/js/widget.min.js';
    fjs.parentNode.insertBefore(js, fjs);
  }
})(document, 'script', 'weatherwidget-io-js');

//SECTION CUACA END

//BERITA TERBARU
document.addEventListener('DOMContentLoaded', function () {
  const newsCards = document.querySelectorAll('.news-card');

  newsCards.forEach((card) => {
    const views = parseInt(card.getAttribute('data-views')) || 0;
    const fireIcon = card.querySelector('.views');

    if (views > 10) {
      fireIcon.style.display = 'block';
    } else {
      fireIcon.style.display = 'none';
    }
  });
});
//BERITA TERBARU END

//PANORAMA
Fancybox.bind('[data-fancybox="gallery"]', {
  Toolbar: {
    display: ['counter', 'prev', 'next', 'close'],
  },
  Carousel: {
    infinite: true,
  },
});

//LOADER
window.addEventListener('load', function () {
  const loader = document.querySelector('.loading');

  setTimeout(() => {
    loader.style.transition = 'opacity 0.5s ease';
    loader.style.opacity = '0';

    setTimeout(() => {
      loader.style.display = 'none';
      document.getElementById('main-content').style.display = 'block';
    }, 500); // Nunggu fade-out selesai
  }, 2000);
});

//filter table dermaga

function filterTable() {
  const dermagaValue = document.getElementById('filterDermaga').value.toLowerCase();
  const tujuanValue = document.getElementById('filterTujuan').value.toLowerCase();
  const rows = document.querySelectorAll('#tabelDermaga tbody tr');

  rows.forEach((row) => {
    const dermagaText = row.cells[0].textContent.toLowerCase();
    const tujuanText = row.cells[1].textContent.toLowerCase();

    let showRow = true;

    if (dermagaValue && tujuanValue) {
      showRow = dermagaText === dermagaValue && tujuanText === tujuanValue;
    } else if (dermagaValue) {
      showRow = dermagaText === dermagaValue;
    } else if (tujuanValue) {
      showRow = tujuanText === tujuanValue;
    }

    row.style.display = showRow ? '' : 'none';
  });
}

//pulau untung

//prestasi profil wilayah
// script.js
document.addEventListener('DOMContentLoaded', function () {
  const entriesPerPageSelect = document.getElementById('entries-per-page');
  const searchInput = document.getElementById('search');
  const tableBody = document.getElementById('prestasi-tbody');
  const prevButton = document.getElementById('prev-button');
  const nextButton = document.getElementById('next-button');
  const pageNumberDisplay = document.getElementById('page-number');
  const upButton = document.getElementById('up-button');

  let data = [
    { scope: 'NASIONAL', description: 'PENGHARGAAN PIALA ADIPURA TAHUN 2023', year: 2024 },
    { scope: 'NASIONAL', description: 'PENGHARGAAN MAPI 2023 UNTUK KATEGORI INOVASI PELAYANAN PUBLIK ANTAR PULAU', year: 2023 },
    { scope: 'NASIONAL', description: 'PENGHARGAAN SERTIFIKAT ADIPURA TAHUN 2022', year: 2023 },
    { scope: 'NASIONAL', description: 'PENGHARGAAN UNIVERSAL HEALTH COVERAGE (UHC)', year: 2023 },
    { scope: 'NASIONAL', description: 'PENGHARGAAN KEPADA PEMERINTAH DAERAH YANG TELAH MENGIMPLEMENTASIKAN PROGRAM MERDEKA BELAJAR DARI KEMENDIKBUDRISTEK RI', year: 2023 },
    { scope: 'NASIONAL', description: 'PENGHARGAAN KABUPATEN/KOTA LAYAK ANAK (KLA) TAHUN 2023 KATEGORI NINDYA DARI KEMENTERIAN PPPA RI', year: 2023 },
    { scope: 'NASIONAL', description: 'PENGHARGAAN ANUGERAH DESA WISATA INDONESIA (ADWI) 2023 UNTUK KATEGORI HOMESTAY DAN TOILET DARI KEMENPAREKRAF RI', year: 2023 },
    { scope: 'NASIONAL', description: 'TROFI PROGRAM KAMPUNG IKLIM (PROKLIM) KATEGORI UTAMA TAHUN 2023', year: 2023 },
    { scope: 'NASIONAL', description: 'PENGHARGAAN SWASTI SABA PADAPA PADA LOMBA KABUPATEN/KOTA SEHAT DARI KEMENKES RI TAHUN 2023', year: 2023 },
    { scope: 'NASIONAL', description: 'PENGHARGAAN DUKCAPIL PRIMA AWARD DARI KEMENDAGRI RI', year: 2023 },
    // Tambahkan lebih banyak data jika perlu
  ];

  let currentPage = 1;
  let entriesPerPage = parseInt(entriesPerPageSelect.value, 10);
  let filteredData = data;

  function renderTable() {
    tableBody.innerHTML = '';
    const start = (currentPage - 1) * entriesPerPage;
    const end = start + entriesPerPage;

    const paginatedData = filteredData.slice(start, end);

    paginatedData.forEach((item) => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${item.scope}</td>
        <td>${item.description}</td>
        <td>${item.year}</td>
      `;
      tableBody.appendChild(row);
    });

    pageNumberDisplay.textContent = currentPage;
    togglePaginationButtons();
    toggleScrollButton();
  }

  function togglePaginationButtons() {
    const totalPages = Math.ceil(filteredData.length / entriesPerPage);
    prevButton.disabled = currentPage === 1;
    nextButton.disabled = currentPage === totalPages;
  }

  function toggleScrollButton() {
    if (window.scrollY > 300) {
      upButton.style.display = 'block';
    } else {
      upButton.style.display = 'none';
    }
  }

  function handleSearch() {
    const searchTerm = searchInput.value.toLowerCase();
    filteredData = data.filter((item) => {
      return item.scope.toLowerCase().includes(searchTerm) || item.description.toLowerCase().includes(searchTerm) || item.year.toString().includes(searchTerm);
    });
    currentPage = 1;
    renderTable();
  }

  function handleEntriesPerPageChange() {
    entriesPerPage = parseInt(entriesPerPageSelect.value, 10);
    currentPage = 1;
    renderTable();
  }

  function handlePrevPage() {
    if (currentPage > 1) {
      currentPage--;
      renderTable();
    }
  }

  function handleNextPage() {
    const totalPages = Math.ceil(filteredData.length / entriesPerPage);
    if (currentPage < totalPages) {
      currentPage++;
      renderTable();
    }
  }

  function handleScrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  // Event Listeners
  entriesPerPageSelect.addEventListener('change', handleEntriesPerPageChange);
  searchInput.addEventListener('input', handleSearch);
  prevButton.addEventListener('click', handlePrevPage);
  nextButton.addEventListener('click', handleNextPage);
  upButton.addEventListener('click', handleScrollToTop);

  // Initial Table Render
  renderTable();
});

// Menampilkan tombol scroll ke atas setelah menggulir
window.addEventListener('scroll', function () {
  const upButton = document.getElementById('up-button');
  if (window.scrollY > 300) {
    upButton.classList.add('show');
  } else {
    upButton.classList.remove('show');
  }
});

//agenda
document.addEventListener('DOMContentLoaded', function () {
  const filterButtons = document.querySelectorAll('.filter-btn');
  const agendaItems = document.querySelectorAll('.agenda-item');
  const pejabatPhoto = document.getElementById('pejabatPhoto');

  const photoMap = {
    bupati: 'public/asset/photo/plt_bupati_fadjar_putih.png',
    wakil: 'assets/photo/SKM.jpg',
    sekretaris: 'assets/photo/sekretaris.jpg',
  };

  filterButtons.forEach((button) => {
    button.addEventListener('click', () => {
      filterButtons.forEach((btn) => btn.classList.remove('active'));
      button.classList.add('active');

      const selectedRole = button.dataset.role;

      // Update photo
      if (photoMap[selectedRole]) {
        pejabatPhoto.src = photoMap[selectedRole];
      }

      // Show/Hide agenda items
      agendaItems.forEach((item) => {
        const itemRole = item.dataset.role;
        item.style.display = itemRole === selectedRole ? 'flex' : 'none';
      });
    });
  });

  // Auto-trigger default filter
  document.querySelector('.filter-btn[data-role="bupati"]').click();
});

// LAPORAN
const surveyData = [
  { id: 1, tahun: 2023, deskripsi: 'Survei Kepuasan Layanan Masyarakat Triwulan IV Tahun 2023', file: 'doc_sp/dokumen-standar-pelayanan-kecamatan-ksu-2023.pdf' },
  { id: 2, tahun: 2023, deskripsi: 'Survei Kepuasan Layanan Masyarakat Triwulan III Tahun 2023', file: 'files/survei_q3_2023.pdf' },
  { id: 3, tahun: 2023, deskripsi: 'Survei Kepuasan Layanan Masyarakat Triwulan II Tahun 2023', file: 'files/survei_q2_2023.pdf' },
  { id: 4, tahun: 2023, deskripsi: 'Survei Kepuasan Layanan Masyarakat Triwulan I Tahun 2023', file: 'files/survei_q1_2023.pdf' },
  { id: 5, tahun: 2022, deskripsi: 'Survei Kepuasan Layanan Masyarakat Triwulan IV Tahun 2022', file: 'files/survei_q4_2022.pdf' },
  { id: 6, tahun: 2022, deskripsi: 'Survei Kepuasan Layanan Masyarakat Triwulan III Tahun 2022', file: 'files/survei_q3_2022.pdf' },
  { id: 7, tahun: 2022, deskripsi: 'Survei Kepuasan Layanan Masyarakat Triwulan II Tahun 2022', file: 'files/survei_q2_2022.pdf' },
  { id: 8, tahun: 2022, deskripsi: 'Survei Kepuasan Layanan Masyarakat Triwulan I Tahun 2022', file: 'files/survei_q1_2022.pdf' },
  { id: 9, tahun: 2021, deskripsi: 'Survei Kepuasan Layanan Masyarakat Triwulan IV Tahun 2021', file: 'files/survei_q4_2021.pdf' },
  { id: 10, tahun: 2021, deskripsi: 'Survei Kepuasan Layanan Masyarakat Triwulan III Tahun 2021', file: 'files/survei_q3_2021.pdf' },
  { id: 11, tahun: 2021, deskripsi: 'Survei Kepuasan Layanan Masyarakat Triwulan II Tahun 2021', file: 'files/survei_q2_2021.pdf' },
  { id: 12, tahun: 2021, deskripsi: 'Survei Kepuasan Layanan Masyarakat Triwulan I Tahun 2021', file: 'files/survei_q1_2021.pdf' },
  { id: 13, tahun: 2021, deskripsi: 'Survei Kepuasan Layanan Masyarakat Triwulan I Tahun 2021', file: 'files/survei_q1_2021.pdf' },
  { id: 14, tahun: 2021, deskripsi: 'Survei Kepuasan Layanan Masyarakat Triwulan I Tahun 2021', file: 'files/survei_q1_2021.pdf' },
  { id: 15, tahun: 2021, deskripsi: 'Survei Kepuasan Layanan Masyarakat Triwulan I Tahun 2021', file: 'files/survei_q1_2021.pdf' },
];

let currentPage = 1;
const itemsPerPage = 5;
let filteredData = [...surveyData];

function renderTable(data) {
  const tbody = document.getElementById('surveyBody');
  tbody.innerHTML = '';
  const start = (currentPage - 1) * itemsPerPage;
  const end = start + itemsPerPage;
  const paginatedData = data.slice(start, end);

  paginatedData.forEach((item) => {
    tbody.innerHTML += `
      <tr>
        <td class="text-center">${item.id}</td>
        <td class="text-center">${item.tahun}</td>
        <td>${item.deskripsi}</td>
        <td class="text-center">
          <a href="${item.file}" id="unduh_laporan" download class="btn" title="Unduh">
            <i class="fas fa-download"></i>
          </a>
        </td>
      </tr>
    `;
  });
}

function renderPagination(data) {
  const totalPages = Math.ceil(data.length / itemsPerPage);
  const paginationContainer = document.getElementById('pagination');
  paginationContainer.innerHTML = '';

  for (let i = 1; i <= totalPages; i++) {
    const button = document.createElement('button');
    button.innerText = i;
    if (i === currentPage) button.classList.add('active');
    button.onclick = () => goToPage(i);
    paginationContainer.appendChild(button);
  }
}

function goToPage(page) {
  currentPage = page;
  renderTable(filteredData);
  renderPagination(filteredData);
}

function applyYearFilter() {
  const year = document.getElementById('yearFilter').value.trim();
  filteredData = year ? surveyData.filter((item) => item.tahun.toString() === year) : [...surveyData];
  currentPage = 1;
  renderTable(filteredData);
  renderPagination(filteredData);
}

function resetYearFilter() {
  document.getElementById('yearFilter').value = '';
  filteredData = [...surveyData];
  currentPage = 1;
  renderTable(filteredData);
  renderPagination(filteredData);
}

document.addEventListener('DOMContentLoaded', () => {
  renderTable(filteredData);
  renderPagination(filteredData);
});
