@extends('layouts.main-dashboard')

@section('content')

    <h1 class="fs-2">{{ $title }}</h1>
    <hr class="my-4">
    @if (session('message'))
        {!! session('message') !!}
    @endif

   <form action="{{ route('simpan_blog') }}" method="post" enctype="multipart/form-data">
    @csrf

    <section id="step1" class="m-0 p-0 info-step">
        <p class="text-medium fs-5 mb-2">Tambah Blog</p>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <br>
        <div class="mb-2 row">
            <label for="tanggal_lahir" class="col-12 col-md-3 col-form-label">Tanggal</label>
            <div class="col-12 col-md-9">
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" required value="{{ old('tanggal') }}">
                @error('tanggal_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="nama_lengkap" class="col-12 col-md-3 col-form-label">Judul</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" required value="{{ old('judul') }}">
                @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="foto" class="col-12 col-md-3 col-form-label">Foto</label>
            <div class="col-12 col-md-9">
                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" id="foto" required>
                @error('foto')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="keterangan" class="col-12 col-md-3 col-form-label">Keterangan</label>
            <div class="col-12 col-md-9">
                <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan" placeholder="Isi keterangan blog" required rows="3">{{ old('keterangan') }}</textarea>
                @error('keterangan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row justify-content-end">
            <div class="col-12 col-md-9 d-flex justify-content-end">
                <a href="javascript:history.back()" class="btn btn-secondary text-white">Kembali</a>
                <button type="submit" class="btn btn-primary text-white" style="margin-left: 5px;">Simpan</button>
            </div>
        </div>
   </form>

  

@endsection
