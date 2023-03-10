@extends('layouts.main')

@section('content')

<h1 class="fs-2">Selamat Datang di Website PPDB TK Sirojul Huda</h1>
<hr>
{{-- alurdaftar --}}
<section class="alur-daftar2" id="alur_daftar2">
    <div class="container">

        <h2 class="fs-2 section-title-hitam">Alur Pendaftaran</h2>

        <div class="row item-alur2">

            <div class="col-12 col-md-6">
                <div class="card mb-4 border-0">
                    <div class="row justify-content-center">
                      <div class="col-2 mb-2">
                          <span class=" d-flex justify-content-center align-items-center rounded-circle overflow-hidden text-white text-semibold fs-3 p-4 ordering-number2" style="background-color: #238a56">1</span>
                    </div>
                      <div class="col-12 col-lg-10">
                        <div class="card-body p-0">
                          <p class="card-text alur-step2">Orang Tua calon anak didik baru menyiapkan berkas persyaratan.</p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card mb-4 border-0">
                    <div class="row justify-content-center">
                      <div class="col-2 mb-2">
                          <span class=" d-flex justify-content-center align-items-center rounded-circle overflow-hidden text-white text-semibold fs-3 p-4 ordering-number2" style="background-color: #238a56">2</span>
                    </div>
                      <div class="col-12 col-lg-10">
                        <div class="card-body p-0">
                          <p class="card-text alur-step2">Orang Tua calon anak didik baru akses laman PPDB online. </p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card mb-4 border-0">
                    <div class="row justify-content-center">
                      <div class="col-2 mb-2">
                          <span class=" d-flex justify-content-center align-items-center rounded-circle overflow-hidden text-white text-semibold fs-3 p-4 ordering-number2" style="background-color: #238a56">3</span>
                    </div>
                      <div class="col-12 col-lg-10">
                        <div class="card-body p-0">
                          <p class="card-text alur-step2">Orang Tua calon anak didik baru melakukan pengajuan pendaftaran dengan mengisi formulir secara online. </p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card mb-4 border-0">
                    <div class="row justify-content-center">
                      <div class="col-2 mb-2">
                          <span class=" d-flex justify-content-center align-items-center rounded-circle overflow-hidden text-white text-semibold fs-3 p-4 ordering-number2" style="background-color: #238a56">4</span>
                    </div>
                      <div class="col-12 col-lg-10">
                        <div class="card-body p-0">
                          <p class="card-text alur-step2">Orang Tua calon anak didik baru menginputkan data pada formulir pendaftaran. </p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card mb-4 border-0">
                    <div class="row justify-content-center">
                      <div class="col-2 mb-2">
                          <span class=" d-flex justify-content-center align-items-center rounded-circle overflow-hidden text-white text-semibold fs-3 p-4 ordering-number2" style="background-color: #238a56">5</span>
                    </div>
                      <div class="col-12 col-lg-10">
                        <div class="card-body p-0">
                          <p class="card-text alur-step2">Orang Tua calon anak didik baru mencetak bukti pengajuan pendaftaran dan mencetak kartu perseta. </p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card mb-4 border-0">
                    <div class="row justify-content-center">
                      <div class="col-2 mb-2">
                          <span class=" d-flex justify-content-center align-items-center rounded-circle overflow-hidden text-white text-semibold fs-3 p-4 ordering-number2" style="background-color: #238a56">6</span>
                    </div>
                      <div class="col-12 col-lg-10">
                        <div class="card-body p-0">
                          <p class="card-text alur-step2">Operator sekolah/PPDB melakukan verifikasi pendaftaran secara online. </p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card mb-4 border-0">
                    <div class="row justify-content-center">
                      <div class="col-2 mb-2">
                          <span class=" d-flex justify-content-center align-items-center rounded-circle overflow-hidden text-white text-semibold fs-3 p-4 ordering-number2" style="background-color: #238a56">7</span>
                    </div>
                      <div class="col-12 col-lg-10">
                        <div class="card-body p-0">
                          <p class="card-text alur-step2">Orang Tua calon anak didik baru melihat hasil seleksi dan pengumuman secara online di laman PPDB Online. </p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <a href="/ppdb/daftar" class="btn btn-secondary mt-5">Daftar sekarang <i class="far fa-hand-point-lef"></i></a>
    </div>
</section>
{{-- end alurdaftar --}}
@endsection
