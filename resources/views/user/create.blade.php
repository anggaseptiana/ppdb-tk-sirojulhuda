@extends('layouts.main-dashboard')

@section('content')

    <h1 class="fs-2">{{ $title }}</h1>
    <hr class="my-4">
    @if (session('message'))
        {!! session('message') !!}
    @endif

   <form action="{{ route('simpan_user') }}" method="post" enctype="multipart/form-data">
    @csrf

    <section id="step1" class="m-0 p-0 info-step">
        <p class="text-medium fs-5 mb-2">Tambah User</p>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <br>
        <div class="mb-2 row">
            <label for="nama" class="col-12 col-md-3 col-form-label">Nama</label>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" required value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="email" class="col-12 col-md-3 col-form-label">Email</label>
            <div class="col-12 col-md-9">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="password" class="col-12 col-md-3 col-form-label">Password</label>
            <div class="col-12 col-md-9">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-2 row">
            <label for="confirmation" class="col-12 col-md-3 col-form-label">Konfirmasi Password</label>
            <div class="col-12 col-md-9">
                <input type="password" class="form-control @error('confirmation') is-invalid @enderror" name="confirmation" id="confirmation" required>
                @error('confirmation')
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
