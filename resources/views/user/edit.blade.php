@extends('layouts.main-dashboard')

@section('content')

    <h1 class="fs-2">{{ $title }}</h1>
    <hr class="my-4">
    @if (session('message'))
        {!! session('message') !!}
    @endif
    
    @foreach ($user as $u)
    <form action="/admin/user/{{ $u->id }}" method="post">
        @csrf
    
        <section id="step1" class="m-0 p-0 info-step">
            <p class="text-medium fs-5 mb-2">Edit Password User</p>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <br>
    
            <div class="mb-2 row">
                <label for="password" class="col-12 col-md-3 col-form-label">Password</label>
                <div class="col-12 col-md-9">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
    
            <div class="mb-2 row">
                <label for="password_confirmation" class="col-12 col-md-3 col-form-label">Konfirmasi Password</label>
                <div class="col-12 col-md-9">
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation">
                    @error('password_confirmation')
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
    @endforeach
   

  

@endsection
