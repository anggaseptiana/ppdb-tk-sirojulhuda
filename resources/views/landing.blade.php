<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/fontawesome-free/css/all.min.css" />
    <link rel="shortcut icon" href="/assets/images/logo.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/features/">

    <link href="{{ '/assets/dist/css/bootstrap.min.css' }}" rel="stylesheet">
    <link href="{{ '/assets/css/features.css' }}" rel="stylesheet">

    <title>TK Sirojul Huda</title>
    <style>
      .google-maps {
          position: relative;
          padding-bottom: 75%; // This is the aspect ratio
          height: 0;
          overflow: hidden;
      }
      .google-maps iframe {
          position: absolute;
          top: 0;
          left: 0;
          width: 100% !important;
          height: 100% !important;
      }
    </style>
  </head>

  <body id="home">


{{-- Nav --}}
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand text-semibold text-green-dark" href="#home"><img src="/assets/images/logo.png" alt="Logo TK Sirojul Huda" width="40"> TK Sirojul Huda</a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item ms-md-4 ms-auto">
            <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item ms-md-4 ms-auto">
            <a class="nav-link" href="#profil">Profil</a>
            </li>
            <li class="nav-item ms-md-4 ms-auto">
            <a class="nav-link" href="#fasilitas">Fasilitas</a>
            </li>
            <li class="nav-item ms-md-4 ms-auto">
            <a class="nav-link" href="#galeri">Galeri</a>
            </li>
            <li class="nav-item ms-md-4 ms-auto">
              <a class="nav-link" href="#blog">Blog</a>
            </li>
            <li class="nav-item ms-md-4 ms-auto">
            <a class="nav-link" href="#kontak">Kontak</a>
            </li>
            <li class="nav-item ms-md-4 ms-auto">
            <a class="btn btn-success rounded-pill px-4 py-1 mt-1 text-white" href="/ppdb/pengumuman">Cek Hasil PPDB</a>
            </li>
            <li class="nav-item ms-md-4 ms-auto">
            <a class="btn btn-daftar rounded-pill px-4 py-1 mt-1 " href="/ppdb"><i class="fas fa-user"></i> Daftar</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
{{-- End Nav --}}

    {{-- hero --}}
    <section class="hero mt-5" id="hero">
        <div class="container">
            <h2 class="text-green-dark judul-selamatdatang text-bold fs-1 mt-4">Selamat Datang di <br>TK Sirojul Huda</h2>
            <p class="fs-6">
                Jika bapak dan ibu ingin putra putrinya bersekolah<br>di TK Sirojul Huda, segera daftarkan.
            </p>
            <a href="/ppdb" class="btn btn-daftar rounded-pill px-5 py-2">Daftar</a>
        </div>
    </section>
    {{-- end hero --}}

    {{-- profil --}}
    <section class="profil bg-light" id="profil">
        <div class="container">

            <h2 class="fs-2 section-title-green judul-selamatdatang">Profil TK Sirojul Huda</h2>
            <p class="mb-3" style="text-align: justify">Taman Kanak-Kanak Sirojul Huda terletak di Kp. Cigalumpit RT 002 RW 012 Desa Nagreg Kendan Kecamatan Nagreg Kab. Bandung. Berdiri pada tahun 2020 di bawah naungan Yayasan Sirojul Huda yang di pimpin oleh Rapi Maulana.</p>
            <p class="mb-3" style="text-align: justify">Tahun 2020, TK Sirojul Huda mengawali aktifitas dengan pendataan calon peserta didik baru, dengan semangat dan antusias masyarakat disekitarnya sehingga calon siswa pada Taman Kanak-Kanak (TK) Sirojul Huda sudah mencapai 43 orang.</p>
            <p class="mb-3" style="text-align: justify">Tujuannya adalah mempersiapkan mereka dengan memberikan pelatihan sebagai bekal masuk Sekolah Dasar. Sebagaimana kita ketahui bahwa materi pelajaran pada tingkat Sekolah Dasar menuntut anak didik mampu membaca, menulis dan berhitung, sedangkan bekal pendidikan ini tidak mereka dapatkan pada jenjang pendidikan sebelumnya.</p>
            <p class="mb-3" style="text-align: justify">Sampai saat ini TK Sirojul Huda di pimpin oleh Kepala Sekolah yang bernama <b>Asep Aminudin, S.Pd</b>.
              Serta Staff Pengajar diantaranya adalah:
                <ol>
                    <li>Andini Nur Aulia</li>
                    <li>Esti Pania</li>
                    <li>Syifaul Azizah</li>
                    <li>Angga Septiana</li>
                </ol>
            </p>

        </div>
    </section>
    {{-- end profil --}}

    {{-- Visi & Misi --}}
    <section class="visi-misi" id="visi_misi">
        <div class="container">
            <h2 class="fs-2 section-title-white judul-selamatdatang">Visi & Misi</h2>
            <div class="row">
                <div class="col-12 col-xl-7 item-visi-misi-kiri">
                    <h3 class="text-white mt-4">Visi</h3>
                    <p class="mb-4 text-white">"Terwujudnya anak-anak yang sehat, cerdas, ceria dan berakhlak mulia serta mengembangkan potensi anak".</p>
                    <h3 class="text-white">Misi</h3>
                    <ol class="mb-4 text-white">
                        <li>Memberikan layanan pendidikan bagi anak usia dini.</li>
                        <li>Membekali Aqidah Islamiyah agar menjadi pribadi yang berakhlakul karimah.</li>
                        <li>Membentuk karakter dan kepribadian serta mandiri.</li>
                        <li>Meningkatkan kesadaran dan partisipasi masyarakat terhadap pelayanan TK.</li>
                        <li>Menumbuh kembangkan minat belajar anak melalui bermain kreatif.</li>
                        <li>Membiasakan anak untuk berinteraksi dan bersosialisasi dengan teman sebaya dan guru.</li>
                        <li>Menanamkan budi pekerti yang baik pada anak usia dini.</li>
                      </ol>
                    <h3 class="text-white">Tujuan</h3>
                    <p class="mb-4 text-white">Mewujudkan anak yang cerdas, jujur, sopan santun, berkarakter sejak dini dan menjadikan anak yang mampu menyesuaikan diri dengan lingkungan.</p>
                </div>
                <div class="col-5 d-none d-xl-block overflow-hidden item-visi-misi-kanan d-flex align-items-end">
                    <img src="/assets/images/gambar-guru.png" class="img-fluid" alt="Foto guru TK Al-Ishlah sedang mengajar">
                </div>
            </div>
        </div>
    </section>
    {{-- End Visi & Misi --}}

    {{-- Program Unggulan --}}
    <section>
    <div class="container marketing">
      <h2 class="fs-2 section-title-green judul-selamatdatang mb-2">Manajemen Sekolah</h2>
      <h4 class="fs-4 section-title-green judul-selamatdatang">Daftar Tenaga Pendidik & Administrasi Sekolah</h4>

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
  
          <h5 class="nama_guru">Asep Aminudin</h5>
          <p>Kepala TK</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
  
          <h5 class="nama_guru">Siti Nurasyiah</h5>
          <p>Bendahara</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
  
          <h5 class="nama_guru">Andini Nur Aulia</h5>
          <p>Guru Kelas AB</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <div class="row">
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
  
          <h5 class="nama_guru">Syifaul Azizah</h5>
          <p>Guru Kelas B1</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
  
          <h5 class="nama_guru">Esti Pania</h5>
          <p>Guru Kelas B2</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="{{ 'assets/images/foto_guru/angga_septiana.jpeg' }}" class="rounded-circle" width="140" height="140" alt="">
          <h5 class="nama_guru">Angga Septiana</h5>
          <p>Guru Pendamping</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>
  </section>
    {{-- Akhir Program Unggulan --}}

    {{-- Fasilitas --}}
    <section class="fasilitas" id="fasilitas">
    <div class="container" id="custom-cards">
      <h2 class="fs-2 section-title-green judul-selamatdatang mb-2">Fasilitas Sekolah</h2>
  
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/assets/images/unsplash-photo-1.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Halaman Sekolah</h2>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/assets/images/unsplash-photo-2.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Ruang Kelas</h2>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/assets/images/unsplash-photo-3.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Alat Peraga Edukasi</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    {{-- Akhir Fasilitas --}}

    {{-- galeri --}}
    <section class="galeri" id="galeri">
        <div class="container">
            <h2 class="fs-2 section-title-green judul-selamatdatang">Galeri TK Sirojul Huda</h2>
            <div class="row">

                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <div class="card shadow galery-item overflow-hidden">
                        <img src="/assets/images/galeri-1.jpg" class="card-img-top img-fluid" alt="Foto Galeri">
                        <div class="card-body">
                          <p class="card-text">Galeri 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <div class="card shadow galery-item overflow-hidden">
                        <img src="/assets/images/galeri-1.jpg" class="card-img-top img-fluid" alt="Foto Galeri">
                        <div class="card-body">
                          <p class="card-text">Galeri 2</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <div class="card shadow galery-item overflow-hidden">
                        <img src="/assets/images/galeri-1.jpg" class="card-img-top img-fluid" alt="Foto Galeri">
                        <div class="card-body">
                          <p class="card-text">Galeri 3</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <div class="card shadow galery-item overflow-hidden">
                        <img src="/assets/images/galeri-4.jpg" class="card-img-top img-fluid" alt="Foto Galeri">
                        <div class="card-body">
                          <p class="card-text">Galeri 4</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <div class="card shadow galery-item overflow-hidden">
                        <img src="/assets/images/galeri-1.jpg" class="card-img-top img-fluid" alt="Foto Galeri">
                        <div class="card-body">
                          <p class="card-text">Galeri 5</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <div class="card shadow galery-item overflow-hidden">
                        <img src="/assets/images/galeri-6.jpg" class="card-img-top img-fluid" alt="Foto Galeri">
                        <div class="card-body">
                          <p class="card-text">Galeri 6</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <div class="card shadow galery-item overflow-hidden">
                        <img src="/assets/images/galeri-6.jpg" class="card-img-top img-fluid" alt="Foto Galeri">
                        <div class="card-body">
                          <p class="card-text">Galeri 7</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                  <div class="card shadow galery-item overflow-hidden">
                      <img src="/assets/images/galeri-6.jpg" class="card-img-top img-fluid" alt="Foto Galeri">
                      <div class="card-body">
                        <p class="card-text">Galeri 8</p>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </section>
    {{-- end galeri --}}

    {{-- Awal Blog --}}
    <section class="blog" id="blog">
      <div class="container">
        <h2 class="fs-2 section-title-green judul-selamatdatang">Blog TK Sirojul Huda</h2>
    <div class="row">
      <div class="col-sm-3">
        <div class="card text-center">
          <img src="{{ 'assets/images/galeri-6.jpg' }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title subjudul-blog">Visitasi TK Sirojul Huda</h5>
            <small><i class="fas fa-calendar"></i> 12-08-2022</small>
            <p class="card-text">Alhamdulillah, TK Sirojul Huda telah melakukan......</p>
            <a href="#" class="btn btn-blog rounded-pill px-4 py-1 mt-1">Lihat Selengkapnya</span></a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card text-center">
          <img src="{{ 'assets/images/kolase.jpeg' }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title subjudul-blog">Kamis Kreativitas</h5>
            <small><i class="fas fa-calendar"></i> 12-08-2022</small>
            <p class="card-text">Minggu ini kreativitas kolase buah apel tema....</p>
            <a href="#" class="btn btn-blog rounded-pill px-4 py-1 mt-1">Lihat Selengkapnya</span></a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card text-center">
          <img src="{{ 'assets/images/galeri-6.jpg' }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title subjudul-blog">Special title treatment</h5>
            <small><i class="fas fa-calendar"></i> 12-08-2022</small>
            <p class="card-text">With supporting text below as a natural lead-in....</p>
            <a href="#" class="btn btn-blog rounded-pill px-4 py-1 mt-1">Lihat Selengkapnya</span></a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card text-center">
          <img src="{{ 'assets/images/galeri-6.jpg' }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title subjudul-blog">Special title treatment</h5>
            <small><i class="fas fa-calendar"></i> 12-08-2022</small>
            <p class="card-text">With supporting text below as a natural lead-in....</p>
            <a href="#" class="btn btn-blog rounded-pill px-4 py-1 mt-1">Lihat Selengkapnya</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
    {{-- Akhir Blog --}}

    {{-- kontak --}}
    <section class="kontak bg-light" id="kontak">
        <div class="container">
            <h3 class="section-title-green judul-selamatdatang">Hubungi Kami</h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <dl>
                        <dt class="fs-5 text-semibold">Alamat</dt>
                        <dd class="fs-6 mb-3">Kp. Cigalumpit RT 002 RW 012 Desa Nagreg Kendan Kecamatan Nagreg Kab. Bandung Kode Pos: 40397 - 40215</dd>
                        <dt class="fs-5 text-semibold">Telepon</dt>
                        <dd class="fs-6 mb-3"><a href="https://wa.me/+6282116114356" target="_blank" style="text-decoration: none;" class="text-dark">0821-1611-4356</a></dd>
                        <dt class="fs-5 text-semibold">Email Sekolah</dt>
                        <dd class="fs-6 mb-3"><a href="mailto:sirojulhudatk@gmail.com" target="_blank" style="text-decoration: none;" class="text-dark">sirojulhudatk@gmail.com</a></dd>
                        {{-- <dt class="fs-5 text-semibold">Web Sekolah</dt>
                        <dd class="fs-6 mb-4">tksirojulhuda.edu</dd> --}}
                        <dt class="fs-5 text-semibold">Sosial media</dt>
                        <dd class="fs-6 mb-3"><a href="https://instagram.com/sirojulhuda_" target="_blank" style="text-decoration: none; margin-right: 5px;" class="text-dark"><i class="fab fa-instagram"></i> sirojulhuda_</a>
                        </dd>
                    </dl>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="google-maps">
                      <iframe width="600" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=AHSAN%20PRINTING%20NAGREG&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                      </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end kontak --}}

    @include('partials.footer')



  </body>
</html>
