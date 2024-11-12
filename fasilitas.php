<html>
  <body>
  <!-- <style>
      /* Styling dasar */
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        display: flex;
        justify-content: center;
        padding: 20px;
      }

      .group-3 {
        display: flex;
        align-items: flex-start;
        gap: 20px;
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

      .group-4 {
        max-width: 600px;
      }

      .text-wrapper-3 {
        font-size: 24px;
        font-weight: bold;
        color: #333;
      }

      .group-5, .group-6, .group-7, .group-8, .group-9 {
        margin: 10px 0;
      }

      .rectangle-4 {
        width: 50px;
        height: 5px;
        background-color: #333;
        margin-top: 5px;
      }

      .p, .text-wrapper-7 {
        margin-top: 10px;
        font-size: 14px;
        color: #555;
      }

      /* Konten yang disembunyikan */
      .hidden {
        display: none;
      }
    </style> -->
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
      <!-- <div class="group-3-fasilitas">
        <img class="img-fasilitas" src="img/group-118.png" />
        <div class="group-4-fasilitas">
          <div class="text-wrapper-3-fasilitas">VIP</div>
          <div class="group-5-fasilitas">
            <div class="group-wrapper-fasilitas">
              <div class="group-6-fasilitas">
                <div class="text-wrapper-4-fasilitas">Laboratorium</div>
                <div class="rectangle-4-fasilitas"></div>
              </div>
            </div>
            <div class="div-wrapper-fasilitas">
              <div class="group-7-fasilitas">
                <div class="text-wrapper-5-fasilitas">Radiologi</div>
                <div class="rectangle-4-fasilitas"></div>
              </div>
            </div>
            <div class="group-8-fasilitas">
              <div class="group-9-fasilitas">
                <div class="text-wrapper-6-fasilitas">Farmasi</div>
                <div class="rectangle-4-fasilitas"></div>
              </div>
            </div>
          </div>
          <p class="p-fasilitas">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare ornare.
            Quisque placerat scelerisque tortor ornare ornare Convallis felis vitae tortor augue. Velit nascetur proin
            massa in. Consequat faucibus porttitor enim.
          </p>
          <p class="text-wrapper-7-fasilitas">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare.
          </p>
        </div>
        <img class="rectangle-5-fasilitas" src="img/rectangle-13.png" />
      </div> -->
    
      <!--
      <div class="group-3">
        <div class="group-4">
          <div id="vip" class="content-section">
            <div class="text-wrapper-3">VIP</div>
            <div class="group-5">
              <div class="group-wrapper">
                <div class="group-6">
                  <div class="text-wrapper-4">Laboratorium</div>
                  <div class="rectangle-4"></div>
                </div>
              </div>
              <div class="div-wrapper">
                <div class="group-7">
                  <div class="text-wrapper-5">Radiologi</div>
                  <div class="rectangle-4"></div>
                </div>
              </div>
              <div class="group-8">
                <div class="group-9">
                  <div class="text-wrapper-6">Farmasi</div>
                  <div class="rectangle-4"></div>
                </div>
              </div>
            </div>
            <p class="p">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare ornare.
            </p>
            <p class="text-wrapper-7">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
          </div>
    
          
          <div id="kelas1" class="content-section hidden">
            <div class="text-wrapper-3">Kelas 1</div>
            <p class="p">Konten untuk Kelas 1...</p>
          </div>
    
         
          <div id="kelas2" class="content-section hidden">
            <div class="text-wrapper-3">Kelas 2</div>
            <p class="p">Konten untuk Kelas 2...</p>
          </div>

       
          <div id="kelas3" class="content-section hidden">
            <div class="text-wrapper-3">Kelas 3</div>
            <p class="p">Konten untuk Kelas 3...</p>
          </div>
        </div>
    
        
        <div>
          <img class="rectangle-5" src="img/vip.jpg" alt="Rectangle Image" />
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
      </div> -->
      
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
              <img class="vector-fasilitas" src="img/vector.svg" />
              <div class="text-wrapper-10-fasilitas">Parkir</div>
            </div>
            <div class="group-14-fasilitas">
              <img class="vector-2-fasilitas" src="img/vector-1.svg" />
              <div class="text-wrapper-11-fasilitas">Mushola</div>
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
