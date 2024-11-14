<html>
  <body>/
   <style>
      /* Styling dasar */
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        display: flex;
        justify-content: center;
        padding: 20px;
      }

      .group-3-fasilitas {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        position: absolute;
        width: 1137px;
        height: 649px;
        top: 638px;
        left: 168px;
      }

      /* Button group styling - diperbesar */
      .button-group {
        display: flex;
        flex-direction: column;
        gap: 15px;
        padding: 15px;
      }

      .button-group button {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 15px 20px;
        font-size: 18px; /* Ukuran font diperbesar */
        font-weight: bold;
        border: none;
        border-radius: 8px; /* Tambahkan sedikit rounding pada tombol */
        cursor: pointer;
        background-color: #84cfec;
        color: white;
        transition: background-color 0.3s, transform 0.2s; /* Tambahkan animasi untuk hover */
      }

      .button-group button:hover {
        background-color: #555;
        transform: scale(1.05); /* Efek pembesaran saat hover */
      }

      /* Warna aktif menjadi biru 4863A0 */
      .button-group button.active {
        background-color: #4863A0;
      }

      .group-4-fasilitas{
        max-width: 600px;
        position: absolute;
        width: 844px;
        height: 234px;
        top: 415px;
        left: 150px;
      }

      .text-wrapper-3-fasilitas {
        position: absolute;
        width: 654px;
        top: 0;
        left: 50;
        font-family: var(--display-2-font-family);
        letter-spacing: var(--display-2-letter-spacing);
        line-height: var(--display-2-line-height);
        font-style: var(--display-2-font-style);
        font-size: 24px;  
        font-weight: bold;
        color: #333;
      }

      /* .group-5-fasilitas, .group-6-fasilitas, .group-7-fasilitas, .group-8-fasilitas, .group-9-fasilitas {
        margin: 10px 0;
        width: 213px;
  height: 29px;
  top: 180px;
      } */

      /* .rectangle-4-fasilitas {
        width: 50px;
        height: 5px;
        background-color: #333;
        margin-top: 5px;
      } */

      .p, .text-wrapper-7-fasilitas {
        margin-top: 10px;
        font-size: 14px;
        color: #555;
      }

      /* Konten yang disembunyikan */
      .hidden {
        display: none;
      }
    </style> 

    <div class="fasilitas">
      <div class="sub-head-fasilitas">
        <div class="overlap-fasilitas">
          <div class="group-fasilitas">
            <div class="overlap-group-fasilitas">
              <div class="frame-fasilitas">
                <div class="ellipse-fasilitas"></div>
                <div class="div-fasilitas"></div>
              </div>
              <div class="group-2-fasilitas">
                <div class="rectangle-fasilitas"></div>
                <div class="rectangle-2-fasilitas"></div>
                <div class="rectangle-3-fasilitas"></div>
              </div>
            </div>
          </div>
          <div class="overlap-wrapper-fasilitas">
            <div class="overlap-2-fasilitas">
              <div class="text-wrapper-fasilitas">Fasilitas</div>
              <div class="text-wrapper-2-fasilitas">Beranda / Fasilitas</div>
            </div>
          </div>
        </div>
      </div>
      <div class="group-3-fasilitas">
        <!--<img class="img-fasilitas" src="img/group-118.png" /> -->
        <div class="group-4-fasilitas">
          <div class="text-wrapper-3-fasilitas"></div>
          <div class="group-5-fasilitas">
            <div class="group-wrapper-fasilitas">
              <div class="group-6-fasilitas">
                <!-- <div class="text-wrapper-4-fasilitas">Laboratorium</div> -->
                <!-- <div class="rectangle-4-fasilitas"></div> -->
              </div>
            </div>
            <div class="div-wrapper-fasilitas">
              <div class="group-7-fasilitas">
                <!-- <div class="text-wrapper-5-fasilitas">Radiologi</div>
                <div class="rectangle-4-fasilitas"></div> -->
              </div>
            </div>
            <div class="group-8-fasilitas">
              <div class="group-9-fasilitas">
                <!-- <div class="text-wrapper-6-fasilitas">Farmasi</div>
                <div class="rectangle-4-fasilitas"></div> -->
              </div>
            </div>
          </div>
          <!-- <p class="p-fasilitas">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare ornare.
            Quisque placerat scelerisque tortor ornare ornare Convallis felis vitae tortor augue. Velit nascetur proin
            massa in. Consequat faucibus porttitor enim.
          </p> -->
          <!-- <p class="text-wrapper-7-fasilitas">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare.
          </p> -->
        </div>
        <img class="rectangle-5-fasilitas" src="img/rectangle-13.png" />
      </div>
    
      
      <div class="group-3-fasilitas">
        <div class="group-4-fasilitas">
          <div id="vip" class="content-section">
            <div class="text-wrapper-3-fasilitas">VIP</div>
            <p class="p"><p class="p-fasilitas">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare ornare.
              Quisque placerat scelerisque tortor ornare ornare Convallis felis vitae tortor augue. Velit nascetur proin
              massa in. Consequat faucibus porttitor enim.
            </p>
            <div class="group-5-fasilitas">
              <div class="group-wrapper-fasilitas">
                <!-- <div class="group-6-fasilitas">
                  <div class="text-wrapper-4-fasilitas">Laboratorium</div>
                  <div class="rectangle-4-fasilitas"></div>
                </div> -->
              </div>
              <div class="div-wrapper">
                <!-- <div class="group-7-fasilitas">
                  <div class="text-wrapper-5-fasilitas">Radiologi</div>
                  <div class="rectangle-4-fasilitas"></div>
                </div> -->
              </div>
              <div class="group-8-fasilitas">
                <!-- <div class="group-9-fasilitas">
                  <div class="text-wrapper-6-fasilitas">Farmasi</div>
                  <div class="rectangle-4-fasilitas"></div>
                </div> -->
              </div>
            </div>
          </div>
    
          
          <div id="kelas1" class="content-section hidden">
            <div class="text-wrapper-3-fasilitas">Kelas 1</div>
            <p class="p"><p class="p-fasilitas">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare ornare.
              Quisque placerat scelerisque tortor ornare ornare Convallis felis vitae tortor augue. Velit nascetur proin
              massa in. Consequat faucibus porttitor enim.
            </p>
          </div>
    
         
          <div id="kelas2" class="content-section hidden">
            <div class="text-wrapper-3-fasilitas">Kelas 2</div>
            <p class="p"><p class="p-fasilitas">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare ornare.
              Quisque placerat scelerisque tortor ornare ornare Convallis felis vitae tortor augue. Velit nascetur proin
              massa in. Consequat faucibus porttitor enim.
            </p>
          </div>

       
          <div id="kelas3" class="content-section hidden">
            <div class="text-wrapper-3-fasilitas">Kelas 3</div>
            <p class="p"><p class="p-fasilitas">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare ornare.
              Quisque placerat scelerisque tortor ornare ornare Convallis felis vitae tortor augue. Velit nascetur proin
              massa in. Consequat faucibus porttitor enim.
            </p>
          </div>
        </div>
    
        
        <div>
          <img class="rectangle-5-fasilitas" src="img/vip.jpg" alt="Rectangle Image" />
          <div class="button-group">
            <button class="active" onclick="showContent('vip')">
              <i class="fas fa-star"></i> VIP
            </button>
            <button onclick="showContent('kelas1')">
              <i class="fas fa-bed"></i> Kelas 1
            </button>
            <button onclick="showContent('kelas2')">
              <i class="fas fa-bed"></i> Kelas 2
            </button>
            <button onclick="showContent('kelas3')">
              <i class="fas fa-bed"></i> Kelas 3
            </button>
          </div>
        </div>
      </div>
      
      <div class="group-10-fasilitas">
        <div class="group-11-fasilitas">
          <div class="group-12-fasilitas">
            <div class="text-wrapper-8-fasilitas">Fasilitas Publik</div>
            <div class="text-wrapper-9-fasilitas">RSUD PJS</div>
          </div>
        </div>
        <div class="overlap-group-wrapper-fasilitas">
          <div class="overlap-group-2-fasilitas">
            <div class="rectangle-6-fasilitas"></div>
            <div class="group-13-fasilitas">
              <img class="vector-fasilitas" src="img/parkir.jpg" />
              <div class="text-wrapper-10-fasilitas"></div>
            </div>
            <div class="group-14-fasilitas">
              <img class="vector-2-fasilitas" src="img/mushola.jpg" />
              <div class="text-wrapper-11-fasilitas"></div>
            </div>
            <div class="group-15-fasilitas">
              <div class="rectangle-7-fasilitas"></div>
              <div class="rectangle-8-fasilitas"></div>
              <div class="rectangle-9-fasilitas"></div>
            </div>
            <div class="group-16-fasilitas">
              <img class="vector-3-fasilitas" src="img/vector-2.svg" />
              <div class="text-wrapper-12-fasilitas">ATM</div>
            </div>
            <div class="group-17-fasilitas">
              <img class="vector-4-fasilitas" src="img/vector-3.svg" />
              <div class="text-wrapper-13-fasilitas">Kantin</div>
            </div>
          </div>
        </div>
      </div>
      <div class="group-18-fasilitas">
        <div class="text-wrapper-14-fasilitas">Fasilitas Rawat Inap</div>
        <div class="text-wrapper-15-fasilitas">RSUD PJS</div>
      </div>
      <footer class="footer-fasilitas">
        <div class="group-19-fasilitas">
          <img class="RSUD-PJS-fasilitas" src="img/rsud-pjs.svg" />
          <p class="memimpin-dalam-fasilitas">Memimpin dalam Keunggulan<br />Medis, Perawatan Terpercaya</p>
        </div>
        <div class="group-20-fasilitas">
          <div class="text-wrapper-16-fasilitas">Tentang Kami</div>
          <div class="group-21-fasilitas">
            <div class="text-wrapper-17-fasilitas">Dokter</div>
            <div class="text-wrapper-18-fasilitas">Indikator Mutu RS</div>
            <div class="text-wrapper-19-fasilitas">Standar Pelayanan</div>
            <div class="text-wrapper-20-fasilitas">Maklumat Pelayanan</div>
            <div class="text-wrapper-21-fasilitas">Jadwal Pelayanan</div>
          </div>
        </div>
        <div class="group-22-fasilitas">
          <div class="text-wrapper-22-fasilitas">Hubungi Kami</div>
          <div class="group-23-fasilitas">
            <div class="text-wrapper-23-fasilitas">Call Center: 082259776756</div>
            <p class="text-wrapper-24-fasilitas">Gawat Darurat : (0518) 21118</p>
            <div class="text-wrapper-25-fasilitas">Email:  rsud.kotabaru@yahoo.co.id</div>
            <p class="alamat-jl-h-hasan-fasilitas">
              Alamat: Jl. H Hasan Basri No. 57, <br />Kabupaten Kota Baru, <br />Kalimantan Selatan 72113
            </p>
          </div>
        </div>
        <img class="vector-5-fasilitas" src="img/vector-1.svg" />
        <img class="vector-8-fasilitas" src="img/vector-3.svg" />
        <p class="text-wrapper-26-fasilitas">© 2024 RSUD Pangeran Jaya Sumitra All Rights Reserved by IT Support</p>
      </footer>
      <?php include 'layout/header.php'; ?>
    </div>
  </body>
  
  <script>
    // Fungsi untuk menampilkan konten berdasarkan menu yang dipilih
    function showContent(sectionId) {
      // Menghapus kelas "active" dari semua tombol
      const buttons = document.querySelectorAll('.button-group button');
      buttons.forEach(button => button.classList.remove('active'));

      // Menambahkan kelas "active" pada tombol yang dipilih
      document.querySelector(`.button-group button[onclick="showContent('${sectionId}')"]`).classList.add('active');

      // Menyembunyikan semua bagian konten dan menampilkan yang dipilih
      const sections = document.querySelectorAll('.content-section');
      sections.forEach(section => section.classList.add('hidden'));
      document.getElementById(sectionId).classList.remove('hidden');
    }
  </script>
</html>
