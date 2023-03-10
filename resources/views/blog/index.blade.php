@extends('layouts.main-dashboard')

@section('content')

    <h1 class="fs-2">{{ $title }}</h1>
    <hr class="my-4">
    @if (session('message'))
        {!! session('message') !!}
    @endif

    <a href="/admin/blog/tambah" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Data</a>
    <div class="table-responsive">
    <table class="table table-hover table-striped" id="TabelBlog">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Judul Blog</th>
            <th scope="col">Foto</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Keterangan</th>  
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($blog as $b)
          <tr valign="middle">
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $b->judul }}</td>
            <td><img src="{{ asset('storage/'.$b->foto) }}" width="100" alt=""></td>
            <td>{{ $b->tanggal }}</td>
            <td>{{ $b->keterangan }}</td>
            <td>
              <a href="/admin/blog/{{ $b->id }}/edit" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
              <form action="/admin/blog/{{ $b->id}}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fas fa-trash"></i></button>
            </form>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>


  

@endsection
