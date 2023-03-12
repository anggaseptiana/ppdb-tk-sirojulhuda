@extends('layouts.main-dashboard')

@section('content')

    <h1 class="fs-2">{{ $title }}</h1>
    <hr class="my-4">
    @if (session('message'))
        {!! session('message') !!}
    @endif

    <a href="/admin/user/tambah" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Data</a>
    <div class="table-responsive">
    <table class="table table-hover table-striped" id="TabelBlog">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($user as $u)
          <tr valign="middle">
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>
              <a href="/admin/user/{{ $u->id }}/edit" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
              <form action="/admin/user/{{ $u->id }}" method="post" class="d-inline">
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
