@extends('layouts.main')

@section('content')

    <h1 class="fs-2">Informasi Data Penerimaan Calon Peserta Didik</h1>
    <hr class="my-4">
    <p>Berikut adalah semua data calon peserta didik berdasarkan tahun ajaran yang diterima maupun tidak diterima</p>

    @if( count($students) > 0 )
    <div class="table-responsive">
    <table class="table table-hover table-striped" id="TabelSiswa">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal Daftar</th>
            <th scope="col">Status Penerimaan</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($students as $student)
          <tr valign="middle">
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $student->nama_lengkap }}</td>
            <td>{{ $student->jk }}</td>
            <td>{{ $student->alamat }}</td>
            <td>{{ $student->created_at }}</td>
            <td>
                @if ( $student->diterima == 'lolos' )
                <p class="text-success my-auto">Lolos</p>
                @endif
                @if ( $student->diterima == 'tidak lolos' )
                <p class="text-danger my-auto">Tidak Lolos</p>
                @endif
                @if ( $student->diterima == 'proses seleksi' )
                <p class="text-primary my-auto">Proses Seleksi</p>
                @endif
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
    @else
    <p>Belum ada calon peserta didik</p>
    @endif


@endsection
